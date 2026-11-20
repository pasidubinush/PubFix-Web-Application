<?php

namespace App\Models;

use Database\Factories\HandymanFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['user_id', 'category_id', 'hourly_rate', 'bio', 'city', 'latitude', 'longitude', 'available'])]
class Handyman extends Model
{
    /** @use HasFactory<HandymanFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'hourly_rate' => 'decimal:2',
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
            'available' => 'boolean',
        ];
    }

    /**
     * The user account that belongs to this handyman.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The service category this handyman works in.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Bookings for this handyman.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Reviews for this handyman.
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Average star rating across all reviews.
     */
    public function averageRating(): float
    {
        return round((float) $this->reviews()->avg('rating'), 1);
    }

    /**
     * Total completed jobs.
     */
    public function completedJobsCount(): int
    {
        return $this->bookings()->where('status', 'completed')->count();
    }

    /**
     * Get the avatar URL from the linked user.
     */
    public function getAvatarUrlAttribute(): ?string
    {
        return $this->user?->avatar_url;
    }
}
