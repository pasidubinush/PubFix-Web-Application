<?php

namespace App\Http\Controllers\Booking;

use App\Enums\BookingStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\StoreBookingRequest;
use App\Models\Booking;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Show the authenticated customer's booking history.
     */
    public function index(): View
    {
        $bookings = Auth::user()
            ->bookings()
            ->with(['handyman.user', 'handyman.category', 'review'])
            ->latest('booking_at')
            ->paginate(10);

        return view('bookings.index', compact('bookings'));
    }

    /**
     * Store a new booking for the authenticated customer.
     */
    public function store(StoreBookingRequest $request): JsonResponse|RedirectResponse
    {
        $booking = Booking::create([
            'user_id' => Auth::id(),
            'handyman_id' => $request->handyman_id,
            'description' => $request->description,
            'booking_at' => $request->booking_at,
            'status' => BookingStatus::Pending,
        ]);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your job request has been sent! The handyman will confirm within 30 minutes.',
                'booking_id' => $booking->id,
            ]);
        }

        return redirect()->route('bookings.index')
            ->with('success', 'Job request sent! Your handyman will confirm shortly.');
    }

    /**
     * Show the detail view for a single booking.
     */
    public function show(Booking $booking): View
    {
        abort_unless($booking->user_id === Auth::id(), 403, 'Unauthorized booking access.');

        $booking->load(['handyman.user', 'handyman.category', 'review']);

        return view('bookings.show', compact('booking'));
    }

    /**
     * Cancel a pending booking.
     */
    public function cancel(Booking $booking): RedirectResponse
    {
        abort_unless($booking->user_id === Auth::id(), 403, 'Unauthorized booking access.');

        abort_unless($booking->isPending(), 403, 'Only pending bookings can be cancelled.');

        $booking->update(['status' => BookingStatus::Cancelled]);

        return redirect()->route('bookings.index')
            ->with('success', 'Your booking has been cancelled.');
    }
}
