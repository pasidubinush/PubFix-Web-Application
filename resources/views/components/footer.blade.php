<footer class="bg-[#173f30] text-[#c2d2c7] pt-14 pb-8 px-6 sm:px-12 lg:px-20">
    <div class="max-w-[1440px] mx-auto">
        <!-- Top Section -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-14">
            <!-- Brand Column -->
            <div class="md:col-span-5 flex flex-col gap-5">
                <div class="flex items-center gap-[9px]">
                    <div class="bg-[#ddeba9] h-[36px] w-[34px] rounded-[10px] flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/pubfix/4ff65.svg') }}" alt="PubFix logo" class="w-6 h-6" />
                    </div>
                    <span class="text-white text-[25px] font-semibold tracking-tight">
                        Pub<span class="text-[#26c33e]">Fix</span>
                    </span>
                </div>
                <p class="text-[#c2d2c7] text-[14px] leading-[1.7] max-w-[320px]">
                    Good people. Great work. A little more peace of mind for everything you call home.
                </p>
                <p class="text-[#c2d2c7] text-[12px]">
                    Made for neighborhoods. Starting in Austin, TX.
                </p>
            </div>

            <!-- Links: For your home -->
            <div class="md:col-span-2 flex flex-col gap-4 text-[12px]">
                <h4 class="text-white font-semibold text-[13px] tracking-wide">For your home</h4>
                <a href="{{ route('handymen.index') }}" class="text-[#c2d2c7] hover:text-white transition-colors">Find a handyman</a>
                <a href="{{ route('handymen.index') }}" class="text-[#c2d2c7] hover:text-white transition-colors">Explore services</a>
            </div>

            <!-- Links: For professionals -->
            <div class="md:col-span-3 flex flex-col gap-4 text-[12px]">
                <h4 class="text-white font-semibold text-[13px] tracking-wide">For professionals</h4>
                <a href="{{ route('worker.sign-up') }}" class="text-[#c2d2c7] hover:text-white transition-colors">Join as a pro</a>
                <a href="{{ route('worker.sign-in') }}" class="text-[#c2d2c7] hover:text-white transition-colors">Pro workspace</a>
                <a href="#" class="text-[#c2d2c7] hover:text-white transition-colors">Community standards</a>
            </div>

            <!-- Links: PubFix -->
            <div class="md:col-span-2 flex flex-col gap-4 text-[12px]">
                <h4 class="text-white font-semibold text-[13px] tracking-wide">PubFix</h4>
                <a href="#" class="text-[#c2d2c7] hover:text-white transition-colors">Our story</a>
                <a href="#" class="text-[#c2d2c7] hover:text-white transition-colors">Neighborhood notes</a>
            </div>
        </div>

        <!-- Bottom Legal -->
        <div class="border-t border-white/15 mt-12 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-[#c2d2c7]">
            <p>© {{ date('Y') }} PubFix. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of service</a>
                <a href="#" class="hover:text-white transition-colors flex items-center gap-1">
                    Instagram <span>↗</span>
                </a>
            </div>
        </div>
    </div>
</footer>
