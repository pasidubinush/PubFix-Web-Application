<?php

namespace App\Http\Controllers\Handyman;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Handyman;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class HandymanController extends Controller
{
    /**
     * Display the find-a-handyman listing page with filters applied,
     * or return JSON for dynamic map & filter lookups.
     */
    public function index(Request $request): View|JsonResponse
    {
        $query = Handyman::query()
            ->with(['user', 'category', 'reviews'])
            ->withCount('reviews')
            ->withAvg('reviews', 'rating');

        // Filter by categories
        if ($request->filled('categories')) {
            $categoriesList = (array) $request->categories;
            $query->whereHas('category', function ($q) use ($categoriesList) {
                $q->whereIn('name', $categoriesList);
            });
        }

        // Filter by availability
        if ($request->boolean('available_only')) {
            $query->where('available', true);
        }

        // Filter by hourly rate range
        if ($request->filled('rate_min')) {
            $query->where('hourly_rate', '>=', (float) $request->rate_min);
        }
        if ($request->filled('rate_max')) {
            $query->where('hourly_rate', '<=', (float) $request->rate_max);
        }

        // Filter by minimum rating
        if ($request->filled('min_rating')) {
            $query->having('reviews_avg_rating', '>=', (float) $request->min_rating);
        }

        // Filter by ZIP code or location
        $zipInput = $request->input('zip', $request->input('location'));
        if (! empty($zipInput)) {
            $zipClean = trim($zipInput);
            $zipCode = preg_match('/\b\d{5}\b/', $zipClean, $matches) ? $matches[0] : $zipClean;

            $query->where(function ($q) use ($zipClean, $zipCode) {
                $q->where('city', 'like', "%{$zipClean}%")
                    ->orWhereHas('user', function ($uq) use ($zipCode) {
                        $uq->where('zip_code', 'like', "%{$zipCode}%");
                    });
            });
        }

        // Filter by service keyword search
        if ($request->filled('service')) {
            $keyword = trim($request->service);
            $query->where(function ($q) use ($keyword) {
                $q->where('bio', 'like', "%{$keyword}%")
                    ->orWhereHas('category', fn ($sq) => $sq->where('name', 'like', "%{$keyword}%"))
                    ->orWhereHas('user', fn ($sq) => $sq->where('name', 'like', "%{$keyword}%"));
            });
        }

        // Sorting
        match ($request->input('sort', 'recommended')) {
            'rating_desc' => $query->orderByDesc('reviews_avg_rating'),
            'rate_asc' => $query->orderBy('hourly_rate'),
            'rate_desc' => $query->orderByDesc('hourly_rate'),
            default => $query->orderByDesc('reviews_avg_rating')->orderByDesc('reviews_count'),
        };

        if ($request->expectsJson() || $request->query('format') === 'json') {
            $results = $query->get()->map(function (Handyman $pro) {
                return [
                    'id' => $pro->id,
                    'name' => $pro->user->name ?? 'Handyman',
                    'category' => $pro->category->name ?? 'General',
                    'rate' => (float) $pro->hourly_rate,
                    'bio' => $pro->bio,
                    'city' => $pro->city,
                    'zip_code' => $pro->user->zip_code ?? '78704',
                    'latitude' => (float) $pro->latitude,
                    'longitude' => (float) $pro->longitude,
                    'available' => (bool) $pro->available,
                    'rating' => round((float) ($pro->reviews_avg_rating ?? 5.0), 1),
                    'reviews' => (int) $pro->reviews_count,
                    'image' => $pro->user?->avatar_url,
                ];
            });

            return response()->json([
                'success' => true,
                'zip' => $zipInput ?? '00700',
                'count' => $results->count(),
                'handymen' => $results,
            ]);
        }

        $handymen = $query->paginate(9)->withQueryString();
        $categories = Category::withCount('handymen')->orderByDesc('handymen_count')->get();

        $defaultImages = [
            asset('images/pubfix/52409.png'),
            asset('images/pubfix/c4ce0.png'),
            asset('images/pubfix/26789.png'),
            asset('images/pubfix/d12cc.png'),
            asset('images/pubfix/c42be.png'),
            asset('images/pubfix/ddb51.png'),
        ];

        // Format all database handymen for client-side interactive rendering
        $dbHandymen = Handyman::query()
            ->with(['user', 'category', 'reviews'])
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->latest()
            ->get();

        $handymenData = $dbHandymen->map(function (Handyman $pro, int $index) use ($defaultImages) {
            $categoryName = $pro->category->name ?? 'General repairs';
            $categorySlug = Str::slug($categoryName);

            $avatar = $pro->user?->avatar_url ?: $defaultImages[$index % count($defaultImages)];
            $rating = round((float) ($pro->reviews_avg_rating ?? ($pro->reviews()->avg('rating') ?: 5.0)), 1);
            $reviewsCount = (int) ($pro->reviews_count ?? $pro->reviews()->count());
            $completedJobs = $pro->completedJobsCount();

            $services = [$categorySlug];
            if ($categorySlug === 'furniture-assembly') {
                $services[] = 'carpentry';
            } elseif ($categorySlug === 'carpentry') {
                $services[] = 'furniture-assembly';
            } else {
                $services[] = 'general-repairs';
            }

            $skills = array_filter([
                $categoryName,
                'Repairs',
                'Maintenance',
            ]);

            return [
                'id' => $pro->id,
                'name' => $pro->user?->name ?? 'Professional Handyman',
                'category' => $categoryName,
                'services' => array_values(array_unique($services)),
                'availability' => $pro->available ? ['any-time', 'today', 'tomorrow', 'this-weekend'] : [],
                'availableText' => $pro->available ? 'Today, from 9:00 AM' : 'Currently unavailable',
                'rating' => $rating > 0 ? $rating : 5.0,
                'reviews' => $reviewsCount,
                'jobs' => $completedJobs > 0 ? $completedJobs : max(1, $reviewsCount * 2),
                'distance' => rand(2, 5),
                'neighborhood' => $pro->city ?: 'Austin',
                'rate' => (float) $pro->hourly_rate,
                'bio' => $pro->bio ?: 'Experienced local professional dedicated to reliable, tidy work.',
                'skills' => array_values($skills),
                'image' => $avatar,
            ];
        })->values()->all();

        return view('find-handyman', compact('handymen', 'categories', 'zipInput', 'handymenData'));
    }
}
