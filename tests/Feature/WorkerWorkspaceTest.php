<?php

namespace Tests\Feature;

use App\Enums\BookingStatus;
use App\Enums\UserRole;
use App\Models\Booking;
use App\Models\Handyman;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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