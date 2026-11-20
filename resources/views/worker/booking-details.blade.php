<div class="worker-page w-full max-w-[1440px] min-h-screen bg-stone-100 text-zinc-800">
    @include('worker.partials.navigation')

    <header class="h-20 px-8 bg-white border-b border-neutral-200 flex items-center justify-between gap-4">
        <a href="{{ route('worker.dashboard') }}" class="text-teal-800 text-sm font-semibold font-['Inter']">PubFix Pro Workspace</a>
        <a href="{{ route('worker.bookings') }}" class="text-neutral-500 text-xs font-normal font-['Inter']">Back to bookings</a>
    </header>

    <main class="max-w-3xl mx-auto p-6 sm:p-8">
        <div class="flex flex-col gap-6">
            <div class="flex flex-wrap items-start justify-between gap-4">
                <div class="flex flex-col gap-2">
                    <span class="text-neutral-500 text-xs font-semibold font-['Inter']">WORKER BOOKING</span>
                    <h1 class="text-zinc-800 text-3xl font-normal font-['Inter']">{{ $booking->description }}</h1>
                    <p class="text-neutral-500 text-sm font-normal font-['Inter']">Requested by {{ $booking->user->name }}</p>
                </div>
                <span class="rounded-full px-3 py-1.5 bg-gray-200 text-teal-800 text-xs font-semibold font-['Inter']">{{ ucfirst($booking->status->value) }}</span>
            </div>

            <section class="p-6 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col gap-5" aria-labelledby="booking-details-title">
                <h2 id="booking-details-title" class="text-zinc-800 text-xl font-semibold font-['Inter']">Booking details</h2>
                <dl class="grid gap-4 sm:grid-cols-2 text-sm font-['Inter']">
                    <div><dt class="text-neutral-500 text-xs">Date and time</dt><dd class="mt-1">{{ $booking->booking_at->format('M j, Y · g:i A') }}</dd></div>
                    <div><dt class="text-neutral-500 text-xs">Customer</dt><dd class="mt-1">{{ $booking->user->name }}</dd></div>
                    <div><dt class="text-neutral-500 text-xs">Service area</dt><dd class="mt-1">{{ $booking->handyman->city }}</dd></div>
                    <div><dt class="text-neutral-500 text-xs">Booking number</dt><dd class="mt-1">#{{ $booking->id }}</dd></div>
                </dl>
                <div class="border-t border-neutral-200 pt-4 text-neutral-600 text-sm leading-6">{{ $booking->description }}</div>

                <div class="flex flex-wrap gap-2 border-t border-neutral-200 pt-4">
                    @if ($booking->isPending())
                        <form method="POST" action="{{ route('worker.bookings.decline', $booking) }}">
                            @csrf
                            <button type="submit" class="h-10 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs font-semibold">Decline</button>
                        </form>
                        <form method="POST" action="{{ route('worker.bookings.accept', $booking) }}">
                            @csrf
                            <button type="submit" class="h-10 px-4 bg-teal-800 rounded-lg text-white text-xs font-semibold">Accept job</button>
                        </form>
                    @elseif ($booking->isConfirmed())
                        <form method="POST" action="{{ route('worker.bookings.complete', $booking) }}">
                            @csrf
                            <button type="submit" class="h-10 px-4 bg-teal-800 rounded-lg text-white text-xs font-semibold">Mark complete</button>
                        </form>
                    @endif
                </div>
            </section>
        </div>
    </main>
</div>