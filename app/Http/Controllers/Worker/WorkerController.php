<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\UpdateWorkerProfileRequest;
use App\Http\Requests\Worker\WorkerBookingActionRequest;
use App\Http\Requests\Worker\WorkerPeriodRequest;
use App\Http\Requests\Worker\UpdateWorkerPasswordRequest;
use App\Http\Requests\Worker\UpdateWorkerServiceAreaRequest;
use App\Http\Requests\Worker\UpdateWorkerSettingsRequest;
use App\Models\Category;
use App\Models\Booking;
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
		$categories = Category::query()->orderBy('name')->get();

		return view('worker.profile', compact('handyman', 'categories'));
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
		$user = $request->user();

		return view('worker.serviceArea', compact('handyman', 'user'));
	}

	public function settings(Request $request): View
	{
		$user = $request->user();

		return view('worker.settings', compact('user'));
	}

	public function updateProfile(UpdateWorkerProfileRequest $request): RedirectResponse
	{
		$this->workspaceService->updateProfile($request->user(), $request->validated());

		return back()->with('success', 'Your Worker profile has been updated.');
	}

	public function updateServiceArea(UpdateWorkerServiceAreaRequest $request): RedirectResponse
	{
		$this->workspaceService->updateServiceArea($request->user(), $request->validated());

		return back()->with('success', 'Your service area has been updated.');
	}

	public function updateSettings(UpdateWorkerSettingsRequest $request): RedirectResponse
	{
		$this->workspaceService->updateSettings($request->user(), $request->validated());

		return back()->with('success', 'Your account settings have been updated.');
	}

	public function updatePassword(UpdateWorkerPasswordRequest $request): RedirectResponse
	{
		$this->workspaceService->updatePassword($request->user(), $request->validated());

		return back()->with('success', 'Your password has been changed successfully.');
	}

}
