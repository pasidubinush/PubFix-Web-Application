<x-layout title="PubFix · My Customer Profile" :minimal-footer="true">
    <div class="py-10 px-6 sm:px-12 lg:px-20 max-w-[1000px] mx-auto flex flex-col gap-8">
        <!-- Breadcrumb & Header -->
        <div class="flex flex-col gap-2">
            <nav class="flex items-center gap-2 text-[12px] text-[#69736b]">
                <a href="{{ route('home') }}" class="hover:text-[#1e3329] transition-colors">Home</a>
                <span>/</span>
                <span class="text-[#1e3329] font-medium">Customer Profile</span>
            </nav>
            <h1 class="text-[#1e3329] text-3xl font-normal leading-tight">
                My Customer Account
            </h1>
            <p class="text-[#69736b] text-[14px]">
                Manage your contact details, service location ZIP code, and security preferences.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Summary Column -->
            <div class="flex flex-col gap-6">
                <div class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 flex flex-col items-center text-center gap-4 shadow-sm">
                    <div class="size-20 rounded-full bg-[#eaf0e6] border border-[#25664d]/20 flex items-center justify-center text-[#25664d] text-2xl font-semibold">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div class="flex flex-col gap-1">
                        <h2 class="text-[#1e3329] text-[18px] font-semibold">{{ $user->name }}</h2>
                        <span class="text-[#69736b] text-[13px]">{{ $user->email }}</span>
                        <span class="inline-block mt-2 bg-[#eaf0e6] text-[#25664d] text-[11px] font-semibold px-2.5 py-1 rounded-full self-center">
                            Verified Customer
                        </span>
                    </div>
                </div>

                <div class="bg-white border border-[#dfe3d9] rounded-[12px] p-5 flex flex-col gap-3 shadow-sm">
                    <h3 class="text-[#1e3329] text-[14px] font-semibold">Quick Actions</h3>
                    <a href="{{ route('bookings.index') }}" class="text-[#25664d] text-[13px] hover:underline flex items-center justify-between">
                        <span>View My Bookings</span>
                        <span class="bg-[#ede9de] text-[#1e3329] px-2 py-0.5 rounded-full text-[11px] font-medium">{{ $user->bookings_count }}</span>
                    </a>
                    <a href="{{ route('handymen.index') }}" class="text-[#25664d] text-[13px] hover:underline">
                        Find Local Handymen →
                    </a>
                </div>
            </div>

            <!-- Right Forms Column -->
            <div class="md:col-span-2 flex flex-col gap-8">
                <!-- Personal Information Form -->
                <div class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 sm:p-7 flex flex-col gap-5 shadow-sm">
                    <div class="flex flex-col gap-1 border-b border-[#dfe3d9] pb-4">
                        <h2 class="text-[#1e3329] text-[18px] font-semibold">Personal details</h2>
                        <p class="text-[#69736b] text-[13px]">Keep your name and location up to date for bookings.</p>
                    </div>

                    <form action="{{ route('customer.profile.update') }}" method="POST" class="flex flex-col gap-4">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col gap-1.5">
                            <label for="name" class="text-[#1e3329] text-[13px] font-medium">Full name</label>
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name', $user->name) }}"
                                required
                                class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                            />
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label for="email" class="text-[#1e3329] text-[13px] font-medium">Email address</label>
                            <input
                                id="email"
                                type="email"
                                value="{{ $user->email }}"
                                disabled
                                class="bg-[#fcfbf7] border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#69736b] outline-none cursor-not-allowed"
                            />
                            <span class="text-[#69736b] text-[11px]">Email cannot be changed directly. Contact support if needed.</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1.5">
                                <label for="zip_code" class="text-[#1e3329] text-[13px] font-medium">Default ZIP code</label>
                                <input
                                    id="zip_code"
                                    type="text"
                                    name="zip_code"
                                    value="{{ old('zip_code', $user->zip_code) }}"
                                    required
                                    class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                                />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label for="phone" class="text-[#1e3329] text-[13px] font-medium">Phone number</label>
                                <input
                                    id="phone"
                                    type="tel"
                                    name="phone"
                                    value="{{ old('phone', $user->phone) }}"
                                    class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                                />
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white rounded-[8px] h-[45px] px-6 text-[14px] font-semibold cursor-pointer shadow-sm self-start mt-2"
                        >
                            Save details
                        </button>
                    </form>
                </div>

                <!-- Change Password Form -->
                <div class="bg-white border border-[#dfe3d9] rounded-[12px] p-6 sm:p-7 flex flex-col gap-5 shadow-sm">
                    <div class="flex flex-col gap-1 border-b border-[#dfe3d9] pb-4">
                        <h2 class="text-[#1e3329] text-[18px] font-semibold">Change password</h2>
                        <p class="text-[#69736b] text-[13px]">Ensure your account remains safe with a strong password.</p>
                    </div>

                    <form action="{{ route('customer.profile.password') }}" method="POST" class="flex flex-col gap-4">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col gap-1.5">
                            <label for="current_password" class="text-[#1e3329] text-[13px] font-medium">Current password</label>
                            <input
                                id="current_password"
                                type="password"
                                name="current_password"
                                required
                                class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                            />
                            @error('current_password')
                                <span class="text-[#dc2626] text-[12px]">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1.5">
                                <label for="password" class="text-[#1e3329] text-[13px] font-medium">New password</label>
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required
                                    minlength="8"
                                    class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                                />
                                @error('password')
                                    <span class="text-[#dc2626] text-[12px]">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label for="password_confirmation" class="text-[#1e3329] text-[13px] font-medium">Confirm new password</label>
                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    minlength="8"
                                    class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                                />
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="bg-[#1e3329] hover:bg-[#13221b] transition-colors text-white rounded-[8px] h-[45px] px-6 text-[14px] font-semibold cursor-pointer shadow-sm self-start mt-2"
                        >
                            Update password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
