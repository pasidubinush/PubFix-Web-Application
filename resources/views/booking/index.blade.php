@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">My Bookings</h1>
            <p class="text-sm text-gray-600">Track and manage your handyman service requests.</p>
        </div>
        <!-- Button to go to the Create Booking form -->
        <a href="{{ route('bookings.create') }}" class="bg-green-700 text-white font-semibold px-4 py-2 rounded-lg hover:bg-green-800 transition">
            + New Booking
        </a>
    </div>

    <!-- Bookings List Card -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        @if(isset($bookings) && count($bookings) > 0)
            <div class="divide-y divide-gray-200">
                @foreach($bookings as $booking)
                    <div class="p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4 hover:bg-gray-50 transition">
                        <!-- Booking Info -->
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Booking #{{ $booking->id }}</span>
                                <!-- Dynamic Status Badge -->
                                @if($booking->status == 'Completed')
                                    <span class="bg-green-100 text-green-800 text-xs px-2.5 py-0.5 rounded-full font-medium">Completed</span>
                                @elseif($booking->status == 'Pending')
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2.5 py-0.5 rounded-full font-medium">Pending</span>
                                @else
                                    <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded-full font-medium">{{ $booking->status }}</span>
                                @endif
                            </div>
                            <h2 class="text-lg font-semibold text-gray-800">{{ $booking->job_description }}</h2>
                            <p class="text-sm text-gray-500 mt-1">Scheduled for: <span class="font-medium text-gray-700">{{ $booking->booking_date }}</span></p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center gap-3">
                            <a href="{{ route('bookings.show', $booking->id) }}" class="text-sm font-medium text-green-700 hover:text-green-900 bg-green-50 px-3 py-1.5 rounded border border-green-200 transition">
                                View Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State (When no bookings exist yet) -->
            <div class="text-center py-12 px-4">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No bookings found</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new booking request.</p>
                <div class="mt-6">
                    <a href="{{ route('bookings.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-700 hover:bg-green-800">
                        Create Booking
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection