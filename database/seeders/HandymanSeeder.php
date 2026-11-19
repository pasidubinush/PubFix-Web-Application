<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Category;
use App\Models\Handyman;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class HandymanSeeder extends Seeder
{
    /**
     * Seed handymen matching Sri Lankan cities, neighborhoods, and postal codes.
     */
    public function run(): void
    {
        $categories = Category::all()->keyBy('name');

        $pros = [
            [
                'name' => 'Kasun Perera',
                'email' => 'kasun.perera@pubfix.test',
                'zip_code' => '00300',
                'city' => 'Colombo 03, Sri Lanka',
                'category' => 'Furniture assembly',
                'hourly_rate' => 3500.00,
                'bio' => 'Flat-pack puzzles are my specialty. From modular wardrobes to home office desks, I assemble everything cleanly and on time.',
                'latitude' => 6.9056,
                'longitude' => 79.8519,
                'rating' => 5,
                'review_count' => 128,
            ],
            [
                'name' => 'Nuwan Fernando',
                'email' => 'nuwan.fernando@pubfix.test',
                'zip_code' => '00700',
                'city' => 'Colombo 07, Sri Lanka',
                'category' => 'Furniture assembly',
                'hourly_rate' => 3000.00,
                'bio' => 'Careful, efficient assembly for your home or apartment in Colombo. All tools provided with great attention to detail.',
                'latitude' => 6.9089,
                'longitude' => 79.8667,
                'rating' => 5,
                'review_count' => 84,
            ],
            [
                'name' => 'Dinesh Jayawardena',
                'email' => 'dinesh.jayawardena@pubfix.test',
                'zip_code' => '10250',
                'city' => 'Nugegoda, Sri Lanka',
                'category' => 'General repairs',
                'hourly_rate' => 2800.00,
                'bio' => 'Your friendly neighborhood problem solver. Electrical switches, door handles, and general home maintenance.',
                'latitude' => 6.8649,
                'longitude' => 79.8997,
                'rating' => 5,
                'review_count' => 62,
            ],
            [
                'name' => 'Anoma De Silva',
                'email' => 'anoma.desilva@pubfix.test',
                'zip_code' => '10350',
                'city' => 'Dehiwala, Sri Lanka',
                'category' => 'Electrical',
                'hourly_rate' => 4000.00,
                'bio' => 'Expert ceiling fan and lighting installation, circuit breaker fixes, and appliance mounting throughout Greater Colombo.',
                'latitude' => 6.8344,
                'longitude' => 79.8656,
                'rating' => 5,
                'review_count' => 96,
            ],
            [
                'name' => 'Ravindu Bandara',
                'email' => 'ravindu.bandara@pubfix.test',
                'zip_code' => '20000',
                'city' => 'Kandy, Sri Lanka',
                'category' => 'Plumbing',
                'hourly_rate' => 3200.00,
                'bio' => 'Fixing leaks, replacing water taps, vanity basins, and pipe repairs. Prompt, dependable service in Central Province.',
                'latitude' => 7.2906,
                'longitude' => 80.6337,
                'rating' => 5,
                'review_count' => 112,
            ],
            [
                'name' => 'Chaminda Kumara',
                'email' => 'chaminda.kumara@pubfix.test',
                'zip_code' => '80000',
                'city' => 'Galle, Sri Lanka',
                'category' => 'Carpentry',
                'hourly_rate' => 4500.00,
                'bio' => 'Over 12 years of custom woodwork, timber shelves, door frames, and teak furniture restoration in Southern Province.',
                'latitude' => 6.0535,
                'longitude' => 80.2210,
                'rating' => 5,
                'review_count' => 154,
            ],
            [
                'name' => 'Thilini Gamage',
                'email' => 'thilini.gamage@pubfix.test',
                'zip_code' => '11500',
                'city' => 'Negombo, Sri Lanka',
                'category' => 'Furniture assembly',
                'hourly_rate' => 3200.00,
                'bio' => 'Fast and organized modern furniture assembly, wall mounting, and TV unit setups in Gampaha and Negombo area.',
                'latitude' => 7.2088,
                'longitude' => 79.8358,
                'rating' => 5,
                'review_count' => 89,
            ],
            [
                'name' => 'Suresh Mendis',
                'email' => 'suresh.mendis@pubfix.test',
                'zip_code' => '10370',
                'city' => 'Mount Lavinia, Sri Lanka',
                'category' => 'General repairs',
                'hourly_rate' => 3000.00,
                'bio' => 'Dedicated local fixer with passion for tidy and reliable craft. Colombo and suburbs native ready to help on your schedule.',
                'latitude' => 6.8380,
                'longitude' => 79.8700,
                'rating' => 5,
                'review_count' => 45,
            ],
        ];

        // Ensure a test customer exists to write sample reviews
        $customer = User::firstOrCreate(
            ['email' => 'emily.rivera@pubfix.test'],
            [
                'name' => 'Emily Rivera',
                'password' => Hash::make('password123'),
                'role' => UserRole::Customer,
                'zip_code' => '00700',
                'phone' => '+94 77 123 4567',
            ]
        );

        foreach ($pros as $pro) {
            $user = User::firstOrCreate(
                ['email' => $pro['email']],
                [
                    'name' => $pro['name'],
                    'password' => Hash::make('password123'),
                    'role' => UserRole::Handyman,
                    'zip_code' => $pro['zip_code'],
                    'phone' => '(512) 555-' . rand(1000, 9999),
                ]
            );

            $cat = $categories->get($pro['category']) ?? $categories->first();

            $handyman = Handyman::firstOrCreate(
                ['user_id' => $user->id],
                [
                    'category_id' => $cat->id,
                    'hourly_rate' => $pro['hourly_rate'],
                    'bio' => $pro['bio'],
                    'city' => $pro['city'],
                    'latitude' => $pro['latitude'],
                    'longitude' => $pro['longitude'],
                    'available' => true,
                ]
            );

            // Create a completed booking and associated review
            $booking = \App\Models\Booking::firstOrCreate(
                ['user_id' => $customer->id, 'handyman_id' => $handyman->id],
                [
                    'description' => 'Assembled furniture and completed general checkup.',
                    'booking_at' => now()->subDays(rand(1, 14)),
                    'status' => \App\Enums\BookingStatus::Completed,
                ]
            );

            Review::firstOrCreate(
                ['booking_id' => $booking->id],
                [
                    'user_id' => $customer->id,
                    'handyman_id' => $handyman->id,
                    'rating' => $pro['rating'],
                    'comment' => 'Fantastic service! Arrived right on time and did an incredible job.',
                ]
            );
        }
    }
}
