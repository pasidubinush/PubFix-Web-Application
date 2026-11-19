<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Handyman;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Review>
 */
class ReviewFactory extends Factory
{
    private static array $comments = [
        'Absolutely brilliant work. Would hire again in a heartbeat.',
        'Showed up on time, did the job perfectly. Very happy!',
        'Professional and tidy. Couldn\'t ask for more.',
        'Friendly, quick, and the quality was top-notch.',
        'Excellent communication and fantastic end result.',
        'Did exactly what was asked, no fuss. Great value.',
        'Super reliable. The bathroom looks amazing now.',
        'Completed the job faster than expected. Great work.',
        'Very happy with the result. Will recommend to friends.',
        null,
    ];

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'user_id' => User::factory(),
            'handyman_id' => Handyman::factory(),
            'rating' => fake()->numberBetween(3, 5),
            'comment' => fake()->randomElement(self::$comments),
        ];
    }

    /**
     * A five-star review.
     */
    public function fiveStar(): static
    {
        return $this->state(fn (array $attributes) => ['rating' => 5]);
    }
}
