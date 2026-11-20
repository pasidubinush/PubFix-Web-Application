<?php

namespace Tests\Feature;

use App\Enums\BookingStatus;
use App\Enums\UserRole;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Handyman;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CustomerAuthAndLocationTest extends TestCase
{
    use RefreshDatabase;

    public function test_continue_with_google_authenticates_customer_and_redirects_to_home(): void
    {
        $response = $this->get(route('auth.google.callback', [
            'dev_mode' => '1',
            'name' => 'Jane Google',
            'email' => 'jane.google@example.com',
        ]));

        $response->assertRedirect(route('home'));
        $this->assertAuthenticated();

        $user = User::where('email', 'jane.google@example.com')->first();
        $this->assertNotNull($user);
        $this->assertEquals(UserRole::Customer, $user->role);
        $this->assertEquals('Jane Google', $user->name);
    }

    public function test_customer_registration_stores_data_redirects_to_login_and_then_to_home(): void
    {
        // 1. Register customer
        $registerResponse = $this->post(route('customer.registration.submit'), [
            'first_name' => 'Alice',
            'last_name' => 'Smith',
            'email' => 'alice@example.com',
            'password' => 'secret123',
            'zip_code' => '78704',
            'phone' => '5125551234',
            'terms' => 'on',
        ]);

        // Redirects to customer signin page with success banner
        $registerResponse->assertRedirect(route('customer.signin'));
        $registerResponse->assertSessionHas('success');

        // All data stored in database
        $user = User::where('email', 'alice@example.com')->first();
        $this->assertNotNull($user);
        $this->assertEquals('Alice Smith', $user->name);
        $this->assertEquals('alice@example.com', $user->email);
        $this->assertEquals('78704', $user->zip_code);
        $this->assertEquals('5125551234', $user->phone);
        $this->assertEquals(UserRole::Customer, $user->role);
        $this->assertTrue(Hash::check('secret123', $user->password));

        // 2. Sign in with registered credentials
        $loginResponse = $this->post(route('login.store'), [
            'email' => 'alice@example.com',
            'password' => 'secret123',
        ]);

        // Redirects to home page after successful login
        $loginResponse->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_registration_fails_when_user_name_already_exists(): void
    {
        User::factory()->create([
            'name' => 'Existing User',
            'email' => 'existing@example.com',
        ]);

        $response = $this->from(route('customer.registration'))->post(route('customer.registration.submit'), [
            'first_name' => 'Existing',
            'last_name' => 'User',
            'email' => 'newemail@example.com',
            'password' => 'secret123',
            'zip_code' => '78704',
            'terms' => 'on',
        ]);

        $response->assertRedirect(route('customer.registration'));
        $response->assertSessionHasErrors('first_name');
    }

    public function test_login_fails_with_invalid_password_or_unregistered_email(): void
    {
        User::factory()->create([
            'email' => 'registered@example.com',
            'password' => Hash::make('correct-password'),
            'role' => UserRole::Customer,
        ]);

        // Wrong password
        $res1 = $this->from(route('login'))->post(route('login.store'), [
            'email' => 'registered@example.com',
            'password' => 'wrong-password',
        ]);
        $res1->assertRedirect(route('login'));
        $res1->assertSessionHasErrors('email');

        // Unregistered email
        $res2 = $this->from(route('login'))->post(route('login.store'), [
            'email' => 'notfound@example.com',
            'password' => 'any-password',
        ]);
        $res2->assertRedirect(route('login'));
        $res2->assertSessionHasErrors('email');
    }

    public function test_customer_can_login_and_is_redirected_to_home(): void
    {
        $user = User::factory()->create([
            'email' => 'customer@example.com',
            'password' => Hash::make('password123'),
            'role' => UserRole::Customer,
        ]);

        $response = $this->post(route('login.store'), [
            'email' => 'customer@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_forgot_password_and_reset_flow(): void
    {
        $user = User::factory()->create([
            'email' => 'resetme@example.com',
            'password' => Hash::make('oldpassword123'),
            'role' => UserRole::Customer,
        ]);

        // Request reset link
        $sendResponse = $this->post(route('password.email'), [
            'email' => 'resetme@example.com',
        ]);
        $sendResponse->assertSessionHas('status');

        $record = DB::table('password_reset_tokens')->where('email', 'resetme@example.com')->first();
        $this->assertNotNull($record);

        // Get plain token from session reset_url
        $resetUrl = session('reset_url');
        $path = parse_url($resetUrl, PHP_URL_PATH);
        $token = basename($path);

        // Submit new password
        $resetResponse = $this->post(route('password.update'), [
            'token' => $token,
            'email' => 'resetme@example.com',
            'password' => 'newpassword123',
            'password_confirmation' => 'newpassword123',
        ]);

        $resetResponse->assertRedirect(route('customer.signin'));
        $this->assertTrue(Hash::check('newpassword123', $user->fresh()->password));
    }

    public function test_handyman_search_filters_by_zip_code(): void
    {
        $cat = Category::create(['name' => 'Carpentry', 'description' => 'Woodwork']);

        $user1 = User::factory()->create(['zip_code' => '78704', 'role' => UserRole::Handyman]);
        $pro1 = Handyman::create([
            'user_id' => $user1->id,
            'category_id' => $cat->id,
            'hourly_rate' => 50,
            'city' => 'Austin',
            'latitude' => 30.245,
            'longitude' => -97.766,
            'available' => true,
        ]);

        $user2 = User::factory()->create(['zip_code' => '90210', 'role' => UserRole::Handyman]);
        $pro2 = Handyman::create([
            'user_id' => $user2->id,
            'category_id' => $cat->id,
            'hourly_rate' => 50,
            'city' => 'Beverly Hills',
            'latitude' => 34.073,
            'longitude' => -118.400,
            'available' => true,
        ]);

        // Web search with zip
        $response = $this->get(route('handymen.index', ['zip' => '78704']));
        $response->assertStatus(200);

        // JSON format for map lookup
        $jsonResponse = $this->getJson(route('handymen.index', ['zip' => '78704', 'format' => 'json']));
        $jsonResponse->assertStatus(200);
        $jsonResponse->assertJsonFragment(['zip_code' => '78704']);
        $jsonResponse->assertJsonMissing(['zip_code' => '90210']);
    }

    public function test_customer_can_update_profile_and_create_booking(): void
    {
        $customer = User::factory()->create([
            'name' => 'Original Customer',
            'email' => 'customer.profile@example.com',
            'role' => UserRole::Customer,
            'zip_code' => '78704',
        ]);

        $cat = Category::create(['name' => 'Furniture assembly', 'description' => 'Assembly']);
        $proUser = User::factory()->create(['role' => UserRole::Handyman]);
        $handyman = Handyman::create([
            'user_id' => $proUser->id,
            'category_id' => $cat->id,
            'hourly_rate' => 60,
            'city' => 'Austin',
            'available' => true,
        ]);

        // Update profile
        $this->actingAs($customer)->put(route('customer.profile.update'), [
            'name' => 'Updated Customer',
            'zip_code' => '78701',
            'phone' => '5125559999',
        ])->assertSessionHas('success');

        $this->assertEquals('Updated Customer', $customer->fresh()->name);
        $this->assertEquals('78701', $customer->fresh()->zip_code);

        // Create booking
        $this->actingAs($customer)->post(route('bookings.store'), [
            'handyman_id' => $handyman->id,
            'description' => 'Assemble dining table and 4 chairs.',
            'booking_at' => now()->addDay()->format('Y-m-d H:i:s'),
        ])->assertRedirect(route('bookings.index'));

        $booking = Booking::where('user_id', $customer->id)->first();
        $this->assertNotNull($booking);
        $this->assertEquals(BookingStatus::Pending, $booking->status);

        // Cancel booking
        $this->actingAs($customer)->patch(route('bookings.cancel', $booking))
            ->assertRedirect(route('bookings.index'));

        $this->assertEquals(BookingStatus::Cancelled, $booking->fresh()->status);
    }

    public function test_auth_pages_link_to_handyman_pages_and_navbar_removes_join_as_pro(): void
    {
        // Customer sign-in page links to worker sign-in
        $signInResponse = $this->get(route('login'));
        $signInResponse->assertOk();
        $signInResponse->assertSee(route('worker.sign-in'));
        $signInResponse->assertDontSee('Join as a pro');

        // Customer registration page links to worker sign-up
        $signUpResponse = $this->get(route('customer.registration'));
        $signUpResponse->assertOk();
        $signUpResponse->assertSee(route('worker.sign-up'));
        $signUpResponse->assertDontSee('Join as a pro');

        // Home page does not display Join as a pro in top navbar
        $homeResponse = $this->get(route('home'));
        $homeResponse->assertOk();
        $homeResponse->assertDontSee('<span>Join as a pro</span>', false);

        // Handyman authenticated user sees Pro workspace in navbar
        $handymanUser = User::factory()->create(['role' => UserRole::Handyman]);
        $authedResponse = $this->actingAs($handymanUser)->get(route('home'));
        $authedResponse->assertOk();
        $authedResponse->assertSee(route('worker.dashboard'));
        $authedResponse->assertSee('Pro workspace');
    }
}
