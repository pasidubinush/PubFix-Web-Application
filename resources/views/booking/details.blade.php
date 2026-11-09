@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ route('bookings.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 flex items-center gap-1">
            &larr; Back to My Bookings
        </a>
    </div>

    <!-- Booking Details Card -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <!-- Card Header -->
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <div>
                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Booking Reference</span>
                <h1 class="text-xl font-bold text-gray-800">#{{ $booking->id ?? '104' }}</h1>
            </div>
            <div>
                @if(($booking->status ?? 'Pending') == 'Completed')
                    <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full font-medium">Completed</span>
                @elseif(($booking->status ?? 'Pending') == 'Pending')
                    <span class="bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full font-medium">Pending Review</span>
                @else
                    <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full font-medium">{{ $booking->status ?? 'Pending' }}</span>
                @endif
            </div>
        </div>

        <!-- Card Body -->
        <div class="p-6 space-y-6">
            <!-- Job Description -->
            <div>
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Job Description</h3>
                <p class="text-gray-800 text-base bg-gray-50 p-4 rounded-lg border border-gray-100">
                    {{ $booking->job_description ?? 'Leaking pipe under the main kitchen sink requires urgent inspection and repair.' }}
                </p>
            </div>

            <!-- Schedule info grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Scheduled Date & Time</h3>
                    <p class="text-gray-800 font-medium">{{ $booking->booking_date ?? 'November 15, 2026 - 10:00 AM' }}</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Assigned Handyman</h3>
                    <p class="text-gray-800 font-medium">{{ $booking->handyman->name ?? 'Not assigned yet' }}</p>
                </div>
            </div>
        </div>

        <!-- Card Footer Actions -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex justify-end gap-3">
            <a href="{{ route('bookings.index') }}" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition">
                Close
            </a>
        </div>
    </div>
</div>
@endsection