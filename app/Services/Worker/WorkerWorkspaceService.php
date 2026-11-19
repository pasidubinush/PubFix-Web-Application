<?php

namespace App\Services\Worker;

use App\Enums\BookingStatus;
use App\Models\Booking;
use App\Models\Handyman;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class WorkerWorkspaceService
{
    /**
     * Load the existing data needed by Worker workspace pages.
     *
     * @return array{handyman: Handyman, upcomingBookings: Collection, completedBookings: Collection}
     */
    public function workspace(User $user): array
    {
        $handyman = $this->profile($this->handyman($user));
        $bookings = $this->bookings($handyman);
        $weekStart = now()->startOfWeek();
        $weekEnd = now()->endOfWeek();
        $monthStart = now()->startOfMonth();
        $monthEnd = now()->endOfMonth();
        $monthlyCompletedJobCount = $handyman->bookings()
            ->where('status', BookingStatus::Completed)
            ->whereBetween('booking_at', [$monthStart, $monthEnd])
            ->count();

        return [
            'handyman' => $handyman,
            'pendingRequests' => $bookings->filter(fn (Booking $booking): bool => $booking->isPending()),
            'bookingCount' => $bookings->count(),
            'confirmedBookingCount' => $bookings->filter(fn (Booking $booking): bool => $booking->isConfirmed())->count(),
            'cancelledBookingCount' => $bookings->filter(fn (Booking $booking): bool => $booking->status === BookingStatus::Cancelled)->count(),
            'upcomingBookings' => $bookings->filter(fn (Booking $booking): bool => $booking->booking_at->isFuture() && $booking->isConfirmed()),
            'weeklyBookings' => $bookings->filter(fn (Booking $booking): bool => $booking->booking_at->between($weekStart, $weekEnd)),
            'completedBookings' => $bookings->filter(fn ($booking): bool => $booking->isCompleted()),
            'recentBookings' => $bookings->take(5),
            'weeklyJobCount' => $handyman->bookings()->whereBetween('booking_at', [$weekStart, $weekEnd])->count(),
            'monthlyCompletedJobCount' => $monthlyCompletedJobCount,
            'monthlyEarnings' => null,
            'rating' => (float) ($handyman->reviews_avg_rating ?? 0),
        ];
    }

    public function handyman(User $user): Handyman
    {
        return $user->handyman()->firstOrFail();
    }

    /**
     * Load a Worker profile and its public-facing aggregates.
     */
    public function profile(Handyman $handyman): Handyman
    {
        return $handyman->load([
            'user',
            'category',
        ])->loadCount([
            'bookings',
            'reviews',
        ])->loadAvg('reviews', 'rating');
    }

    /**
     * Load bookings assigned to a Worker.
     *
     * @return Collection<int, \App\Models\Booking>
     */
    public function bookings(Handyman $handyman): Collection
    {
        return $handyman->bookings()
            ->with(['user', 'handyman', 'review'])
            ->latest('booking_at')
            ->get();
    }

    /**
     * Load accepted and completed bookings for a calendar month.
     *
     * @return array{period: CarbonInterface, bookings: Collection<int, Booking>, upcoming: Collection<int, Booking>}
     */
    public function schedule(Handyman $handyman, ?string $period = null): array
    {
        [$periodStart, $periodEnd] = $this->periodBounds($period);
        $bookings = $handyman->bookings()
            ->with(['user', 'handyman'])
            ->whereIn('status', [BookingStatus::Confirmed, BookingStatus::Completed])
            ->whereBetween('booking_at', [$periodStart, $periodEnd])
            ->orderBy('booking_at')
            ->get();

        return [
            'period' => $periodStart,
            'bookings' => $bookings,
            'upcoming' => $bookings->filter(fn (Booking $booking): bool => $booking->booking_at->isFuture() && $booking->isConfirmed()),
        ];
    }

    /**
     * Load completed jobs for an earnings period without inventing payment amounts.
     *
     * @return array{period: CarbonInterface, completedBookings: Collection<int, Booking>, totalEarnings: null, paymentDataAvailable: false}
     */
    public function earnings(Handyman $handyman, ?string $period = null): array
    {
        [$periodStart, $periodEnd] = $this->periodBounds($period);
        $completedBookings = $handyman->bookings()
            ->with('user')
            ->where('status', BookingStatus::Completed)
            ->whereBetween('booking_at', [$periodStart, $periodEnd])
            ->orderByDesc('booking_at')
            ->get();

        return [
            'period' => $periodStart,
            'completedBookings' => $completedBookings,
            'totalEarnings' => null,
            'paymentDataAvailable' => false,
        ];
    }

    /**
     * @return array{CarbonInterface, CarbonInterface}
     */
    private function periodBounds(?string $period): array
    {
        $start = $period === null
            ? now()->startOfMonth()
            : Carbon::createFromFormat('Y-m', $period)->startOfMonth();

        return [$start, $start->copy()->endOfMonth()];
    }

    /**
     * Load a single booking only when it belongs to the current Worker.
     */
    public function bookingForWorker(Handyman $handyman, Booking $booking): Booking
    {
        abort_unless($booking->handyman_id === $handyman->id, 404);

        return $booking->load(['user', 'handyman.category', 'review']);
    }

    /**
     * Accept a pending request atomically so concurrent Workers cannot claim it.
     */
    public function acceptBooking(Handyman $handyman, Booking $booking): Booking
    {
        return DB::transaction(function () use ($handyman, $booking): Booking {
            $lockedBooking = Booking::query()
                ->whereKey($booking->id)
                ->where('handyman_id', $handyman->id)
                ->lockForUpdate()
                ->firstOrFail();

            abort_unless($lockedBooking->isPending(), 409, 'This booking is no longer available.');

            $lockedBooking->update(['status' => BookingStatus::Confirmed]);

            return $lockedBooking->fresh(['user', 'handyman.category']);
        });
    }

    /**
     * Decline a request using the existing cancelled state.
     */
    public function declineBooking(Handyman $handyman, Booking $booking): Booking
    {
        return DB::transaction(function () use ($handyman, $booking): Booking {
            $lockedBooking = Booking::query()
                ->whereKey($booking->id)
                ->where('handyman_id', $handyman->id)
                ->lockForUpdate()
                ->firstOrFail();

            abort_unless($lockedBooking->isPending(), 409, 'Only pending bookings can be declined.');

            $lockedBooking->update(['status' => BookingStatus::Cancelled]);

            return $lockedBooking;
        });
    }

    /**
     * Complete a confirmed job using the existing booking workflow.
     */
    public function completeBooking(Handyman $handyman, Booking $booking): Booking
    {
        return DB::transaction(function () use ($handyman, $booking): Booking {
            $lockedBooking = Booking::query()
                ->whereKey($booking->id)
                ->where('handyman_id', $handyman->id)
                ->lockForUpdate()
                ->firstOrFail();

            abort_unless($lockedBooking->isConfirmed(), 409, 'Only confirmed bookings can be completed.');

            $lockedBooking->update(['status' => BookingStatus::Completed]);

            return $lockedBooking;
        });
    }

    /**
     * Update only fields owned by the Handyman profile.
     *
     * @param array<string, mixed> $attributes
     */
    public function updateProfile(Handyman $handyman, array $attributes): Handyman
    {
        $handyman->update($attributes);

        return $handyman->refresh();
    }
}