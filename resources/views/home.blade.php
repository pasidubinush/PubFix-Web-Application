<x-layout title="PubFix · Your to-do list. In good hands.">
    <!-- Hero Section: A helping hand for home -->
    <section class="py-12 lg:py-16 px-6 sm:px-12 lg:px-20 max-w-[1440px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <!-- Left: Hero Story & Search -->
            <div class="lg:col-span-7 flex flex-col gap-7 lg:max-w-[670px]">
                <!-- Tagline -->
                <div class="flex items-center gap-2">
                    <span class="size-[7px] rounded-full bg-[#25664d] inline-block"></span>
                    <span class="text-[#25664d] text-[11px] font-semibold tracking-wider uppercase">
                        GOOD PEOPLE. RIGHT AROUND THE CORNER.
                    </span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-[#1e3329] text-4xl sm:text-5xl lg:text-[68px] font-normal leading-[1.04] tracking-tight">
                    Your to-do list.<br />
                    In <span class="text-[#25664d]">good hands.</span>
                </h1>

                <!-- Subheading -->
                <p class="text-[#69736b] text-base lg:text-[18px] leading-[1.65] max-w-[540px]">
                    From the little fixes to the bigger projects, find a skilled local handyman who treats your home like their own.
                </p>

                <!-- Search Card -->
                <div class="flex flex-col gap-4 w-full">
                    <form action="{{ route('handymen.index') }}" method="GET" class="bg-white border border-[#dfe3d9] rounded-[12px] p-2.5 shadow-[0px_12px_32px_0px_rgba(23,63,48,0.08)] flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <!-- Service Field -->
                        <div class="flex flex-1 items-center gap-3 pl-3">
                            <img src="{{ asset('images/pubfix/d6ce9.svg') }}" alt="" class="size-[22px] shrink-0" />
                            <div class="flex flex-col gap-0.5 flex-1 min-w-0">
                                <label for="service-search" class="text-[10px] font-bold text-[#69736b] tracking-wider uppercase">
                                    WHAT NEEDS DOING?
                                </label>
                                <input
                                    id="service-search"
                                    type="text"
                                    name="service"
                                    placeholder="Try “furniture assembly”"
                                    class="text-[15px] text-[#1e3329] placeholder:text-[#69736b] bg-transparent outline-none w-full"
                                />
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="hidden sm:block w-px h-9 bg-[#dfe3d9]"></div>

                        <!-- Location Field -->
                        <div class="flex items-center gap-2.5 pl-3 sm:pl-0 sm:w-[170px]">
                            <img src="{{ asset('images/pubfix/68ab9.svg') }}" alt="" class="size-[20px] shrink-0" />
                            <div class="flex flex-col gap-0.5">
                                <label for="zip-code" class="text-[10px] font-bold text-[#69736b] tracking-wider uppercase">
                                    ZIP CODE
                                </label>
                                <input
                                    id="zip-code"
                                    type="text"
                                    name="zip"
                                    value="00700, Colombo"
                                    class="text-[15px] text-[#1e3329] bg-transparent outline-none w-full"
                                />
                            </div>
                        </div>

                        <!-- Search Button -->
                        <button
                            type="submit"
                            class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white h-[50px] px-6 rounded-[8px] flex items-center justify-center gap-2.5 text-[14px] font-semibold shrink-0 cursor-pointer shadow-sm"
                        >
                            <span>Search</span>
                            <img src="{{ asset('images/pubfix/66839.svg') }}" alt="" class="size-[17px]" />
                        </button>
                    </form>

                    <!-- Popular Tags -->
                    <div class="flex flex-wrap items-center gap-2.5 text-[12px] text-[#69736b]">
                        <span>Popular:</span>
                        <a href="{{ route('handymen.index') }}?service=Furniture+assembly" class="text-[#25664d] underline underline-offset-2 hover:text-[#1e523e]">Furniture assembly</a>
                        <a href="{{ route('handymen.index') }}?service=Plumbing" class="text-[#25664d] underline underline-offset-2 hover:text-[#1e523e]">Plumbing</a>
                        <a href="{{ route('handymen.index') }}?service=Painting" class="text-[#25664d] underline underline-offset-2 hover:text-[#1e523e]">Painting</a>
                    </div>
                </div>

                <!-- Reassurance Badges -->
                <div class="flex flex-wrap items-center gap-5 sm:gap-6 pt-1">
                    <div class="flex items-center gap-1.5 text-[#69736b] text-[11px]">
                        <img src="{{ asset('images/pubfix/7fd63.svg') }}" alt="" class="size-[14px]" />
                        <span>Verified local pros</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-[#69736b] text-[11px]">
                        <img src="{{ asset('images/pubfix/7fd63.svg') }}" alt="" class="size-[14px]" />
                        <span>Clear hourly rates</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-[#69736b] text-[11px]">
                        <img src="{{ asset('images/pubfix/7fd63.svg') }}" alt="" class="size-[14px]" />
                        <span>No booking fees</span>
                    </div>
                </div>
            </div>

            <!-- Right: Hero Visual -->
            <div class="lg:col-span-5 relative">
                <div class="relative h-[420px] sm:h-[520px] w-full rounded-bl-[20px] rounded-br-[20px] rounded-tl-[100px] rounded-tr-[20px] overflow-hidden shadow-[0px_12px_32px_0px_rgba(23,63,48,0.12)]">
                    <img
                        src="{{ asset('images/pubfix/d12fc.png') }}"
                        alt="Handyman at home"
                        class="absolute inset-0 size-full object-cover pointer-events-none"
                    />

                    <!-- Availability Note Badge -->
                    <div class="absolute top-6 left-6 bg-[#eaf0e6] px-3 py-1.5 rounded-full shadow-sm">
                        <span class="text-[#25664d] text-[11px] font-semibold whitespace-nowrap">
                            A little help. A lot of relief.
                        </span>
                    </div>

                    <!-- Featured Pro Floating Card -->
                    <div class="absolute bottom-6 left-6 right-6 sm:right-auto sm:w-[400px] bg-white rounded-[12px] p-4 sm:p-[18px] shadow-[0px_12px_32px_0px_rgba(23,63,48,0.12)] border border-[#dfe3d9]/70 flex items-center gap-3.5">
                        <div class="bg-[#eaf0e6] rounded-full size-[42px] flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/pubfix/a6d0a.svg') }}" alt="" class="size-6" />
                        </div>
                        <div class="flex-1 min-w-0 flex flex-col gap-1">
                            <p class="text-[#1e3329] text-[15px] font-medium leading-snug truncate">
                                Meet Marcus, your local fix-it person.
                            </p>
                            <p class="text-[#69736b] text-[11px] truncate">
                                Carpentry & assembly · Colombo, Sri Lanka
                            </p>
                        </div>
                        <div class="flex flex-col items-center gap-0.5 shrink-0 pl-2">
                            <span class="text-[#25664d] text-[17px] font-semibold leading-none">★ 4.9</span>
                            <span class="text-[#69736b] text-[10px]">128 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust / Community Metrics Bar -->
    <section class="bg-[#eaf0e6] py-8 px-6 sm:px-12 lg:px-20 border-y border-[#dfe3d9]">
        <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="text-[#1e3329] text-[19px] font-normal leading-[1.4] max-w-[265px]">
                <p>Big on care.</p>
                <p>Loved by your neighbors.</p>
            </div>

            <!-- Metrics -->
            <div class="grid grid-cols-3 gap-6 sm:gap-12 flex-1 max-w-[680px]">
                <div class="flex flex-col gap-1">
                    <p class="text-[#25664d] text-2xl lg:text-[30px] font-semibold leading-none">2,400+</p>
                    <p class="text-[#69736b] text-[12px]">homes made happier</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-[#25664d] text-2xl lg:text-[30px] font-semibold leading-none">150+</p>
                    <p class="text-[#69736b] text-[12px]">verified local professionals</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-[#25664d] text-2xl lg:text-[30px] font-semibold leading-none">4.9 / 5</p>
                    <p class="text-[#69736b] text-[12px]">average customer rating</p>
                </div>
            </div>

            <!-- Hand Heart Icon -->
            <div class="hidden lg:block shrink-0">
                <img src="{{ asset('images/pubfix/789fb.svg') }}" alt="" class="size-12" />
            </div>
        </div>
    </section>

    <!-- Services Section: Help for every corner -->
    <section class="py-16 lg:py-20 px-6 sm:px-12 lg:px-20 max-w-[1440px] mx-auto">
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-8">
            <div class="flex flex-col gap-3">
                <p class="text-[#25664d] text-[11px] font-bold uppercase tracking-wider">
                    WHAT CAN WE TAKE OFF YOUR LIST?
                </p>
                <h2 class="text-[#1e3329] text-3xl lg:text-[40px] font-normal leading-tight">
                    A little help goes a long way.
                </h2>
            </div>
            <a
                href="{{ route('handymen.index') }}"
                class="inline-flex bg-white border border-[#dfe3d9] h-[50px] px-[22px] items-center justify-center gap-[10px] rounded-[8px] text-[#1e3329] text-[14px] font-semibold hover:border-[#25664d] hover:bg-[#fcfbf7] transition-all self-start sm:self-auto shadow-sm"
            >
                <span>All services</span>
                <img src="{{ asset('images/pubfix/45531.svg') }}" alt="" class="size-[17px]" />
            </a>
        </div>

        <!-- Category Cards Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            <!-- Furniture assembly -->
            <a href="#" class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col gap-5 hover:border-[#25664d] hover:shadow-md transition-all group">
                <div class="size-8">
                    <img src="{{ asset('images/pubfix/54e0e.svg') }}" alt="Furniture assembly" class="size-full transition-transform group-hover:scale-110" />
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-[#1e3329] text-[15px] font-semibold leading-snug">Furniture assembly</h3>
                    <p class="text-[#69736b] text-[12px]">From $45 / hr</p>
                </div>
            </a>

            <!-- Plumbing -->
            <a href="#" class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col gap-5 hover:border-[#25664d] hover:shadow-md transition-all group">
                <div class="size-8">
                    <img src="{{ asset('images/pubfix/51ec8.svg') }}" alt="Plumbing" class="size-full transition-transform group-hover:scale-110" />
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-[#1e3329] text-[15px] font-semibold leading-snug">Plumbing</h3>
                    <p class="text-[#69736b] text-[12px]">From $60 / hr</p>
                </div>
            </a>

            <!-- Electrical -->
            <a href="#" class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col gap-5 hover:border-[#25664d] hover:shadow-md transition-all group">
                <div class="size-8">
                    <img src="{{ asset('images/pubfix/6ba7a.svg') }}" alt="Electrical" class="size-full transition-transform group-hover:scale-110" />
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-[#1e3329] text-[15px] font-semibold leading-snug">Electrical</h3>
                    <p class="text-[#69736b] text-[12px]">From $70 / hr</p>
                </div>
            </a>

            <!-- Painting -->
            <a href="#" class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col gap-5 hover:border-[#25664d] hover:shadow-md transition-all group">
                <div class="size-8">
                    <img src="{{ asset('images/pubfix/c83b7.svg') }}" alt="Painting" class="size-full transition-transform group-hover:scale-110" />
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-[#1e3329] text-[15px] font-semibold leading-snug">Painting</h3>
                    <p class="text-[#69736b] text-[12px]">From $40 / hr</p>
                </div>
            </a>

            <!-- Carpentry -->
            <a href="#" class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col gap-5 hover:border-[#25664d] hover:shadow-md transition-all group">
                <div class="size-8">
                    <img src="{{ asset('images/pubfix/40dc0.svg') }}" alt="Carpentry" class="size-full transition-transform group-hover:scale-110" />
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-[#1e3329] text-[15px] font-semibold leading-snug">Carpentry</h3>
                    <p class="text-[#69736b] text-[12px]">From $50 / hr</p>
                </div>
            </a>

            <!-- General repairs -->
            <a href="#" class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col gap-5 hover:border-[#25664d] hover:shadow-md transition-all group">
                <div class="size-8">
                    <img src="{{ asset('images/pubfix/8dddf.svg') }}" alt="General repairs" class="size-full transition-transform group-hover:scale-110" />
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-[#1e3329] text-[15px] font-semibold leading-snug">General repairs</h3>
                    <p class="text-[#69736b] text-[12px]">From $40 / hr</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Featured Pros Section: Meet your neighborhood pros -->
    <section class="pb-20 pt-6 px-6 sm:px-12 lg:px-20 max-w-[1440px] mx-auto">
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-9">
            <div class="flex flex-col gap-3">
                <p class="text-[#25664d] text-[11px] font-bold uppercase tracking-wider">
                    REAL SKILLS. REALLY GOOD PEOPLE.
                </p>
                <h2 class="text-[#1e3329] text-3xl lg:text-[40px] font-normal leading-tight">
                    Meet a few of your local favorites.
                </h2>
                <p class="text-[#69736b] text-[16px] leading-[1.6]">
                    Experienced, reviewed, and ready to lend a hand in Sri Lanka.
                </p>
            </div>
            <a
                href="{{ route('handymen.index') }}"
                class="inline-flex bg-white border border-[#dfe3d9] h-[50px] px-[22px] items-center justify-center gap-[10px] rounded-[8px] text-[#1e3329] text-[14px] font-semibold hover:border-[#25664d] hover:bg-[#fcfbf7] transition-all self-start sm:self-auto shadow-sm"
            >
                <span>Meet all handymen</span>
                <img src="{{ asset('images/pubfix/45531.svg') }}" alt="" class="size-[17px]" />
            </a>
        </div>

        <!-- Pro Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Marcus Reed -->
            <div class="bg-white border border-[#dfe3d9] rounded-[12px] overflow-hidden flex flex-col hover:shadow-lg transition-shadow">
                <div class="relative h-[240px] w-full overflow-hidden">
                    <img src="{{ asset('images/pubfix/ddb51.png') }}" alt="Marcus Reed" class="size-full object-cover pointer-events-none" />
                    <div class="absolute top-4 left-4 bg-[#eaf0e6] px-2.5 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                        <img src="{{ asset('images/pubfix/18a93.svg') }}" alt="" class="size-[13px]" />
                        <span class="text-[#25664d] text-[11px] font-semibold">Goodhands verified</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col gap-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[#1e3329] text-[22px] font-normal">Marcus Reed</h3>
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('images/pubfix/68b11.svg') }}" alt="" class="size-[14px]" />
                            <span class="text-[#1e3329] text-[13px] font-medium">4.9</span>
                            <span class="text-[#69736b] text-[12px]">(128)</span>
                        </div>
                    </div>
                    <p class="text-[#25664d] text-[14px] font-medium">Assembly & carpentry</p>
                    <p class="text-[#69736b] text-[12px]">Colombo 03 · 2 km away</p>
                    <div class="h-px bg-[#dfe3d9] my-2"></div>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-baseline gap-1">
                            <span class="text-[#1e3329] text-[24px] font-semibold">$55</span>
                            <span class="text-[#69736b] text-[12px]">/ hour</span>
                        </div>
                        <a href="#" class="text-[#25664d] text-[13px] font-medium hover:underline">
                            View profile ↗
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sofia Chen -->
            <div class="bg-white border border-[#dfe3d9] rounded-[12px] overflow-hidden flex flex-col hover:shadow-lg transition-shadow">
                <div class="relative h-[240px] w-full overflow-hidden">
                    <img src="{{ asset('images/pubfix/d12cc.png') }}" alt="Sofia Chen" class="size-full object-cover pointer-events-none" />
                    <div class="absolute top-4 left-4 bg-[#eaf0e6] px-2.5 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                        <img src="{{ asset('images/pubfix/18a93.svg') }}" alt="" class="size-[13px]" />
                        <span class="text-[#25664d] text-[11px] font-semibold">Goodhands verified</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col gap-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[#1e3329] text-[22px] font-normal">Sofia Chen</h3>
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('images/pubfix/68b11.svg') }}" alt="" class="size-[14px]" />
                            <span class="text-[#1e3329] text-[13px] font-medium">4.9</span>
                            <span class="text-[#69736b] text-[12px]">(96)</span>
                        </div>
                    </div>
                    <p class="text-[#25664d] text-[14px] font-medium">Electrical & lighting</p>
                    <p class="text-[#69736b] text-[12px]">Dehiwala · 3 km away</p>
                    <div class="h-px bg-[#dfe3d9] my-2"></div>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-baseline gap-1">
                            <span class="text-[#1e3329] text-[24px] font-semibold">Rs 4,000</span>
                            <span class="text-[#69736b] text-[12px]">/ hour</span>
                        </div>
                        <a href="#" class="text-[#25664d] text-[13px] font-medium hover:underline">
                            View profile ↗
                        </a>
                    </div>
                </div>
            </div>

            <!-- Daniel Brooks -->
            <div class="bg-white border border-[#dfe3d9] rounded-[12px] overflow-hidden flex flex-col hover:shadow-lg transition-shadow">
                <div class="relative h-[240px] w-full overflow-hidden">
                    <img src="{{ asset('images/pubfix/c42be.png') }}" alt="Daniel Brooks" class="size-full object-cover pointer-events-none" />
                    <div class="absolute top-4 left-4 bg-[#eaf0e6] px-2.5 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                        <img src="{{ asset('images/pubfix/18a93.svg') }}" alt="" class="size-[13px]" />
                        <span class="text-[#25664d] text-[11px] font-semibold">Goodhands verified</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col gap-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[#1e3329] text-[22px] font-normal">Daniel Brooks</h3>
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('images/pubfix/68b11.svg') }}" alt="" class="size-[14px]" />
                            <span class="text-[#1e3329] text-[13px] font-medium">4.8</span>
                            <span class="text-[#69736b] text-[12px]">(112)</span>
                        </div>
                    </div>
                    <p class="text-[#25664d] text-[14px] font-medium">Plumbing & repairs</p>
                    <p class="text-[#69736b] text-[12px]">Kandy · Central Province</p>
                    <div class="h-px bg-[#dfe3d9] my-2"></div>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-baseline gap-1">
                            <span class="text-[#1e3329] text-[24px] font-semibold">$65</span>
                            <span class="text-[#69736b] text-[12px]">/ hour</span>
                        </div>
                        <a href="#" class="text-[#25664d] text-[13px] font-medium hover:underline">
                            View profile ↗
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Proximity Note -->
        <div class="flex items-center justify-center gap-2 mt-9 text-[#69736b] text-[12px]">
            <img src="{{ asset('images/pubfix/61409.svg') }}" alt="" class="size-[15px]" />
            <span>Your next helping hand could be just a few streets away.</span>
        </div>
    </section>

    <!-- 3-Step Process: From to-do to ta-da -->
    <section class="bg-[#ede9de] py-[72px] px-6 sm:px-12 lg:px-20">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col gap-3 mb-11">
                <p class="text-[#25664d] text-[11px] font-bold uppercase tracking-wider">
                    LESS SEARCHING. MORE LIVING.
                </p>
                <h2 class="text-[#1e3329] text-3xl lg:text-[40px] font-normal leading-tight">
                    From to-do to ta-da. In three steps.
                </h2>
            </div>

            <!-- Steps Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-14">
                <!-- Step 1 -->
                <div class="flex flex-col gap-5">
                    <div class="flex items-center justify-between w-full">
                        <div class="bg-[#f8f7f2] rounded-[12px] size-14 flex items-center justify-center shadow-sm">
                            <img src="{{ asset('images/pubfix/904d5.svg') }}" alt="" class="size-[25px]" />
                        </div>
                        <span class="text-[#69736b] text-[13px] font-medium">01 /</span>
                    </div>
                    <h3 class="text-[#1e3329] text-[22px] font-semibold">Tell us what needs doing</h3>
                    <p class="text-[#69736b] text-[14px] leading-[1.7]">
                        A leaky tap? A flat-pack puzzle? Search for your job and add your ZIP code.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col gap-5">
                    <div class="flex items-center justify-between w-full">
                        <div class="bg-[#f8f7f2] rounded-[12px] size-14 flex items-center justify-center shadow-sm">
                            <img src="{{ asset('images/pubfix/1dd03.svg') }}" alt="" class="size-[25px]" />
                        </div>
                        <span class="text-[#69736b] text-[13px] font-medium">02 /</span>
                    </div>
                    <h3 class="text-[#1e3329] text-[22px] font-semibold">Find your kind of handy</h3>
                    <p class="text-[#69736b] text-[14px] leading-[1.7]">
                        Compare verified neighbors by skills, reviews, availability, and clear hourly rates.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col gap-5">
                    <div class="flex items-center justify-between w-full">
                        <div class="bg-[#f8f7f2] rounded-[12px] size-14 flex items-center justify-center shadow-sm">
                            <img src="{{ asset('images/pubfix/69fbd.svg') }}" alt="" class="size-[25px]" />
                        </div>
                        <span class="text-[#69736b] text-[13px] font-medium">03 /</span>
                    </div>
                    <h3 class="text-[#1e3329] text-[22px] font-semibold">Send a request. Get it done.</h3>
                    <p class="text-[#69736b] text-[14px] leading-[1.7]">
                        Share the details and your preferred time. Your pro confirms, then takes care of the rest.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials: Word around the neighborhood -->
    <section class="bg-[#eaf0e6] py-[72px] px-6 sm:px-12 lg:px-20 border-y border-[#dfe3d9]">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col gap-3 mb-9">
                <p class="text-[#25664d] text-[11px] font-bold uppercase tracking-wider">
                    GOOD WORD TRAVELS
                </p>
                <h2 class="text-[#1e3329] text-3xl lg:text-[40px] font-normal leading-tight">
                    Your neighbors have a few good things to say.
                </h2>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-[12px] p-7 flex flex-col gap-5 justify-between shadow-sm">
                    <p class="text-[#25664d] text-[15px] tracking-wider font-semibold">★★★★★</p>
                    <blockquote class="text-[#1e3329] text-[17px] leading-[1.6] flex-1">
                        “Marcus turned six boxes of flat-pack furniture into a home office I actually love. On time, tidy, and just a genuinely lovely person.”
                    </blockquote>
                    <div class="flex flex-col gap-3.5 pt-3 border-t border-[#dfe3d9]/60">
                        <div class="flex items-center gap-3">
                            <div class="bg-[#ede9de] size-[38px] rounded-full flex items-center justify-center font-semibold text-[12px] text-[#25664d]">
                                ER
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[#1e3329] text-[13px] font-semibold">Emily R.</span>
                                <span class="text-[#69736b] text-[11px]">Bouldin Creek</span>
                            </div>
                        </div>
                        <p class="text-[#69736b] text-[11px]">
                            Furniture assembly with Marcus · Verified review
                        </p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-[12px] p-7 flex flex-col gap-5 justify-between shadow-sm">
                    <p class="text-[#25664d] text-[15px] tracking-wider font-semibold">★★★★★</p>
                    <blockquote class="text-[#1e3329] text-[17px] leading-[1.6] flex-1">
                        “Sofia explained everything before she started. Our new lights look amazing, and the price was exactly what we agreed. Such a relief.”
                    </blockquote>
                    <div class="flex flex-col gap-3.5 pt-3 border-t border-[#dfe3d9]/60">
                        <div class="flex items-center gap-3">
                            <div class="bg-[#ede9de] size-[38px] rounded-full flex items-center justify-center font-semibold text-[12px] text-[#25664d]">
                                JT
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[#1e3329] text-[13px] font-semibold">James T.</span>
                                <span class="text-[#69736b] text-[11px]">East Austin</span>
                            </div>
                        </div>
                        <p class="text-[#69736b] text-[11px]">
                            Lighting installation with Sofia · Verified review
                        </p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-[12px] p-7 flex flex-col gap-5 justify-between shadow-sm">
                    <p class="text-[#25664d] text-[15px] tracking-wider font-semibold">★★★★★</p>
                    <blockquote class="text-[#1e3329] text-[17px] leading-[1.6] flex-1">
                        “That dripping tap had been on my list for months. Daniel fixed it in under an hour. I wish I’d found Goodhands sooner!”
                    </blockquote>
                    <div class="flex flex-col gap-3.5 pt-3 border-t border-[#dfe3d9]/60">
                        <div class="flex items-center gap-3">
                            <div class="bg-[#ede9de] size-[38px] rounded-full flex items-center justify-center font-semibold text-[12px] text-[#25664d]">
                                PS
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[#1e3329] text-[13px] font-semibold">Priya S.</span>
                                <span class="text-[#69736b] text-[11px]">Zilker</span>
                            </div>
                        </div>
                        <p class="text-[#69736b] text-[11px]">
                            Plumbing repair with Daniel · Verified review
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Neighborhoods: Good help close to home -->
    <section class="py-16 px-6 sm:px-12 lg:px-20 max-w-[1440px] mx-auto">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-10 lg:gap-20">
            <!-- Left Info -->
            <div class="flex flex-col gap-4 max-w-[520px]">
                <p class="text-[#25664d] text-[11px] font-bold uppercase tracking-wider">
                    PROUDLY LOCAL
                </p>
                <h2 class="text-[#1e3329] text-3xl lg:text-[34px] font-normal leading-tight">
                    Sri Lanka, we’ve got you.
                </h2>
                <p class="text-[#69736b] text-[15px] leading-[1.6]">
                    From Colombo to your side of town. Find trusted help in your neighborhood, across the island.
                </p>
            </div>

            <!-- Neighborhood Chips Grid -->
            <div class="flex-1 w-full grid grid-cols-2 sm:grid-cols-3 gap-3">
                <div class="bg-white border border-[#dfe3d9] rounded-[8px] p-3.5 flex items-center gap-2 hover:border-[#25664d] transition-colors">
                    <img src="{{ asset('images/pubfix/61409.svg') }}" alt="" class="size-[15px] shrink-0" />
                    <span class="text-[#1e3329] text-[12px] font-medium">Colombo 03</span>
                </div>
                <div class="bg-white border border-[#dfe3d9] rounded-[8px] p-3.5 flex items-center gap-2 hover:border-[#25664d] transition-colors">
                    <img src="{{ asset('images/pubfix/61409.svg') }}" alt="" class="size-[15px] shrink-0" />
                    <span class="text-[#1e3329] text-[12px] font-medium">Colombo 07</span>
                </div>
                <div class="bg-white border border-[#dfe3d9] rounded-[8px] p-3.5 flex items-center gap-2 hover:border-[#25664d] transition-colors">
                    <img src="{{ asset('images/pubfix/61409.svg') }}" alt="" class="size-[15px] shrink-0" />
                    <span class="text-[#1e3329] text-[12px] font-medium">Nugegoda</span>
                </div>
                <div class="bg-white border border-[#dfe3d9] rounded-[8px] p-3.5 flex items-center gap-2 hover:border-[#25664d] transition-colors">
                    <img src="{{ asset('images/pubfix/61409.svg') }}" alt="" class="size-[15px] shrink-0" />
                    <span class="text-[#1e3329] text-[12px] font-medium">Dehiwala</span>
                </div>
                <div class="bg-white border border-[#dfe3d9] rounded-[8px] p-3.5 flex items-center gap-2 hover:border-[#25664d] transition-colors">
                    <img src="{{ asset('images/pubfix/61409.svg') }}" alt="" class="size-[15px] shrink-0" />
                    <span class="text-[#1e3329] text-[12px] font-medium">Kandy</span>
                </div>
                <div class="bg-white border border-[#dfe3d9] rounded-[8px] p-3.5 flex items-center gap-2 hover:border-[#25664d] transition-colors">
                    <img src="{{ asset('images/pubfix/61409.svg') }}" alt="" class="size-[15px] shrink-0" />
                    <span class="text-[#1e3329] text-[12px] font-medium">Galle</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Pro CTA Banner: Grow your local business -->
    <section class="pb-16 lg:pb-20 px-6 sm:px-12 lg:px-20 max-w-[1440px] mx-auto">
        <div class="bg-[#173f30] rounded-[20px] overflow-hidden flex flex-col lg:flex-row items-center justify-between shadow-lg">
            <!-- Text Content -->
            <div class="p-8 sm:p-12 lg:p-14 flex flex-col gap-5 lg:max-w-[620px]">
                <p class="text-[#ddeba9] text-[11px] font-semibold tracking-wider uppercase">
                    GOOD AT WHAT YOU DO?
                </p>
                <h2 class="text-white text-3xl sm:text-[42px] font-semibold leading-[1.15]">
                    Your skills. Your schedule.<br />
                    Your neighborhood.
                </h2>
                <p class="text-[#c2d2c7] text-[15px] leading-[1.6]">
                    Meet customers who value your craft. Choose the jobs you want, set your own rates, and build a business close to home.
                </p>
                <div class="flex flex-wrap items-center gap-5 pt-2">
                    <a
                        href="#"
                        class="bg-[#ddeba9] hover:bg-[#cbe08e] transition-colors text-[#1e3329] h-[50px] px-6 rounded-[8px] flex items-center gap-2.5 text-[14px] font-semibold shadow-sm"
                    >
                        <span>Join as a handyman</span>
                        <img src="{{ asset('images/pubfix/112c6.svg') }}" alt="" class="size-[17px]" />
                    </a>
                    <span class="text-[#c2d2c7] text-[12px]">
                        Free to join. Built around you.
                    </span>
                </div>
            </div>

            <!-- Pro Image -->
            <div class="h-[300px] sm:h-[368px] w-full lg:w-[450px] shrink-0 relative overflow-hidden">
                <img
                    src="{{ asset('images/pubfix/edf14.png') }}"
                    alt="Local professionals"
                    class="absolute inset-0 size-full object-cover object-top pointer-events-none"
                />
            </div>
        </div>
    </section>
</x-layout>
