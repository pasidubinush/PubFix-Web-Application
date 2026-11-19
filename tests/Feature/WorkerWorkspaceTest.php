<?php

namespace Tests\Feature;

use App\Enums\BookingStatus;
use App\Enums\UserRole;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Handyman;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class WorkerWorkspaceTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_the_worker_workspace(): void
    {
        $response = $this->get(route('worker.dashboard'));

        $response->assertRedirect(route('login'));
    }

    public function test_customer_cannot_access_the_worker_workspace(): void
    {
        $customer = User::factory()->create(['role' => UserRole::Customer]);

        $response = $this->actingAs($customer)->get(route('worker.dashboard'));

        $response->assertForbidden();
    }

    public function test_handyman_can_view_workspace_data(): void
    {
        $handyman = Handyman::factory()->create();

        $response = $this->actingAs($handyman->user)->get(route('worker.dashboard'));

        $response->assertOk()
            ->assertViewIs('worker.dashboard')
            ->assertViewHas('workspace', function (array $workspace) use ($handyman): bool {
                return $workspace['handyman']->is($handyman);
            });
    }

    public function test_handyman_can_update_owned_profile_fields(): void
    {
        $handyman = Handyman::factory()->create();

        $response = $this->actingAs($handyman->user)->put(route('worker.profile.update'), [
            'bio' => 'Careful work from a trusted local professional.',
            'hourly_rate' => 65,
            'city' => 'Austin, TX',
            'available' => false,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('handymen', [
            'id' => $handyman->id,
            'bio' => 'Careful work from a trusted local professional.',
            'hourly_rate' => 65,
            'available' => false,
        ]);
    }

    public function test_profile_update_rejects_invalid_worker_data(): void
    {
        $handyman = Handyman::factory()->create();

        $response = $this->actingAs($handyman->user)->from(route('worker.profile'))->put(
            route('worker.profile.update'),
            ['hourly_rate' => -1],
        );

        $response->assertRedirect(route('worker.profile'))
            ->assertSessionHasErrors('hourly_rate');
    }

    public function test_worker_can_accept_a_pending_booking(): void
    {
        $handyman = Handyman::factory()->create();
        $customer = User::factory()->create(['role' => UserRole::Customer]);
        $booking = $this->createBooking($customer, $handyman);

        $response = $this->actingAs($handyman->user)->post(route('worker.bookings.accept', $booking));

        $response->assertRedirect();
        $this->assertSame(BookingStatus::Confirmed, $booking->fresh()->status);
    }

    public function test_worker_can_decline_a_pending_booking_using_cancelled_status(): void
    {
        $handyman = Handyman::factory()->create();
        $customer = User::factory()->create(['role' => UserRole::Customer]);
        $booking = $this->createBooking($customer, $handyman);

        $response = $this->actingAs($handyman->user)->post(route('worker.bookings.decline', $booking));

        $response->assertRedirect();
        $this->assertSame(BookingStatus::Cancelled, $booking->fresh()->status);
    }

    public function test_worker_can_complete_a_confirmed_booking(): void
    {
        $handyman = Handyman::factory()->create();
        $customer = User::factory()->create(['role' => UserRole::Customer]);
        $booking = $this->createBooking($customer, $handyman, BookingStatus::Confirmed);

        $response = $this->actingAs($handyman->user)->post(route('worker.bookings.complete', $booking));

        $response->assertRedirect();
        $this->assertSame(BookingStatus::Completed, $booking->fresh()->status);
    }

    public function test_another_worker_cannot_operate_on_a_booking(): void
    {
        $handyman = Handyman::factory()->create();
        $otherHandyman = Handyman::factory()->create();
        $customer = User::factory()->create(['role' => UserRole::Customer]);
        $booking = $this->createBooking($customer, $handyman);

        $response = $this->actingAs($otherHandyman->user)->post(route('worker.bookings.accept', $booking));

        $response->assertForbidden();
        $this->assertSame(BookingStatus::Pending, $booking->fresh()->status);
    }

    public function test_schedule_returns_only_accepted_bookings_for_the_selected_month(): void
    {
        $handyman = Handyman::factory()->create();
        $customer = User::factory()->create(['role' => UserRole::Customer]);
        $confirmedBooking = $this->createBooking($customer, $handyman, BookingStatus::Confirmed);
        $this->createBooking($customer, $handyman, BookingStatus::Pending);

        $response = $this->actingAs($handyman->user)->get(route('worker.schedule', [
            'period' => now()->format('Y-m'),
        ]));

        $response->assertOk()
            ->assertViewHas('schedule', function (array $schedule) use ($confirmedBooking): bool {
                return $schedule['bookings']->contains($confirmedBooking)
                    && $schedule['bookings']->every(fn (Booking $booking): bool => $booking->isConfirmed() || $booking->isCompleted());
            });
    }

    public function test_earnings_only_lists_completed_jobs_and_does_not_create_payment_totals(): void
    {
        $handyman = Handyman::factory()->create();
        $customer = User::factory()->create(['role' => UserRole::Customer]);
        $this->createBooking($customer, $handyman, BookingStatus::Confirmed);
        $completedBooking = $this->createBooking($customer, $handyman, BookingStatus::Completed);

        $response = $this->actingAs($handyman->user)->get(route('worker.earnings', [
            'period' => now()->format('Y-m'),
        ]));

        $response->assertOk()
            ->assertViewHas('earnings', function (array $earnings) use ($completedBooking): bool {
                return $earnings['paymentDataAvailable'] === false
                    && $earnings['totalEarnings'] === null
                    && $earnings['completedBookings']->contains($completedBooking)
                    && $earnings['completedBookings']->every(fn (Booking $booking): bool => $booking->isCompleted());
            });
    }

    public function test_worker_can_update_service_area_and_availability(): void
    {
        $handyman = Handyman::factory()->create();

        $response = $this->actingAs($handyman->user)->put(route('worker.service-area.update'), [
            'zip_code' => '78704',
            'city' => 'Austin, TX',
            'available' => true,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('users', ['id' => $handyman->user_id, 'zip_code' => '78704']);
        $this->assertDatabaseHas('handymen', ['id' => $handyman->id, 'city' => 'Austin, TX', 'available' => true]);
    }

    public function test_worker_can_update_account_settings_and_password(): void
    {
        $handyman = Handyman::factory()->create();

        $settingsResponse = $this->actingAs($handyman->user)->put(route('worker.settings.update'), [
            'name' => 'Updated Worker',
            'phone' => '5125550123',
        ]);

        $settingsResponse->assertRedirect();
        $this->assertDatabaseHas('users', ['id' => $handyman->user_id, 'name' => 'Updated Worker', 'phone' => '5125550123']);

        $passwordResponse = $this->actingAs($handyman->user)->put(route('worker.settings.password'), [
            'current_password' => 'password',
            'password' => 'new-worker-password',
            'password_confirmation' => 'new-worker-password',
        ]);

        $passwordResponse->assertRedirect();
        $this->assertTrue(Hash::check('new-worker-password', $handyman->user->fresh()->password));
    }

    public function test_worker_registration_creates_a_handyman_account_and_profile(): void
    {
        $category = Category::factory()->create();

        $response = $this->post(route('worker.register'), [
            'first_name' => 'Morgan',
            'last_name' => 'Lee',
            'email' => 'morgan.worker@example.com',
            'password' => 'worker123',
            'password_confirmation' => 'worker123',
            'zip_code' => '78704',
            'city' => 'Austin, TX',
            'category_id' => $category->id,
            'hourly_rate' => 60,
            'terms' => 'on',
        ]);

        $response->assertRedirect(route('worker.sign-in'));
        $user = User::where('email', 'morgan.worker@example.com')->firstOrFail();
        $this->assertSame(UserRole::Handyman, $user->role);
        $this->assertDatabaseHas('handymen', [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'city' => 'Austin, TX',
        ]);
    }

    public function test_worker_login_rejects_customer_accounts_and_accepts_worker_accounts(): void
    {
        $customer = User::factory()->create(['email' => 'customer-login@example.com']);
        $worker = Handyman::factory()->create();

        $customerResponse = $this->post(route('worker.login'), [
            'email' => $customer->email,
            'password' => 'password',
        ]);
        $customerResponse->assertRedirect()->assertSessionHasErrors('email');
        $this->assertGuest();

        $workerResponse = $this->post(route('worker.login'), [
            'email' => $worker->user->email,
            'password' => 'password',
        ]);
        $workerResponse->assertRedirect(route('worker.dashboard'));
        $this->assertAuthenticatedAs($worker->user);
    }

    public function test_worker_can_logout_through_the_shared_logout_route(): void
    {
        $worker = Handyman::factory()->create();

        $response = $this->actingAs($worker->user)->post(route('logout'));

        $response->assertRedirect(route('home'));
        $this->assertGuest();
    }

    private function createBooking(User $customer, Handyman $handyman, BookingStatus $status = BookingStatus::Pending): Booking
    {
        return Booking::create([
            'user_id' => $customer->id,
            'handyman_id' => $handyman->id,
            'description' => 'Assemble a standing desk',
            'booking_at' => now()->addDay(),
            'status' => $status,
        ]);
    }
}