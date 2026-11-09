@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ route('bookings.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 flex items-center gap-1">
            &larr; Back to My Bookings
        </a>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 md:p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Request a Handyman Service</h1>
        <p class="text-sm text-gray-600 mb-6">Fill in the details below to schedule your service request.</p>

        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf

            <!-- Job Description -->
            <div class="mb-4">
                <label for="job_description" class="block text-sm font-semibold text-gray-700 mb-2">Job Description</label>
                <textarea name="job_description" id="job_description" rows="4" class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Describe the issue or task in detail (e.g., Fixing a leaking kitchen sink faucet)..." required>{{ old('job_description') }}</textarea>
                @error('job_description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Booking Date & Time -->
            <div class="mb-6">
                <label for="booking_date" class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date & Time</label>
                <input type="datetime-local" name="booking_date" id="booking_date" value="{{ old('booking_date') }}" class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" required>
                @error('booking_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end gap-4">
                <a href="{{ route('bookings.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg transition">Cancel</a>
                <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-lg shadow-sm transition">
                    Submit Request
                </button>
            </div>
        </form>
    </div>
</div>
@endsection