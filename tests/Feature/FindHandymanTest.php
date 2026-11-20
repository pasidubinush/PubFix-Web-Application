<?php

namespace Tests\Feature;

use App\Enums\UserRole;
use App\Models\Category;
use App\Models\Handyman;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FindHandymanTest extends TestCase
{
    use RefreshDatabase;

    public function test_find_handyman_displays_real_worker_details_and_stored_avatar_from_database(): void
    {
        $cat = Category::create([
            'name' => 'Carpentry',
            'description' => 'Custom woodwork and shelving.',
        ]);

        $workerUser = User::factory()->create([
            'name' => 'Samantha Wright',
            'email' => 'samantha.wright@example.com',
            'avatar' => 'avatars/samantha.jpg',
            'role' => UserRole::Handyman,
            'zip_code' => '78704',
        ]);

        $handyman = Handyman::create([
            'user_id' => $workerUser->id,
            'category_id' => $cat->id,
            'hourly_rate' => 85,
            'bio' => 'Custom woodwork and shelving specialist.',
            'city' => 'South Austin',
            'available' => true,
        ]);

        $response = $this->get(route('handymen.index'));

        $response->assertOk();
        $response->assertViewHas('handymenData', function (array $handymenData) use ($workerUser): bool {
            $matching = collect($handymenData)->firstWhere('id', $workerUser->handyman->id);

            return $matching !== null
                && $matching['name'] === 'Samantha Wright'
                && $matching['category'] === 'Carpentry'
                && $matching['rate'] === 85.0
                && str_contains($matching['image'], 'storage/avatars/samantha.jpg');
        });

        $content = $response->getContent();
        $this->assertStringContainsString('Samantha Wright', $content);
        $this->assertStringContainsString('samantha.jpg', $content);
    }

    public function test_find_handyman_falls_back_to_dummy_data_when_database_is_empty(): void
    {
        $this->assertSame(0, Handyman::count());

        $response = $this->get(route('handymen.index'));

        $response->assertOk();
        $response->assertViewHas('handymenData', function (array $handymenData): bool {
            return count($handymenData) === 0;
        });

        $content = $response->getContent();
        $this->assertStringContainsString('DUMMY_HANDYMEN', $content);
        $this->assertStringContainsString('Marcus Reed', $content);
    }

    public function test_json_endpoint_includes_worker_avatar_image(): void
    {
        $cat = Category::create([
            'name' => 'Electrical',
            'description' => 'Lighting and fixtures',
        ]);

        $workerUser = User::factory()->create([
            'name' => 'David Spark',
            'avatar' => 'avatars/david.png',
            'role' => UserRole::Handyman,
            'zip_code' => '78704',
        ]);

        Handyman::create([
            'user_id' => $workerUser->id,
            'category_id' => $cat->id,
            'hourly_rate' => 75,
            'city' => 'Austin',
            'available' => true,
        ]);

        $response = $this->getJson(route('handymen.index', ['zip' => '78704', 'format' => 'json']));

        $response->assertOk();
        $response->assertJsonFragment([
            'name' => 'David Spark',
            'zip_code' => '78704',
        ]);
        $json = $response->json();
        $this->assertNotEmpty($json['handymen']);
        $this->assertStringContainsString('storage/avatars/david.png', $json['handymen'][0]['image']);
    }
}
