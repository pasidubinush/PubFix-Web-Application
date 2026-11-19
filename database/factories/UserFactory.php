<?php

namespace Database\Factories;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'phone' => fake()->phoneNumber(),
            'zip_code' => fake()->postcode(),
            'role' => UserRole::Customer,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Mark the user as a handyman.
     */
    public function handyman(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => UserRole::Handyman,
        ]);
    }

    /**
     * Mark the user's email as unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
