<?php

namespace App\Models;

use App\Enums\BookingStatus;
use Database\Factories\BookingFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable(['user_id', 'handyman_id', 'description', 'booking_at', 'status'])]
class Booking extends Model
{
    /** @use HasFactory<BookingFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'booking_at' => 'datetime',
            'status' => BookingStatus::class,
        ];
    }

    /**
     * The customer who made this booking.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The handyman assigned to this booking.
     */
    public function handyman(): BelongsTo
    {
        return $this->belongsTo(Handyman::class);
    }

    /**
     * The review associated with this booking.
     */
    public function review(): HasOne
    {
        return $this->hasOne(Review::class);
    }

    /**
     * Whether this booking is pending confirmation.
     */
    public function isPending(): bool
    {
        return $this->status === BookingStatus::Pending;
    }

    /**
     * Whether this booking has been confirmed.
     */
    public function isConfirmed(): bool
    {
        return $this->status === BookingStatus::Confirmed;
    }

    /**
     * Whether this booking is completed and eligible for review.
     */
    public function isCompleted(): bool
    {
        return $this->status === BookingStatus::Completed;
    }
}
