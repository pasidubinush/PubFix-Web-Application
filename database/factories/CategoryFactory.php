<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    private static array $categories = [
        'Furniture assembly',
        'Carpentry',
        'General repairs',
        'Plumbing',
        'Electrical',
        'Painting',
        'Flooring',
        'Cleaning',
    ];

    private static int $index = 0;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = self::$categories[self::$index % count(self::$categories)];
        self::$index++;

        return [
            'name' => $name,
            'description' => fake()->sentence(),
        ];
    }
}
