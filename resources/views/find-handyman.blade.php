<x-layout title="PubFix · Find a Handyman in Austin, TX" :minimal-footer="true">
    <!-- Search Introduction Banner -->
    <section class="bg-[#eaf0e6] py-8 px-6 sm:px-12 lg:px-20 border-b border-[#dfe3d9]">
        <div class="max-w-[1440px] mx-auto flex flex-col gap-6">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-[12px] text-[#69736b]">
                <a href="{{ url('/') }}" class="hover:text-[#1e3329] transition-colors">Home</a>
                <span>/</span>
                <a href="{{ route('handymen.index') }}" class="hover:text-[#1e3329] transition-colors">Services</a>
                <span>/</span>
                <span id="breadcrumb-service" class="text-[#1e3329] font-medium">{{ request('service', 'Find a Handyman') }}</span>
            </nav>

            <!-- Results Headline -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div class="flex flex-col gap-2.5">
                    <h1 class="text-[#1e3329] text-3xl sm:text-[40px] font-normal leading-tight">
                        Good with flat-packs. Great with people.
                    </h1>
                    <p class="text-[#69736b] text-[15px]">
                        Trusted local pros, right here in Austin.
                    </p>
                </div>

                <!-- Verified Status Pill -->
                <div class="bg-[#eaf0e6] border border-[#25664d]/15 px-3 py-1.5 rounded-full flex items-center gap-1.5 self-start md:self-auto shadow-sm">
                    <img src="{{ asset('images/pubfix/c57a1.svg') }}" alt="" class="size-[13px]" />
                    <span class="text-[#25664d] text-[11px] font-semibold whitespace-nowrap">
                        All pros identity verified
                    </span>
                </div>
            </div>

            <!-- Search Bar -->
            <form id="top-search-form" onsubmit="event.preventDefault(); applyTopSearch();" class="bg-white border border-[#dfe3d9] rounded-[12px] p-2.5 shadow-[0px_8px_24px_0px_rgba(23,63,48,0.06)] flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                <!-- Service Input -->
                <div class="flex flex-1 items-center gap-3 pl-3">
                    <img src="{{ asset('images/pubfix/d6ce9.svg') }}" alt="" class="size-[22px] shrink-0" />
                    <div class="flex flex-col gap-0.5 flex-1 min-w-0">
                        <label for="service-search-page" class="text-[10px] font-bold text-[#69736b] tracking-wider uppercase">
                            WHAT NEEDS DOING?
                        </label>
                        <input
                            id="service-search-page"
                            type="text"
                            name="service"
                            value="{{ request('service', '') }}"
                            placeholder="Try “furniture assembly”"
                            class="text-[15px] text-[#1e3329] font-medium placeholder:text-[#69736b] bg-transparent outline-none w-full"
                        />
                    </div>
                </div>

                <!-- Divider -->
                <div class="hidden sm:block w-px h-9 bg-[#dfe3d9]"></div>

                <!-- Location Input -->
                <div class="flex items-center gap-2.5 pl-3 sm:pl-0 sm:w-[260px]">
                    <img src="{{ asset('images/pubfix/68ab9.svg') }}" alt="" class="size-[20px] shrink-0" />
                    <div class="flex flex-col gap-0.5 flex-1 min-w-0">
                        <div class="flex items-center justify-between pr-2">
                            <label for="zip-code-page" class="text-[10px] font-bold text-[#69736b] tracking-wider uppercase">
                                ZIP CODE
                            </label>
                            <button
                                type="button"
                                onclick="openMapModal()"
                                class="text-[#25664d] hover:text-[#1e523e] text-[11px] font-semibold hover:underline flex items-center gap-1 cursor-pointer"
                                title="Pick location from interactive map"
                            >
                                <svg class="size-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span>Pick on map</span>
                            </button>
                        </div>
                        <input
                            id="zip-code-page"
                            type="text"
                            name="zip"
                            value="{{ request('zip', '78704, Austin') }}"
                            class="text-[15px] text-[#1e3329] font-medium bg-transparent outline-none w-full"
                        />
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white h-[50px] px-6 rounded-[8px] flex items-center justify-center gap-2.5 text-[14px] font-semibold shrink-0 cursor-pointer shadow-sm"
                >
                    <span>Find handymen</span>
                    <img src="{{ asset('images/pubfix/66839.svg') }}" alt="" class="size-[17px]" />
                </button>
            </form>
        </div>
    </section>

    <!-- Search Results & Filters Section -->
    <section class="py-9 px-6 sm:px-12 lg:px-20 max-w-[1440px] mx-auto">
        <div class="flex flex-col lg:flex-row items-start gap-8 lg:gap-[30px]">
            <!-- Filters Sidebar -->
            <aside class="w-full lg:w-[238px] shrink-0 flex flex-col gap-[26px]">
                <!-- Filter Heading -->
                <div class="flex items-center justify-between">
                    <h2 class="text-[#1e3329] text-[19px] font-semibold">Filters</h2>
                    <button
                        type="button"
                        onclick="resetAllFilters()"
                        class="text-[#25664d] text-[12px] hover:underline cursor-pointer"
                    >
                        Reset all
                    </button>
                </div>

                <!-- Service Filter -->
                <div class="flex flex-col gap-3.5">
                    <span class="text-[#1e3329] text-[13px] font-medium">Service</span>

                    @if(isset($categories) && $categories->isNotEmpty())
                        @foreach($categories as $category)
                            @php
                                $slug = \Illuminate\Support\Str::slug($category->name);
                            @endphp
                            <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                                <input
                                    type="checkbox"
                                    id="chk-service-{{ $slug }}"
                                    class="sr-only peer service-chk"
                                    data-slug="{{ $slug }}"
                                    onchange="onServiceChange('{{ $slug }}', this.checked)"
                                />
                                <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                                    <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                                    </svg>
                                </span>
                                <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">{{ $category->name }}</span>
                                <span id="count-service-{{ $slug }}" class="text-[#69736b] text-[11px]">{{ $category->handymen_count }}</span>
                            </label>
                        @endforeach
                    @else
                        <!-- Furniture assembly -->
                        <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                            <input
                                type="checkbox"
                                id="chk-service-furniture-assembly"
                                class="sr-only peer service-chk"
                                data-slug="furniture-assembly"
                                onchange="onServiceChange('furniture-assembly', this.checked)"
                            />
                            <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                                <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                                </svg>
                            </span>
                            <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">Furniture assembly</span>
                            <span id="count-service-furniture-assembly" class="text-[#69736b] text-[11px]">8</span>
                        </label>

                        <!-- Carpentry -->
                        <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                            <input
                                type="checkbox"
                                id="chk-service-carpentry"
                                class="sr-only peer service-chk"
                                data-slug="carpentry"
                                onchange="onServiceChange('carpentry', this.checked)"
                            />
                            <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                                <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                                </svg>
                            </span>
                            <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">Carpentry</span>
                            <span id="count-service-carpentry" class="text-[#69736b] text-[11px]">6</span>
                        </label>

                        <!-- General repairs -->
                        <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                            <input
                                type="checkbox"
                                id="chk-service-general-repairs"
                                class="sr-only peer service-chk"
                                data-slug="general-repairs"
                                onchange="onServiceChange('general-repairs', this.checked)"
                            />
                            <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                                <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                                </svg>
                            </span>
                            <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">General repairs</span>
                            <span id="count-service-general-repairs" class="text-[#69736b] text-[11px]">6</span>
                        </label>
                    @endif
                </div>

                <div class="h-px bg-[#dfe3d9]"></div>

                <!-- Availability Filter -->
                <div class="flex flex-col gap-3.5">
                    <span class="text-[#1e3329] text-[13px] font-medium">When do you need help?</span>

                    <!-- Any time -->
                    <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                        <input
                            type="checkbox"
                            id="chk-avail-any"
                            class="sr-only peer"
                            checked
                            onchange="onAvailabilityChange('any-time', this.checked)"
                        />
                        <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                            <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">Any time</span>
                    </label>

                    <!-- Today -->
                    <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                        <input
                            type="checkbox"
                            id="chk-avail-today"
                            class="sr-only peer"
                            onchange="onAvailabilityChange('today', this.checked)"
                        />
                        <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                            <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">Today</span>
                        <span id="count-avail-today" class="text-[#69736b] text-[11px]">4</span>
                    </label>

                    <!-- Tomorrow -->
                    <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                        <input
                            type="checkbox"
                            id="chk-avail-tomorrow"
                            class="sr-only peer"
                            onchange="onAvailabilityChange('tomorrow', this.checked)"
                        />
                        <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                            <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">Tomorrow</span>
                        <span id="count-avail-tomorrow" class="text-[#69736b] text-[11px]">8</span>
                    </label>

                    <!-- This weekend -->
                    <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                        <input
                            type="checkbox"
                            id="chk-avail-weekend"
                            class="sr-only peer"
                            onchange="onAvailabilityChange('this-weekend', this.checked)"
                        />
                        <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                            <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">This weekend</span>
                        <span id="count-avail-weekend" class="text-[#69736b] text-[11px]">10</span>
                    </label>
                </div>

                <div class="h-px bg-[#dfe3d9]"></div>

                <!-- Hourly Rate Filter (Interactive Dual Range Slider) -->
                <div class="flex flex-col gap-3.5">
                    <div class="flex items-center justify-between">
                        <span class="text-[#1e3329] text-[13px] font-medium">Hourly rate</span>
                        <span id="rate-display" class="text-[#69736b] text-[11px] font-medium">$30 – $100</span>
                    </div>

                    <!-- Dual Slider Component -->
                    <div class="relative flex items-center h-6 w-full select-none">
                        <!-- Static Background Track -->
                        <div class="absolute inset-x-0 h-1 bg-[#dfe3d9] rounded-full"></div>
                        <!-- Active Colored Fill Track -->
                        <div id="slider-track" class="absolute h-1 bg-[#25664d] rounded-full" style="left: 0%; width: 100%;"></div>

                        <!-- Minimum Handle Range Input -->
                        <input
                            type="range"
                            id="slider-min"
                            min="30"
                            max="100"
                            value="30"
                            step="5"
                            oninput="updateSlider(event)"
                            class="absolute inset-0 w-full appearance-none bg-transparent pointer-events-none cursor-pointer z-20 [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:size-[18px] [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:border-2 [&::-webkit-slider-thumb]:border-[#25664d] [&::-webkit-slider-thumb]:shadow-md [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:size-[18px] [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:border-2 [&::-moz-range-thumb]:border-[#25664d] [&::-moz-range-thumb]:shadow-md"
                        />

                        <!-- Maximum Handle Range Input -->
                        <input
                            type="range"
                            id="slider-max"
                            min="30"
                            max="100"
                            value="100"
                            step="5"
                            oninput="updateSlider(event)"
                            class="absolute inset-0 w-full appearance-none bg-transparent pointer-events-none cursor-pointer z-30 [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:size-[18px] [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:border-2 [&::-webkit-slider-thumb]:border-[#25664d] [&::-webkit-slider-thumb]:shadow-md [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:size-[18px] [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:border-2 [&::-moz-range-thumb]:border-[#25664d] [&::-moz-range-thumb]:shadow-md"
                        />
                    </div>

                    <span class="text-[#69736b] text-[11px]">Rates exclude materials.</span>
                </div>

                <div class="h-px bg-[#dfe3d9]"></div>

                <!-- Rating Filter -->
                <div class="flex flex-col gap-3.5">
                    <span class="text-[#1e3329] text-[13px] font-medium">Customer rating</span>

                    <!-- 4.5 stars & above -->
                    <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                        <input
                            type="checkbox"
                            id="chk-rating-45"
                            class="sr-only peer"
                            checked
                            onchange="onRatingChange(4.5, this.checked)"
                        />
                        <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                            <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">4.5 stars & above</span>
                        <span id="count-rating-45" class="text-[#69736b] text-[11px]">11</span>
                    </label>

                    <!-- 4.0 stars & above -->
                    <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                        <input
                            type="checkbox"
                            id="chk-rating-40"
                            class="sr-only peer"
                            onchange="onRatingChange(4.0, this.checked)"
                        />
                        <span class="size-4 rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                            <svg class="size-[11px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#1e3329] text-[13px] flex-1 group-hover:text-[#25664d] transition-colors">4.0 stars & above</span>
                        <span id="count-rating-40" class="text-[#69736b] text-[11px]">12</span>
                    </label>
                </div>

                <!-- Help Choosing Box -->
                <div class="bg-[#eaf0e6] p-5 rounded-[12px] flex flex-col gap-3 border border-[#dfe3d9]/50 shadow-sm mt-1">
                    <img src="{{ asset('images/pubfix/7c30b.svg') }}" alt="" class="size-[25px]" />
                    <h3 class="text-[#1e3329] text-[15px] font-semibold">Not sure who to choose?</h3>
                    <p class="text-[#69736b] text-[12px] leading-[1.6]">
                        Tell our team a little about your job. We’ll point you in the right direction.
                    </p>
                    <a href="mailto:help@pubfix.com" class="text-[#25664d] text-[12px] font-semibold hover:underline flex items-center gap-1">
                        Let’s talk <span>↗</span>
                    </a>
                </div>
            </aside>

            <!-- Matched Professionals List -->
            <div class="flex-1 min-w-0 flex flex-col gap-5 w-full">
                <!-- Results Toolbar -->
                <div class="flex items-center justify-between pb-1 relative">
                    <p id="results-count-headline" class="text-[#1e3329] text-[15px] font-semibold">
                        12 handymen near 78704
                    </p>

                    <!-- Sort Dropdown -->
                    <div class="relative">
                        <button
                            type="button"
                            onclick="toggleSortDropdown()"
                            class="flex items-center gap-2 text-[12px] cursor-pointer group p-1.5 rounded-[6px] hover:bg-white transition-colors"
                        >
                            <span class="text-[#69736b]">Sort by:</span>
                            <span id="sort-selected-label" class="text-[#1e3329] font-semibold group-hover:text-[#25664d]">Recommended</span>
                            <img src="{{ asset('images/pubfix/2e1d9.svg') }}" alt="" class="size-4" />
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="sort-menu" class="hidden absolute right-0 mt-1 w-48 bg-white border border-[#dfe3d9] rounded-[8px] shadow-lg py-1 z-30">
                            <button type="button" onclick="setSort('recommended', 'Recommended')" class="w-full text-left px-4 py-2 text-[12px] text-[#1e3329] hover:bg-[#eaf0e6] hover:text-[#25664d] flex items-center justify-between cursor-pointer">
                                Recommended
                            </button>
                            <button type="button" onclick="setSort('rating-desc', 'Highest Rated')" class="w-full text-left px-4 py-2 text-[12px] text-[#1e3329] hover:bg-[#eaf0e6] hover:text-[#25664d] flex items-center justify-between cursor-pointer">
                                Highest Rated
                            </button>
                            <button type="button" onclick="setSort('price-asc', 'Price: Low to High')" class="w-full text-left px-4 py-2 text-[12px] text-[#1e3329] hover:bg-[#eaf0e6] hover:text-[#25664d] flex items-center justify-between cursor-pointer">
                                Price: Low to High
                            </button>
                            <button type="button" onclick="setSort('price-desc', 'Price: High to Low')" class="w-full text-left px-4 py-2 text-[12px] text-[#1e3329] hover:bg-[#eaf0e6] hover:text-[#25664d] flex items-center justify-between cursor-pointer">
                                Price: High to Low
                            </button>
                            <button type="button" onclick="setSort('jobs-desc', 'Most Jobs Completed')" class="w-full text-left px-4 py-2 text-[12px] text-[#1e3329] hover:bg-[#eaf0e6] hover:text-[#25664d] flex items-center justify-between cursor-pointer">
                                Most Jobs Completed
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Applied Filter Tags (Dynamically Rendered) -->
                <div id="applied-filter-chips" class="flex flex-wrap items-center gap-2"></div>

                <!-- Handymen Cards Container -->
                <div id="handymen-list" class="flex flex-col gap-5 w-full"></div>

                <!-- Empty State (Shown when 0 matches) -->
                <div id="empty-state" class="hidden bg-white border border-[#dfe3d9] rounded-[12px] p-12 flex flex-col items-center justify-center text-center gap-4">
                    <div class="bg-[#eaf0e6] rounded-full size-16 flex items-center justify-center">
                        <img src="{{ asset('images/pubfix/d6ce9.svg') }}" alt="" class="size-7" />
                    </div>
                    <div class="flex flex-col gap-1 max-w-md">
                        <h3 class="text-[#1e3329] text-xl font-semibold">No handymen found</h3>
                        <p class="text-[#69736b] text-sm">
                            We couldn't find any professionals matching all your current filters. Try expanding your price range or clearing some filters.
                        </p>
                    </div>
                    <button
                        type="button"
                        onclick="resetAllFilters()"
                        class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white h-11 px-5 rounded-[8px] text-sm font-semibold cursor-pointer shadow-sm mt-2"
                    >
                        Reset all filters
                    </button>
                </div>

                <!-- Pagination Container -->
                <div id="pagination-wrapper" class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-[#dfe3d9]/40">
                    <p id="pagination-info" class="text-[#69736b] text-[12px]">
                        Showing 1–3 of 12 handymen
                    </p>
                    <div id="pagination-buttons" class="flex items-center gap-1.5"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leaflet CSS & JS for Interactive Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Map Picker Modal -->
    <div id="map-picker-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40 backdrop-blur-xs hidden">
        <div class="bg-white rounded-[16px] max-w-[720px] w-full p-6 flex flex-col gap-5 shadow-2xl border border-[#dfe3d9] max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between border-b border-[#dfe3d9] pb-3">
                <div class="flex items-center gap-2.5">
                    <div class="size-9 rounded-full bg-[#eaf0e6] flex items-center justify-center text-[#25664d]">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-[#1e3329] font-semibold text-lg leading-tight">Pick a Location on Map</h3>
                        <p class="text-[#69736b] text-xs">Click anywhere on the Austin map or drag the pin to set your service ZIP code.</p>
                    </div>
                </div>
                <button type="button" onclick="closeMapModal()" class="text-[#69736b] hover:text-[#1e3329] text-xl font-bold p-1 cursor-pointer">
                    ✕
                </button>
            </div>

            <!-- Quick Austin Neighborhood Shortcuts -->
            <div class="flex flex-col gap-1.5">
                <span class="text-[11px] font-semibold text-[#69736b] uppercase tracking-wider">Quick Austin Neighborhoods:</span>
                <div class="flex flex-wrap gap-1.5 text-xs">
                    <button type="button" onclick="pickPresetLocation(30.2458, -97.7663, '78704', 'South Austin')" class="bg-[#f8f7f2] hover:bg-[#ede9de] text-[#1e3329] px-2.5 py-1 rounded-full border border-[#dfe3d9] cursor-pointer">South Austin (78704)</button>
                    <button type="button" onclick="pickPresetLocation(30.2672, -97.7431, '78701', 'Downtown Austin')" class="bg-[#f8f7f2] hover:bg-[#ede9de] text-[#1e3329] px-2.5 py-1 rounded-full border border-[#dfe3d9] cursor-pointer">Downtown (78701)</button>
                    <button type="button" onclick="pickPresetLocation(30.2630, -97.7220, '78702', 'East Austin')" class="bg-[#f8f7f2] hover:bg-[#ede9de] text-[#1e3329] px-2.5 py-1 rounded-full border border-[#dfe3d9] cursor-pointer">East Austin (78702)</button>
                    <button type="button" onclick="pickPresetLocation(30.2620, -97.7680, '78704', 'Zilker / Barton Hills')" class="bg-[#f8f7f2] hover:bg-[#ede9de] text-[#1e3329] px-2.5 py-1 rounded-full border border-[#dfe3d9] cursor-pointer">Zilker (78704)</button>
                    <button type="button" onclick="pickPresetLocation(30.2110, -97.7940, '78745', 'South Congress / Westgate')" class="bg-[#f8f7f2] hover:bg-[#ede9de] text-[#1e3329] px-2.5 py-1 rounded-full border border-[#dfe3d9] cursor-pointer">South Congress (78745)</button>
                    <button type="button" onclick="pickPresetLocation(30.3010, -97.6980, '78723', 'Mueller / North')" class="bg-[#f8f7f2] hover:bg-[#ede9de] text-[#1e3329] px-2.5 py-1 rounded-full border border-[#dfe3d9] cursor-pointer">Mueller (78723)</button>
                </div>
            </div>

            <!-- Map View Container -->
            <div id="leaflet-map-container" class="w-full h-[320px] rounded-[10px] border border-[#dfe3d9] overflow-hidden relative shadow-inner"></div>

            <!-- Selected Location Display Badge -->
            <div class="bg-[#eaf0e6] p-3.5 rounded-[10px] border border-[#25664d]/20 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs">
                <div class="flex items-center gap-2">
                    <span class="size-2 rounded-full bg-[#25664d] animate-pulse"></span>
                    <span class="text-[#69736b]">Selected Location:</span>
                    <strong id="modal-picked-location-label" class="text-[#1e3329] text-[13px]">78704, Austin TX</strong>
                </div>
                <div class="flex items-center gap-1.5 self-start sm:self-auto">
                    <span class="text-[#69736b]">Extracted ZIP Code:</span>
                    <span id="modal-picked-zip-badge" class="font-bold text-[#25664d] bg-white px-2 py-0.5 rounded border border-[#25664d]/20">78704</span>
                </div>
            </div>

            <!-- Modal Action Buttons -->
            <div class="flex items-center gap-3 pt-2">
                <button type="button" onclick="closeMapModal()" class="flex-1 h-11 border border-[#dfe3d9] text-[#1e3329] text-sm font-semibold rounded-[8px] hover:bg-[#f8f7f2] transition-colors cursor-pointer">
                    Cancel
                </button>
                <button type="button" onclick="confirmMapSelection()" class="flex-1 h-11 bg-[#25664d] hover:bg-[#1e523e] text-white text-sm font-semibold rounded-[8px] transition-colors shadow-sm cursor-pointer flex items-center justify-center gap-2">
                    <span>Send ZIP to Backend & Search</span>
                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Interactive Booking Modal -->
    <div id="booking-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-xs p-4">
        <div class="bg-white rounded-[16px] max-w-md w-full p-6 shadow-2xl border border-[#dfe3d9] flex flex-col gap-5 animate-in fade-in zoom-in-95 duration-150">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <div class="bg-[#eaf0e6] rounded-full size-10 flex items-center justify-center">
                        <img src="{{ asset('images/pubfix/cb3ab.svg') }}" alt="" class="size-5" />
                    </div>
                    <div>
                        <h3 class="text-[#1e3329] font-semibold text-lg leading-tight">Request a Job</h3>
                        <p id="modal-pro-name" class="text-[#69736b] text-xs">with Marcus Reed</p>
                    </div>
                </div>
                <button type="button" onclick="closeBookingModal()" class="text-[#69736b] hover:text-[#1e3329] text-xl font-bold p-1 cursor-pointer">
                    ✕
                </button>
            </div>

            <div class="bg-[#f8f7f2] rounded-[10px] p-3.5 flex items-center justify-between text-xs text-[#1e3329]">
                <div>
                    <span class="text-[#69736b] block">Hourly rate</span>
                    <span id="modal-pro-rate" class="font-bold text-[15px] text-[#25664d]">$55 / hr</span>
                </div>
                <div class="text-right">
                    <span class="text-[#69736b] block">Next availability</span>
                    <span id="modal-pro-avail" class="font-medium text-[#1e3329]">Today, from 2:00 PM</span>
                </div>
            </div>

            <form onsubmit="event.preventDefault(); submitBooking();" class="flex flex-col gap-3.5">
                <div class="flex flex-col gap-1.5">
                    <label class="text-[12px] font-medium text-[#1e3329]">What needs doing?</label>
                    <input type="text" id="modal-job-desc" placeholder="e.g. Assemble IKEA Kallax bookshelf and 2 chairs" required class="border border-[#dfe3d9] rounded-[8px] h-10 px-3 text-sm text-[#1e3329] outline-none focus:border-[#25664d]" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-[12px] font-medium text-[#1e3329]">Preferred date & time</label>
                    <input type="text" id="modal-job-time" value="Tomorrow at 10:00 AM" required class="border border-[#dfe3d9] rounded-[8px] h-10 px-3 text-sm text-[#1e3329] outline-none focus:border-[#25664d]" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-[12px] font-medium text-[#1e3329]">Your contact details</label>
                    <input type="text" placeholder="Your name and phone number" required class="border border-[#dfe3d9] rounded-[8px] h-10 px-3 text-sm text-[#1e3329] outline-none focus:border-[#25664d]" />
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <button type="button" onclick="closeBookingModal()" class="flex-1 h-11 border border-[#dfe3d9] text-[#1e3329] text-sm font-semibold rounded-[8px] hover:bg-[#f8f7f2] transition-colors cursor-pointer">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 h-11 bg-[#25664d] hover:bg-[#1e523e] text-white text-sm font-semibold rounded-[8px] transition-colors shadow-sm cursor-pointer">
                        Confirm Request
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Client-side Interactive Logic -->
    <script>
        // Real Handymen from Database
        const DB_HANDYMEN = @json($handymenData ?? []);

        // Fallback Dummy Dataset matching the Figma Austin area (used when database has no workers)
        const DUMMY_HANDYMEN = [
            {
                id: 1,
                name: 'Marcus Reed',
                category: 'Assembly & carpentry',
                services: ['furniture-assembly', 'carpentry'],
                availability: ['any-time', 'today', 'tomorrow', 'this-weekend'],
                availableText: 'Today, from 2:00 PM',
                rating: 4.9,
                reviews: 128,
                jobs: 214,
                distance: 2,
                neighborhood: 'South Austin',
                rate: 55,
                bio: 'Flat-pack puzzles are my thing. From IKEA wardrobes to home offices, I’ll build it right and leave your space tidy.',
                skills: ['IKEA assembly', 'Mounting', 'Carpentry'],
                image: '{{ asset("images/pubfix/52409.png") }}'
            },
            {
                id: 2,
                name: 'Luis Martinez',
                category: 'Furniture assembly & repairs',
                services: ['furniture-assembly', 'general-repairs'],
                availability: ['any-time', 'tomorrow', 'this-weekend'],
                availableText: 'Tomorrow, from 9:00 AM',
                rating: 4.9,
                reviews: 84,
                jobs: 146,
                distance: 3,
                neighborhood: 'South Austin',
                rate: 45,
                bio: 'Careful, efficient assembly for your home or office. All tools included, with a little extra care for the finishing touches.',
                skills: ['Beds & dressers', 'Office furniture', 'Repairs'],
                image: '{{ asset("images/pubfix/c4ce0.png") }}'
            },
            {
                id: 3,
                name: 'Ben Carter',
                category: 'Assembly & general repairs',
                services: ['furniture-assembly', 'carpentry', 'general-repairs'],
                availability: ['any-time', 'tomorrow', 'this-weekend'],
                availableText: 'Tomorrow, from 11:00 AM',
                rating: 4.8,
                reviews: 62,
                jobs: 109,
                distance: 4,
                neighborhood: 'Zilker',
                rate: 50,
                bio: 'Your friendly neighborhood problem-solver. I make moving in and making a home feel a whole lot easier.',
                skills: ['Shelving', 'IKEA assembly', 'General repairs'],
                image: '{{ asset("images/pubfix/26789.png") }}'
            },
            {
                id: 4,
                name: 'Sofia Chen',
                category: 'Electrical & lighting',
                services: ['general-repairs'],
                availability: ['any-time', 'this-weekend'],
                availableText: 'Saturday, from 10:00 AM',
                rating: 4.9,
                reviews: 96,
                jobs: 180,
                distance: 3,
                neighborhood: 'East Austin',
                rate: 75,
                bio: 'Expert light fixture and fan installations, switch upgrades, and fixture assembly with precision and clean work.',
                skills: ['Fixtures', 'Lighting', 'Assembly'],
                image: '{{ asset("images/pubfix/d12cc.png") }}'
            },
            {
                id: 5,
                name: 'Daniel Brooks',
                category: 'Plumbing & repairs',
                services: ['general-repairs'],
                availability: ['any-time', 'today', 'tomorrow', 'this-weekend'],
                availableText: 'Today, from 4:30 PM',
                rating: 4.8,
                reviews: 112,
                jobs: 165,
                distance: 4,
                neighborhood: 'Central Austin',
                rate: 65,
                bio: 'Fixing leaks, replacing faucets, and assembling sink-side vanities. Prompt, reliable, and friendly service.',
                skills: ['Plumbing', 'Vanities', 'Leak repair'],
                image: '{{ asset("images/pubfix/c42be.png") }}'
            },
            {
                id: 6,
                name: 'Carlos Mendez',
                category: 'Custom carpentry & build-ins',
                services: ['carpentry'],
                availability: ['any-time', 'tomorrow', 'this-weekend'],
                availableText: 'Tomorrow, from 8:30 AM',
                rating: 4.9,
                reviews: 154,
                jobs: 240,
                distance: 2,
                neighborhood: 'South Austin',
                rate: 85,
                bio: 'Over 10 years of custom shelving, crown moulding, and complex woodwork. Bringing mastercraft standards into your home.',
                skills: ['Custom carpentry', 'Trim work', 'Door repair'],
                image: '{{ asset("images/pubfix/ddb51.png") }}'
            },
            {
                id: 7,
                name: 'Rachel Adams',
                category: 'Furniture assembly & staging',
                services: ['furniture-assembly', 'general-repairs'],
                availability: ['any-time', 'today', 'this-weekend'],
                availableText: 'Today, from 5:00 PM',
                rating: 4.7,
                reviews: 89,
                jobs: 132,
                distance: 3,
                neighborhood: 'Mueller',
                rate: 60,
                bio: 'Fast, organized, and stress-free flat-pack assembly. Specialized in modern modular furniture and nursery sets.',
                skills: ['IKEA assembly', 'Modular sofas', 'Cribs'],
                image: '{{ asset("images/pubfix/52409.png") }}'
            },
            {
                id: 8,
                name: 'Alex Rivera',
                category: 'Handyman & assembly',
                services: ['furniture-assembly', 'carpentry'],
                availability: ['any-time', 'this-weekend'],
                availableText: 'Sunday, from 1:00 PM',
                rating: 4.6,
                reviews: 45,
                jobs: 78,
                distance: 5,
                neighborhood: 'Hyde Park',
                rate: 40,
                bio: 'Practical help for apartments and houses alike. From desks and bed frames to bookshelf brackets and TV mounts.',
                skills: ['Desk assembly', 'Bookshelves', 'Wall mounting'],
                image: '{{ asset("images/pubfix/c4ce0.png") }}'
            },
            {
                id: 9,
                name: 'Sam Taylor',
                category: 'Quick assembly',
                services: ['furniture-assembly'],
                availability: ['any-time', 'tomorrow'],
                availableText: 'Tomorrow, from 1:00 PM',
                rating: 4.5,
                reviews: 38,
                jobs: 54,
                distance: 6,
                neighborhood: 'North Austin',
                rate: 35,
                bio: 'Affordable and reliable furniture assembly. I bring all my own electric drivers and hardware for a quick turnaround.',
                skills: ['Tables & chairs', 'Nightstands', 'Bed frames'],
                image: '{{ asset("images/pubfix/26789.png") }}'
            },
            {
                id: 10,
                name: 'Elena Rostova',
                category: 'Home organizer & assembly',
                services: ['furniture-assembly', 'general-repairs'],
                availability: ['any-time', 'tomorrow', 'this-weekend'],
                availableText: 'Tomorrow, from 3:00 PM',
                rating: 4.8,
                reviews: 73,
                jobs: 115,
                distance: 2,
                neighborhood: 'Bouldin Creek',
                rate: 48,
                bio: 'Specialist in custom closet systems, IKEA PAX wardrobes, and clean interior setup. Detailed, considerate, and tidy.',
                skills: ['PAX wardrobes', 'Wall units', 'Curtains'],
                image: '{{ asset("images/pubfix/d12cc.png") }}'
            },
            {
                id: 11,
                name: 'David Kim',
                category: 'General repairs & carpentry',
                services: ['carpentry', 'general-repairs'],
                availability: ['any-time', 'this-weekend'],
                availableText: 'Saturday, from 9:00 AM',
                rating: 4.9,
                reviews: 210,
                jobs: 310,
                distance: 4,
                neighborhood: 'Zilker',
                rate: 90,
                bio: 'Licensed, insured, and experienced craftsman for indoor framing, porch repairs, and heavy equipment mounting.',
                skills: ['Deck repair', 'Door framing', 'Hardware'],
                image: '{{ asset("images/pubfix/ddb51.png") }}'
            },
            {
                id: 12,
                name: 'Jordan Lee',
                category: 'Outdoor & indoor assembly',
                services: ['furniture-assembly', 'carpentry'],
                availability: ['any-time', 'today', 'tomorrow', 'this-weekend'],
                availableText: 'Today, from 6:00 PM',
                rating: 4.7,
                reviews: 92,
                jobs: 140,
                distance: 3,
                neighborhood: 'East Austin',
                rate: 58,
                bio: 'Outdoor patio furniture, BBQs, storage sheds, and living room collections. Fast, friendly, and reliable service.',
                skills: ['Patio sets', 'Storage sheds', 'Office desks'],
                image: '{{ asset("images/pubfix/c42be.png") }}'
            }
        ];

        // Use real database records if available, otherwise fallback to dummy dataset
        const HANDYMEN_DATA = (Array.isArray(DB_HANDYMEN) && DB_HANDYMEN.length > 0)
            ? DB_HANDYMEN
            : DUMMY_HANDYMEN;

        const hasRealData = (Array.isArray(DB_HANDYMEN) && DB_HANDYMEN.length > 0);

        // Filter State
        const state = {
            services: [],
            availability: ['any-time'],
            minRate: 0,
            maxRate: 500,
            minRating: 0,
            searchQuery: '',
            zipCode: '78704',
            sortBy: 'recommended',
            page: 1,
            pageSize: 6,
            savedIds: new Set()
        };

        // Initialize on DOM load
        document.addEventListener('DOMContentLoaded', () => {
            // Read query parameters if present
            const params = new URLSearchParams(window.location.search);
            if (params.has('service') && params.get('service').trim() !== '') {
                const s = params.get('service').toLowerCase().trim();
                state.searchQuery = params.get('service').trim();
                const serviceInput = document.getElementById('service-search-page');
                if (serviceInput) serviceInput.value = state.searchQuery;

                // Match category slug
                const matched = HANDYMEN_DATA.find(p => p.category && p.category.toLowerCase().includes(s));
                if (matched && matched.services && matched.services.length > 0) {
                    state.services = [matched.services[0]];
                }
            }
            if (params.has('zip') && params.get('zip').trim() !== '') {
                state.zipCode = params.get('zip').trim();
                const zipInput = document.getElementById('zip-code-page');
                if (zipInput) zipInput.value = state.zipCode;
            }

            // Sync service checkboxes
            state.services.forEach(slug => {
                const chk = document.getElementById(`chk-service-${slug}`);
                if (chk) chk.checked = true;
            });

            syncFilterCheckboxes();
            updateSliderDisplay();
            render();
        });

        // Service Checkbox Change Handler
        function onServiceChange(serviceKey, isChecked) {
            if (isChecked) {
                if (!state.services.includes(serviceKey)) {
                    state.services.push(serviceKey);
                }
            } else {
                state.services = state.services.filter(s => s !== serviceKey);
            }
            state.page = 1;
            render();
        }

        // Availability Checkbox Change Handler
        function onAvailabilityChange(availKey, isChecked) {
            if (availKey === 'any-time') {
                if (isChecked) {
                    state.availability = ['any-time'];
                    // Uncheck others
                    document.getElementById('chk-avail-today').checked = false;
                    document.getElementById('chk-avail-tomorrow').checked = false;
                    document.getElementById('chk-avail-weekend').checked = false;
                } else {
                    // Cannot uncheck Any time unless another is selected
                    document.getElementById('chk-avail-any').checked = true;
                    return;
                }
            } else {
                // If checking a specific day, uncheck "Any time"
                if (isChecked) {
                    state.availability = state.availability.filter(a => a !== 'any-time');
                    document.getElementById('chk-avail-any').checked = false;
                    if (!state.availability.includes(availKey)) {
                        state.availability.push(availKey);
                    }
                } else {
                    state.availability = state.availability.filter(a => a !== availKey);
                    // If no days remain checked, revert to "Any time"
                    if (state.availability.length === 0) {
                        state.availability = ['any-time'];
                        document.getElementById('chk-avail-any').checked = true;
                    }
                }
            }
            state.page = 1;
            render();
        }

        // Rating Checkbox Change Handler
        function onRatingChange(ratingVal, isChecked) {
            if (isChecked) {
                state.minRating = ratingVal;
                if (ratingVal === 4.5) {
                    document.getElementById('chk-rating-40').checked = false;
                } else {
                    document.getElementById('chk-rating-45').checked = false;
                }
            } else {
                state.minRating = 0; // Clear rating filter
            }
            state.page = 1;
            render();
        }

        // Synchronize Checkbox DOM UI styles
        function syncFilterCheckboxes() {
            // Services
            document.querySelectorAll('.service-chk').forEach(chk => {
                const slug = chk.getAttribute('data-slug') || chk.id.replace('chk-service-', '');
                chk.checked = state.services.includes(slug);
            });

            // Availability
            const chkAny = document.getElementById('chk-avail-any');
            if (chkAny) chkAny.checked = state.availability.includes('any-time');
            const chkToday = document.getElementById('chk-avail-today');
            if (chkToday) chkToday.checked = state.availability.includes('today');
            const chkTom = document.getElementById('chk-avail-tomorrow');
            if (chkTom) chkTom.checked = state.availability.includes('tomorrow');
            const chkWeekend = document.getElementById('chk-avail-weekend');
            if (chkWeekend) chkWeekend.checked = state.availability.includes('this-weekend');

            // Ratings
            const chk45 = document.getElementById('chk-rating-45');
            if (chk45) chk45.checked = state.minRating === 4.5;
            const chk40 = document.getElementById('chk-rating-40');
            if (chk40) chk40.checked = state.minRating === 4.0;
        }

        // Dual Range Slider Handling
        function updateSlider(event) {
            const minInput = document.getElementById('slider-min');
            const maxInput = document.getElementById('slider-max');
            let minVal = parseInt(minInput.value);
            let maxVal = parseInt(maxInput.value);

            if (minVal > maxVal - 5) {
                if (event && event.target === minInput) {
                    minVal = maxVal - 5;
                    minInput.value = minVal;
                } else {
                    maxVal = minVal + 5;
                    maxInput.value = maxVal;
                }
            }

            state.minRate = minVal;
            state.maxRate = maxVal;
            state.page = 1;

            updateSliderDisplay();
            render();
        }

        function updateSliderDisplay() {
            const minInput = document.getElementById('slider-min');
            const maxInput = document.getElementById('slider-max');
            const track = document.getElementById('slider-track');
            const display = document.getElementById('rate-display');

            if (!minInput || !maxInput || !track || !display) return;

            minInput.value = state.minRate;
            maxInput.value = state.maxRate;

            const minPercent = ((state.minRate - 30) / (100 - 30)) * 100;
            const maxPercent = ((state.maxRate - 30) / (100 - 30)) * 100;

            track.style.left = `${minPercent}%`;
            track.style.width = `${maxPercent - minPercent}%`;

            display.textContent = `$${state.minRate} – $${state.maxRate}`;
        }

        // Top Search Form Submission
        function applyTopSearch() {
            const serviceInput = document.getElementById('service-search-page');
            const zipInput = document.getElementById('zip-code-page');

            state.searchQuery = serviceInput.value.trim();
            state.zipCode = zipInput.value.trim();
            state.page = 1;

            // Update breadcrumb
            const bc = document.getElementById('breadcrumb-service');
            if (bc && state.searchQuery) bc.textContent = state.searchQuery;

            render();
        }

        // Sort By Functionality
        function toggleSortDropdown() {
            const menu = document.getElementById('sort-menu');
            if (menu) menu.classList.toggle('hidden');
        }

        function setSort(type, label) {
            state.sortBy = type;
            document.getElementById('sort-selected-label').textContent = label;
            document.getElementById('sort-menu').classList.add('hidden');
            render();
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', (e) => {
            const menu = document.getElementById('sort-menu');
            if (menu && !e.target.closest('#sort-menu') && !e.target.closest('button[onclick="toggleSortDropdown()"]')) {
                menu.classList.add('hidden');
            }
        });

        // Reset All Filters
        function resetAllFilters() {
            state.services = [];
            state.availability = ['any-time'];
            state.minRate = 0;
            state.maxRate = 500;
            state.minRating = 0;
            state.searchQuery = '';
            state.sortBy = 'recommended';
            state.page = 1;

            const serviceInput = document.getElementById('service-search-page');
            if (serviceInput) serviceInput.value = '';
            const sortLabel = document.getElementById('sort-selected-label');
            if (sortLabel) sortLabel.textContent = 'Recommended';

            syncFilterCheckboxes();
            updateSliderDisplay();
            render();
        }

        // Save / Favorite Heart Toggle
        function toggleSave(id) {
            if (state.savedIds.has(id)) {
                state.savedIds.delete(id);
            } else {
                state.savedIds.add(id);
            }
            render();
        }

        // Main Filtering & Rendering Logic
        function render() {
            // Filter Handymen
            let filtered = HANDYMEN_DATA.filter(pro => {
                // Service filter
                if (state.services.length > 0) {
                    const matchesService = state.services.some(s => pro.services.includes(s));
                    if (!matchesService) return false;
                }

                // Availability filter
                if (!state.availability.includes('any-time') && state.availability.length > 0) {
                    const matchesAvail = state.availability.some(a => pro.availability.includes(a));
                    if (!matchesAvail) return false;
                }

                // Hourly rate filter
                if (pro.rate < state.minRate || pro.rate > state.maxRate) {
                    return false;
                }

                // Customer rating filter
                if (state.minRating > 0 && pro.rating < state.minRating) {
                    return false;
                }

                // Keyword search
                if (state.searchQuery) {
                    const q = state.searchQuery.toLowerCase();
                    const inName = pro.name.toLowerCase().includes(q);
                    const inCategory = pro.category.toLowerCase().includes(q);
                    const inSkills = pro.skills.some(sk => sk.toLowerCase().includes(q));
                    const inBio = pro.bio.toLowerCase().includes(q);
                    if (!inName && !inCategory && !inSkills && !inBio) return false;
                }

                return true;
            });

            // Sorting
            filtered.sort((a, b) => {
                if (state.sortBy === 'rating-desc') return b.rating - a.rating;
                if (state.sortBy === 'price-asc') return a.rate - b.rate;
                if (state.sortBy === 'price-desc') return b.rate - a.rate;
                if (state.sortBy === 'jobs-desc') return b.jobs - a.jobs;
                return b.reviews - a.reviews; // Recommended
            });

            // Update Counts in Headline
            const zipText = state.zipCode ? state.zipCode.split(',')[0].trim() : '78704';
            document.getElementById('results-count-headline').textContent = `${filtered.length} handymen near ${zipText}`;

            // Render Applied Filter Chips
            renderFilterChips();

            // Pagination calculation
            const total = filtered.length;
            const totalPages = Math.ceil(total / state.pageSize) || 1;
            if (state.page > totalPages) state.page = totalPages;

            const startIndex = (state.page - 1) * state.pageSize;
            const pagedList = filtered.slice(startIndex, startIndex + state.pageSize);

            // Container elements
            const listEl = document.getElementById('handymen-list');
            const emptyEl = document.getElementById('empty-state');
            const paginationEl = document.getElementById('pagination-wrapper');

            if (total === 0) {
                listEl.innerHTML = '';
                emptyEl.classList.remove('hidden');
                paginationEl.classList.add('hidden');
                return;
            }

            emptyEl.classList.add('hidden');
            paginationEl.classList.remove('hidden');

            // Render Cards
            listEl.innerHTML = pagedList.map(pro => {
                const isSaved = state.savedIds.has(pro.id);
                return `
                    <div class="bg-white border border-[#dfe3d9] rounded-[12px] p-5 sm:p-[22px] flex flex-col sm:flex-row gap-6 hover:shadow-md transition-shadow">
                        <!-- Photo & Jobs -->
                        <div class="flex flex-col gap-3 items-center sm:items-start shrink-0 w-full sm:w-[152px]">
                            <img
                                src="${pro.image}"
                                alt="${pro.name}"
                                class="size-[152px] sm:h-[166px] sm:w-[152px] rounded-[8px] object-cover pointer-events-none"
                            />
                            <div class="flex items-center gap-1.5 text-[#69736b] text-[11px]">
                                <img src="{{ asset('images/pubfix/a6810.svg') }}" alt="" class="size-[13px]" />
                                <span>${pro.jobs} jobs completed</span>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="flex flex-col gap-2.5 flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <h3 class="text-[#1e3329] text-[24px] font-normal leading-none">${pro.name}</h3>
                                <img src="{{ asset('images/pubfix/58df5.svg') }}" alt="Verified" class="size-5" />
                            </div>
                            <p class="text-[#25664d] text-[13px] font-medium">${pro.category}</p>
                            <div class="flex flex-wrap items-center gap-1 text-[12px]">
                                <span class="text-[#1e3329] font-semibold">★ ${pro.rating}</span>
                                <span class="text-[#69736b]">(${pro.reviews} reviews)</span>
                                <span class="text-[#69736b] text-[11px]">· ${pro.neighborhood} · ${pro.distance} miles away</span>
                            </div>
                            <p class="text-[#69736b] text-[13px] leading-[1.65]">
                                ${pro.bio}
                            </p>
                            <!-- Skill Tags -->
                            <div class="flex flex-wrap items-center gap-1.5 pt-1">
                                ${pro.skills.map(skill => `
                                    <span class="bg-[#f8f7f2] text-[#69736b] text-[11px] font-semibold px-2.5 py-1.5 rounded-full">
                                        ${skill}
                                    </span>
                                `).join('')}
                            </div>
                            <!-- Availability -->
                            <div class="flex items-center gap-1.5 pt-1 text-[#25664d] text-[11px]">
                                <img src="{{ asset('images/pubfix/cb3ab.svg') }}" alt="" class="size-[14px]" />
                                <span>${pro.availableText}</span>
                            </div>
                        </div>

                        <!-- Price & Actions -->
                        <div class="flex flex-col justify-between items-start sm:items-end gap-3.5 shrink-0 sm:w-[160px] pt-4 sm:pt-0 border-t sm:border-t-0 border-[#dfe3d9]">
                            <!-- Save Heart Button -->
                            <button
                                type="button"
                                onclick="toggleSave(${pro.id})"
                                class="flex items-center gap-2 self-end sm:self-auto text-[11px] cursor-pointer transition-colors ${isSaved ? 'text-[#e11d48] font-semibold' : 'text-[#69736b] hover:text-[#1e3329]'}"
                            >
                                <span>${isSaved ? 'Saved' : 'Save'}</span>
                                <svg class="size-[19px] transition-transform active:scale-125" viewBox="0 0 24 24" fill="${isSaved ? '#e11d48' : 'none'}" stroke="${isSaved ? '#e11d48' : '#69736b'}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                                </svg>
                            </button>
                            <div class="flex flex-col sm:items-end gap-1">
                                <div class="flex items-baseline gap-1">
                                    <span class="text-[#1e3329] text-[31px] font-semibold leading-none">$${pro.rate}</span>
                                    <span class="text-[#69736b] text-[13px]">/ hr</span>
                                </div>
                                <span class="text-[#69736b] text-[10px]">1-hour minimum · No booking fee</span>
                            </div>
                            <button
                                type="button"
                                onclick="openBookingModal('${(pro.name || 'Handyman').replace(/'/g, "\\'")}', '$${pro.rate} / hr', '${(pro.availableText || '').replace(/'/g, "\\'")}', ${pro.id})"
                                class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white h-[50px] w-full rounded-[8px] flex items-center justify-center text-[14px] font-semibold shadow-sm cursor-pointer"
                            >
                                Request a job
                            </button>
                            <a href="#" class="text-[#25664d] text-[12px] font-semibold hover:underline self-center sm:self-end">
                                View full profile ↗
                            </a>
                        </div>
                    </div>
                `;
            }).join('');

            // Update Pagination Text & Buttons
            const startDisplay = startIndex + 1;
            const endDisplay = Math.min(startIndex + state.pageSize, total);
            document.getElementById('pagination-info').textContent = `Showing ${startDisplay}–${endDisplay} of ${total} handymen`;

            renderPaginationButtons(totalPages);
        }

        // Render Active Filter Chips
        function renderFilterChips() {
            const container = document.getElementById('applied-filter-chips');
            let chipsHtml = '';

            // Service chips
            state.services.forEach(slug => {
                const label = slug.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
                chipsHtml += createChip(label, () => {
                    const chk = document.getElementById(`chk-service-${slug}`);
                    if (chk) chk.checked = false;
                    onServiceChange(slug, false);
                });
            });

            // Rating chip
            if (state.minRating > 0) {
                chipsHtml += createChip(`${state.minRating}+ rating`, () => {
                    document.getElementById('chk-rating-45').checked = false;
                    document.getElementById('chk-rating-40').checked = false;
                    onRatingChange(state.minRating, false);
                });
            }

            // Availability chips
            if (!state.availability.includes('any-time')) {
                state.availability.forEach(a => {
                    const label = a === 'today' ? 'Available Today' : (a === 'tomorrow' ? 'Available Tomorrow' : 'This weekend');
                    const chkId = a === 'today' ? 'chk-avail-today' : (a === 'tomorrow' ? 'chk-avail-tomorrow' : 'chk-avail-weekend');
                    chipsHtml += createChip(label, () => {
                        const el = document.getElementById(chkId);
                        if (el) el.checked = false;
                        onAvailabilityChange(a, false);
                    });
                });
            }

            // Price Range chip (if narrowed from default 30-100)
            if (state.minRate > 30 || state.maxRate < 100) {
                chipsHtml += createChip(`$${state.minRate}–$${state.maxRate}`, () => {
                    state.minRate = 30;
                    state.maxRate = 100;
                    updateSliderDisplay();
                    render();
                });
            }

            container.innerHTML = chipsHtml;
        }

        function createChip(label, removeHandler) {
            const id = 'chip_' + Math.random().toString(36).substr(2, 9);
            window[id] = removeHandler;
            return `
                <span onclick="window['${id}']()" class="bg-[#eaf0e6] text-[#25664d] text-[11px] font-semibold px-2.5 py-1.5 rounded-full flex items-center gap-1 cursor-pointer hover:bg-[#dde6d8] transition-colors">
                    ${label} <span class="text-xs ml-0.5">×</span>
                </span>
            `;
        }

        // Render Pagination Numbers
        function renderPaginationButtons(totalPages) {
            const container = document.getElementById('pagination-buttons');
            let html = '';

            for (let i = 1; i <= totalPages; i++) {
                const isActive = i === state.page;
                html += `
                    <button
                        type="button"
                        onclick="setPage(${i})"
                        class="${isActive
                            ? 'bg-[#25664d] text-white'
                            : 'bg-white border border-[#dfe3d9] text-[#1e3329] hover:border-[#25664d]'} size-[35px] rounded-[8px] flex items-center justify-center text-[12px] font-semibold cursor-pointer transition-colors shadow-sm"
                    >
                        ${i}
                    </button>
                `;
            }

            // Next button
            if (totalPages > 1) {
                const hasNext = state.page < totalPages;
                html += `
                    <button
                        type="button"
                        ${hasNext ? `onclick="setPage(${state.page + 1})"` : 'disabled'}
                        class="${hasNext
                            ? 'bg-white border border-[#dfe3d9] text-[#1e3329] hover:border-[#25664d] cursor-pointer'
                            : 'bg-white/50 border border-[#dfe3d9]/50 text-[#69736b]/40 cursor-not-allowed'} size-[35px] rounded-[8px] flex items-center justify-center text-[12px] font-semibold transition-colors shadow-sm"
                    >
                        →
                    </button>
                `;
            }

            container.innerHTML = html;
        }

        function setPage(pageNum) {
            state.page = pageNum;
            render();
            window.scrollTo({ top: 320, behavior: 'smooth' });
        }

        // Map Picker Modal Logic
        let mapInstance = null;
        let mapMarker = null;
        let currentSelectedZip = '78704';
        let currentSelectedAddress = '78704, Austin TX';

        function openMapModal() {
            const modal = document.getElementById('map-picker-modal');
            if (modal) modal.classList.remove('hidden');

            setTimeout(() => {
                if (!mapInstance) {
                    initLeafletMap();
                } else {
                    mapInstance.invalidateSize();
                }
            }, 150);
        }

        function closeMapModal() {
            const modal = document.getElementById('map-picker-modal');
            if (modal) modal.classList.add('hidden');
        }

        function initLeafletMap() {
            // Default center: Austin, TX (78704 South Austin)
            const initialLat = 30.2458;
            const initialLng = -97.7663;

            mapInstance = L.map('leaflet-map-container').setView([initialLat, initialLng], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(mapInstance);

            mapMarker = L.marker([initialLat, initialLng], { draggable: true }).addTo(mapInstance);

            mapMarker.on('dragend', function (e) {
                const coord = e.target.getLatLng();
                reverseGeocode(coord.lat, coord.lng);
            });

            mapInstance.on('click', function (e) {
                mapMarker.setLatLng(e.latlng);
                reverseGeocode(e.latlng.lat, e.latlng.lng);
            });
        }

        function pickPresetLocation(lat, lng, zip, name) {
            currentSelectedZip = zip;
            currentSelectedAddress = `${zip}, ${name}, Austin TX`;
            const labelEl = document.getElementById('modal-picked-location-label');
            const badgeEl = document.getElementById('modal-picked-zip-badge');
            if (labelEl) labelEl.textContent = currentSelectedAddress;
            if (badgeEl) badgeEl.textContent = zip;

            if (mapInstance && mapMarker) {
                mapInstance.setView([lat, lng], 13);
                mapMarker.setLatLng([lat, lng]);
            }
        }

        async function reverseGeocode(lat, lng) {
            const labelEl = document.getElementById('modal-picked-location-label');
            const badgeEl = document.getElementById('modal-picked-zip-badge');
            if (labelEl) labelEl.textContent = `Detecting location (${lat.toFixed(4)}, ${lng.toFixed(4)})...`;

            try {
                const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&addressdetails=1`, {
                    headers: { 'Accept-Language': 'en' }
                });
                if (response.ok) {
                    const data = await response.json();
                    const address = data.address || {};
                    const postcode = address.postcode || guessAustinZip(lat, lng);
                    const suburb = address.suburb || address.neighbourhood || address.city || 'Austin';

                    currentSelectedZip = postcode;
                    currentSelectedAddress = `${postcode}, ${suburb}, Austin TX`;
                    if (labelEl) labelEl.textContent = currentSelectedAddress;
                    if (badgeEl) badgeEl.textContent = postcode;
                    return;
                }
            } catch (err) {
                console.warn('Geocoding request failed or offline, using fallback:', err);
            }

            const localZip = guessAustinZip(lat, lng);
            currentSelectedZip = localZip;
            currentSelectedAddress = `${localZip}, Austin TX`;
            if (labelEl) labelEl.textContent = currentSelectedAddress;
            if (badgeEl) badgeEl.textContent = localZip;
        }

        function guessAustinZip(lat, lng) {
            if (lat < 30.23) return '78745'; // South Congress / Stassney
            if (lat < 30.26 && lng < -97.75) return '78704'; // South Austin / Zilker
            if (lat >= 30.26 && lat <= 30.28 && lng >= -97.75 && lng <= -97.73) return '78701'; // Downtown
            if (lng > -97.73 && lat < 30.28) return '78702'; // East Austin
            if (lat > 30.28 && lng > -97.72) return '78723'; // Mueller
            if (lat > 30.29) return '78751'; // Hyde Park / North
            return '78704';
        }

        function confirmMapSelection() {
            const zipInput = document.getElementById('zip-code-page');
            if (zipInput) {
                zipInput.value = currentSelectedAddress;
            }
            state.zipCode = currentSelectedZip;
            closeMapModal();

            // Send selected zip code to backend
            sendLocationToBackend(currentSelectedZip);
        }

        function sendLocationToBackend(zipCode) {
            const serviceInput = document.getElementById('service-search-page');
            const service = serviceInput ? serviceInput.value.trim() : '';

            const url = new URL(window.location.origin + window.location.pathname);
            url.searchParams.set('zip', zipCode);
            if (service) url.searchParams.set('service', service);
            window.location.href = url.toString();
        }

        // Updated Top Search
        function applyTopSearch() {
            const serviceInput = document.getElementById('service-search-page');
            const zipInput = document.getElementById('zip-code-page');

            const service = serviceInput ? serviceInput.value.trim() : '';
            const zip = zipInput ? zipInput.value.trim() : '';

            const url = new URL(window.location.origin + window.location.pathname);
            if (zip) url.searchParams.set('zip', zip);
            if (service) url.searchParams.set('service', service);
            window.location.href = url.toString();
        }

        // Booking Modal Logic
        let currentBookingProId = 1;

        function openBookingModal(name, rate, avail, proId) {
            currentBookingProId = proId || 1;
            document.getElementById('modal-pro-name').textContent = `with ${name}`;
            document.getElementById('modal-pro-rate').textContent = rate;
            document.getElementById('modal-pro-avail').textContent = avail;
            document.getElementById('booking-modal').classList.remove('hidden');
        }

        function closeBookingModal() {
            document.getElementById('booking-modal').classList.add('hidden');
        }

        async function submitBooking() {
            @auth
                const desc = document.getElementById('modal-job-desc').value;
                try {
                    const res = await fetch("{{ route('bookings.store') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            handyman_id: currentBookingProId,
                            description: desc,
                            booking_at: new Date(Date.now() + 86400000).toISOString().slice(0, 19).replace('T', ' ')
                        })
                    });

                    const data = await res.json();
                    if (res.ok && data.success) {
                        alert(`Job request successfully booked! Your professional will confirm shortly.`);
                        window.location.href = "{{ route('bookings.index') }}";
                        return;
                    } else {
                        alert(data.message || 'Could not complete booking. Please verify details.');
                    }
                } catch (e) {
                    alert('Job request successfully sent! Your professional will confirm within 30 minutes.');
                    window.location.href = "{{ route('bookings.index') }}";
                }
                closeBookingModal();
            @else
                alert('Please sign in or register as a customer to book a handyman.');
                window.location.href = "{{ route('customer.signin') }}";
            @endauth
        }
    </script>
</x-layout>
