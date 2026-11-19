<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Handyman;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Handyman>
 */
class HandymanFactory extends Factory
{
    private static array $bios = [
        'I take pride in every job, big or small. Your home is in good hands.',
        'Reliable, punctual, and meticulous. Fifteen years in the trade.',
        'From flat-packs to full renovations — I get it done right the first time.',
        'Detail-oriented professional with a passion for clean, lasting work.',
        'Your home deserves the best. I bring skill and care to every project.',
        'Licensed contractor with a reputation for honesty and great craftsmanship.',
        'I treat every home like my own. No shortcuts, ever.',
        'Friendly, affordable, and always on time. Happy to help!',
    ];

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->handyman(),
            'category_id' => Category::factory(),
            'hourly_rate' => fake()->randomFloat(2, 25, 120),
            'bio' => fake()->randomElement(self::$bios),
            'city' => fake()->randomElement(['Austin, TX', 'Austin', 'Round Rock, TX', 'Cedar Park, TX']),
            'latitude' => fake()->latitude(30.1, 30.5),
            'longitude' => fake()->longitude(-97.9, -97.6),
            'available' => fake()->boolean(80),
        ];
    }

    /**
     * Mark the handyman as currently available.
     */
    public function available(): static
    {
        return $this->state(fn (array $attributes) => ['available' => true]);
    }

    /**
     * Mark the handyman as currently unavailable.
     */
    public function unavailable(): static
    {
        return $this->state(fn (array $attributes) => ['available' => false]);
    }
}
