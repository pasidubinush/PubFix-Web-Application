<header class="bg-[#f8f7f2] border-b border-[#dfe3d9] sticky top-0 z-50">
    <div class="max-w-[1440px] mx-auto h-[88px] px-6 sm:px-12 lg:px-20 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-[9px] group">
            <div class="bg-[#25664d] h-[36px] w-[34px] rounded-[10px] flex items-center justify-center shrink-0 shadow-sm transition-transform group-hover:scale-105">
                <img src="{{ asset('images/pubfix/7d95e.svg') }}" alt="PubFix logo" class="w-6 h-6" />
            </div>
            <span class="text-[#1e3329] text-[25px] font-semibold tracking-tight">
                Pub<span class="text-[#26c33e]">Fix</span>
            </span>
        </a>

        <!-- Account Actions -->
        <div class="flex items-center gap-4 sm:gap-6">
            @auth
                <div class="flex items-center gap-4 text-[13px] sm:text-[14px]">
                    @if (Auth::user()->isHandyman())
                        <a href="{{ route('worker.dashboard') }}" class="text-[#25664d] font-semibold hover:underline transition-colors flex items-center gap-1.5">
                            <span class="size-2 rounded-full bg-[#25664d]"></span>
                            <span>Pro workspace</span>
                        </a>
                    @else
                        <a href="{{ route('bookings.index') }}" class="text-[#1e3329] font-medium hover:text-[#25664d] transition-colors">
                            My bookings
                        </a>
                        <a href="{{ route('customer.profile') }}" class="text-[#1e3329] font-medium hover:text-[#25664d] transition-colors flex items-center gap-1.5">
                            <span class="size-2 rounded-full bg-[#25664d]"></span>
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-[#69736b] hover:text-[#dc2626] text-[13px] font-medium transition-colors cursor-pointer">
                            Log out
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="text-[#1e3329] text-[14px] font-semibold hover:text-[#25664d] transition-colors">
                    Log in
                </a>
                <a href="{{ route('customer.registration') }}" class="text-[#25664d] text-[14px] font-semibold hover:underline transition-all">
                    Sign up
                </a>
            @endauth
        </div>
    </div>
</header>
