<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\UpdateWorkerProfileRequest;
use App\Http\Requests\Worker\WorkerBookingActionRequest;
use App\Http\Requests\Worker\WorkerPeriodRequest;
use App\Models\Booking;
use App\Models\Handyman;
use App\Services\Worker\WorkerWorkspaceService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WorkerController extends Controller
{
	public function __construct(private WorkerWorkspaceService $workspaceService) {}

	public function dashboard(Request $request): View
	{
		$workspace = $this->workspaceService->workspace($request->user());

		return view('worker.dashboard', compact('workspace'));
	}

	public function bookings(Request $request): View
	{
		$bookings = $this->workspaceService->bookings($this->workspaceService->handyman($request->user()));

		return view('worker.bookings', compact('bookings'));
	}

	public function showBooking(WorkerBookingActionRequest $request, Booking $booking): View
	{
		$workerBooking = $this->workspaceService->bookingForWorker(
			$this->workspaceService->handyman($request->user()),
			$booking,
		);

		return view('worker.booking-details', ['booking' => $workerBooking]);
	}

	public function acceptBooking(WorkerBookingActionRequest $request, Booking $booking): RedirectResponse
	{
		$this->workspaceService->acceptBooking(
			$this->workspaceService->handyman($request->user()),
			$booking,
		);

		return back()->with('success', 'The booking has been accepted.');
	}

	public function declineBooking(WorkerBookingActionRequest $request, Booking $booking): RedirectResponse
	{
		$this->workspaceService->declineBooking(
			$this->workspaceService->handyman($request->user()),
			$booking,
		);

		return back()->with('success', 'The booking request has been declined.');
	}

	public function completeBooking(WorkerBookingActionRequest $request, Booking $booking): RedirectResponse
	{
		$this->workspaceService->completeBooking(
			$this->workspaceService->handyman($request->user()),
			$booking,
		);

		return back()->with('success', 'The booking has been marked complete.');
	}

	public function earnings(WorkerPeriodRequest $request): View
	{
		$earnings = $this->workspaceService->earnings(
			$this->workspaceService->handyman($request->user()),
			$request->validated('period'),
		);

		return view('worker.earnings', compact('earnings'));
	}

	public function profile(Request $request): View
	{
		$handyman = $this->workspaceService->profile($this->workspaceService->handyman($request->user()));

		return view('worker.profile', compact('handyman'));
	}

	public function schedule(WorkerPeriodRequest $request): View
	{
		$schedule = $this->workspaceService->schedule(
			$this->workspaceService->handyman($request->user()),
			$request->validated('period'),
		);

		return view('worker.schedule', compact('schedule'));
	}

	public function serviceArea(Request $request): View
	{
		$handyman = $this->workspaceService->profile($this->workspaceService->handyman($request->user()));

		return view('worker.serviceArea', compact('handyman'));
	}

	public function settings(Request $request): View
	{
		$user = $request->user();

		return view('worker.settings', compact('user'));
	}

	public function updateProfile(UpdateWorkerProfileRequest $request): RedirectResponse
	{
		$handyman = $this->workspaceService->handyman($request->user());

		$this->workspaceService->updateProfile($handyman, $request->validated());

		return back()->with('success', 'Your Worker profile has been updated.');
	}

	public function signInUp(): View
	{
		return view('worker.sign_in_up');
	}
}
