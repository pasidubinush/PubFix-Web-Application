<x-layout title="PubFix · My Bookings" :minimal-footer="true">
    <div class="py-10 px-6 sm:px-12 lg:px-20 max-w-[1200px] mx-auto flex flex-col gap-8">
        <!-- Breadcrumb & Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex flex-col gap-2">
                <nav class="flex items-center gap-2 text-[12px] text-[#69736b]">
                    <a href="{{ route('home') }}" class="hover:text-[#1e3329] transition-colors">Home</a>
                    <span>/</span>
                    <span class="text-[#1e3329] font-medium">My Bookings</span>
                </nav>
                <h1 class="text-[#1e3329] text-3xl font-normal leading-tight">
                    My Bookings
                </h1>
                <p class="text-[#69736b] text-[14px]">
                    Track your handyman appointments, request details, and history.
                </p>
            </div>

            <a
                href="{{ route('handymen.index') }}"
                class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white h-[46px] px-5 rounded-[8px] flex items-center justify-center gap-2 text-[13px] font-semibold shadow-sm self-start sm:self-auto cursor-pointer"
            >
                <span>Find a handyman</span>
                <img src="{{ asset('images/pubfix/66839.svg') }}" alt="" class="size-[15px]" />
            </a>
        </div>

        @if ($bookings->isEmpty())
            <div class="bg-white border border-[#dfe3d9] rounded-[16px] p-12 text-center flex flex-col items-center gap-4 shadow-sm">
                <div class="size-16 rounded-full bg-[#eaf0e6] flex items-center justify-center text-[#25664d]">
                    <svg class="size-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <div class="flex flex-col gap-1 max-w-[400px]">
                    <h3 class="text-[#1e3329] text-[18px] font-semibold">No bookings yet</h3>
                    <p class="text-[#69736b] text-[13px]">
                        When you book a neighborhood handyman for furniture assembly, repairs, or carpentry, your request will appear here.
                    </p>
                </div>
                <a
                    href="{{ route('handymen.index') }}"
                    class="mt-2 bg-[#25664d] hover:bg-[#1e523e] text-white text-[13px] font-semibold px-5 py-2.5 rounded-[8px] transition-colors"
                >
                    Browse Austin Handymen
                </a>
            </div>
        @else
            <div class="flex flex-col gap-4">
                @foreach ($bookings as $booking)
                    <div class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="size-14 rounded-full bg-[#f8f7f2] border border-[#dfe3d9] flex items-center justify-center text-[#25664d] text-lg font-bold shrink-0">
                                {{ strtoupper(substr($booking->handyman->user->name ?? 'Pro', 0, 1)) }}
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center gap-2.5">
                                    <h3 class="text-[#1e3329] text-[16px] font-semibold">
                                        {{ $booking->handyman->user->name ?? 'Handyman' }}
                                    </h3>
                                    <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full capitalize
                                        @if($booking->status->value === 'confirmed') bg-[#e8f5e9] text-[#25664d]
                                        @elseif($booking->status->value === 'pending') bg-[#fff8e1] text-[#b45309]
                                        @elseif($booking->status->value === 'completed') bg-[#e0f2fe] text-[#0369a1]
                                        @else bg-[#f3f4f6] text-[#6b7280] @endif">
                                        {{ $booking->status->value ?? 'Pending' }}
                                    </span>
                                </div>
                                <p class="text-[#69736b] text-[13px]">
                                    {{ $booking->handyman->category->name ?? 'Service' }} · Scheduled for {{ \Carbon\Carbon::parse($booking->booking_at)->format('M d, Y @ g:i A') }}
                                </p>
                                <p class="text-[#1e3329] text-[13px] mt-1 bg-[#f8f7f2] p-2.5 rounded-[6px] border border-[#dfe3d9]/60">
                                    “{{ $booking->description }}”
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 self-end sm:self-center">
                            @if ($booking->status->value === 'pending')
                                <form action="{{ route('bookings.cancel', $booking) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
                                    @csrf
                                    @method('PATCH')
                                    <button
                                        type="submit"
                                        class="text-[#dc2626] hover:bg-[#fef2f2] border border-[#fca5a5] px-3.5 py-2 rounded-[8px] text-[12px] font-semibold transition-colors cursor-pointer"
                                    >
                                        Cancel Request
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $bookings->links() }}
            </div>
        @endif
    </div>
</x-layout>
