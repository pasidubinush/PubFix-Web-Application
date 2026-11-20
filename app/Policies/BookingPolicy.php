<?php

namespace App\Policies;

use App\Models\Booking;
use App\Models\Handyman;
use App\Models\User;

class BookingPolicy
{
    /**
     * Customers can only view their own bookings.
     */
    public function view(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id;
    }

    /**
     * Customers can update their own bookings; Workers can update assigned bookings.
     */
    public function update(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id
            || ($user->isHandyman() && $booking->handyman?->user_id === $user->id);
    }

    public function viewAsWorker(User $user, Booking $booking): bool
    {
        return $user->isHandyman() && $booking->handyman?->user_id === $user->id;
    }

    public function accept(User $user, Booking $booking): bool
    {
        return $this->viewAsWorker($user, $booking) && $booking->isPending();
    }

    public function decline(User $user, Booking $booking): bool
    {
        return $this->accept($user, $booking);
    }

    public function complete(User $user, Booking $booking): bool
    {
        return $this->viewAsWorker($user, $booking) && $booking->isConfirmed();
    }
}
