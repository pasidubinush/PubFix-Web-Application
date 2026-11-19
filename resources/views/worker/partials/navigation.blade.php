<nav aria-label="Worker workspace" class="worker-page-navigation w-full border-b border-neutral-200 bg-white px-4 py-3 lg:hidden">
    <div class="flex min-w-max items-center gap-2 overflow-x-auto text-xs">
        <a href="{{ route('worker.dashboard') }}" @class([
            'rounded-lg px-3 py-2 font-semibold transition-colors',
            'bg-gray-200 text-teal-800' => request()->routeIs('worker.dashboard'),
            'text-neutral-500 hover:bg-stone-100 hover:text-teal-800' => ! request()->routeIs('worker.dashboard'),
        ])>Overview</a>
        <a href="{{ route('worker.bookings') }}" @class([
            'rounded-lg px-3 py-2 font-semibold transition-colors',
            'bg-gray-200 text-teal-800' => request()->routeIs('worker.bookings'),
            'text-neutral-500 hover:bg-stone-100 hover:text-teal-800' => ! request()->routeIs('worker.bookings'),
        ])>Bookings</a>
        <a href="{{ route('worker.schedule') }}" @class([
            'rounded-lg px-3 py-2 font-semibold transition-colors',
            'bg-gray-200 text-teal-800' => request()->routeIs('worker.schedule'),
            'text-neutral-500 hover:bg-stone-100 hover:text-teal-800' => ! request()->routeIs('worker.schedule'),
        ])>Schedule</a>
        <a href="{{ route('worker.earnings') }}" @class([
            'rounded-lg px-3 py-2 font-semibold transition-colors',
            'bg-gray-200 text-teal-800' => request()->routeIs('worker.earnings'),
            'text-neutral-500 hover:bg-stone-100 hover:text-teal-800' => ! request()->routeIs('worker.earnings'),
        ])>Earnings</a>
        <a href="{{ route('worker.profile') }}" @class([
            'rounded-lg px-3 py-2 font-semibold transition-colors',
            'bg-gray-200 text-teal-800' => request()->routeIs('worker.profile'),
            'text-neutral-500 hover:bg-stone-100 hover:text-teal-800' => ! request()->routeIs('worker.profile'),
        ])>Profile</a>
        <a href="{{ route('worker.service-area') }}" @class([
            'rounded-lg px-3 py-2 font-semibold transition-colors',
            'bg-gray-200 text-teal-800' => request()->routeIs('worker.service-area'),
            'text-neutral-500 hover:bg-stone-100 hover:text-teal-800' => ! request()->routeIs('worker.service-area'),
        ])>Service area</a>
        <a href="{{ route('worker.settings') }}" @class([
            'rounded-lg px-3 py-2 font-semibold transition-colors',
            'bg-gray-200 text-teal-800' => request()->routeIs('worker.settings'),
            'text-neutral-500 hover:bg-stone-100 hover:text-teal-800' => ! request()->routeIs('worker.settings'),
        ])>Settings</a>
    </div>
</nav>