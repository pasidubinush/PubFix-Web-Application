<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the eight core service categories.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Furniture assembly', 'description' => 'Flat-pack and furniture assembly of all kinds.'],
            ['name' => 'Carpentry', 'description' => 'Custom woodwork, shelving, doors, and trim.'],
            ['name' => 'General repairs', 'description' => 'Everyday fixes and home maintenance tasks.'],
            ['name' => 'Plumbing', 'description' => 'Leaks, fixtures, and pipe repairs.'],
            ['name' => 'Electrical', 'description' => 'Light switches, outlets, and minor electrical work.'],
            ['name' => 'Painting', 'description' => 'Interior and exterior painting and touch-ups.'],
            ['name' => 'Flooring', 'description' => 'Hardwood, tile, laminate, and vinyl installation.'],
            ['name' => 'Cleaning', 'description' => 'Deep cleaning, move-out, and post-construction cleaning.'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category['name']], $category);
        }
    }
}
