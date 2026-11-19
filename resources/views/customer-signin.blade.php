<x-layout title="PubFix · Customer sign-in" :minimal-footer="true">
    <div class="py-12 px-6 sm:px-12 flex items-center justify-center min-h-[calc(100vh-88px-75px)]">
        <div class="w-full max-w-[560px] mx-auto flex flex-col gap-6">
            <!-- Choose Your Role Switcher -->
            <div class="bg-[#ede9de] p-[5px] rounded-[12px] flex gap-[6px]">
                <div class="bg-white flex flex-1 h-[49px] items-center justify-center gap-2 rounded-[8px] text-[#25664d] text-[13px] font-normal shadow-sm">
                    <img src="{{ asset('images/pubfix/816bf.svg') }}" alt="" class="size-[18px]" />
                    <span>I need a hand</span>
                </div>
                <a href="#" class="bg-[#ede9de] hover:bg-[#e4dfd2] transition-colors flex flex-1 h-[49px] items-center justify-center gap-2 rounded-[8px] text-[#69736b] text-[13px] font-normal">
                    <img src="{{ asset('images/pubfix/b3a27.svg') }}" alt="" class="size-[18px]" />
                    <span>I’m a handyman</span>
                </a>
            </div>

            @if (session('success'))
                <div class="bg-[#e8f5e9] border border-[#25664d]/30 text-[#1e3329] px-4 py-3 rounded-[8px] text-[13px] flex items-center gap-2">
                    <img src="{{ asset('images/pubfix/14f9c.svg') }}" alt="" class="size-3.5 bg-[#25664d] rounded-full p-0.5" />
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <!-- Pop-up Error Dialog -->
                <div id="error-popup" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40 backdrop-blur-xs animate-in fade-in duration-200">
                    <div class="bg-white rounded-[16px] max-w-[460px] w-full p-6 shadow-2xl border border-[#ef4444]/30 flex flex-col gap-4 text-center">
                        <div class="size-14 rounded-full bg-[#fef2f2] text-[#dc2626] flex items-center justify-center mx-auto border border-[#ef4444]/20">
                            <svg class="size-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <h3 class="text-[#1e3329] text-[18px] font-semibold">Sign-In Error</h3>
                            <p class="text-[#69736b] text-[13px] leading-relaxed">
                                {{ $errors->first() }}
                            </p>
                        </div>
                        <button
                            type="button"
                            onclick="document.getElementById('error-popup').remove()"
                            class="bg-[#25664d] hover:bg-[#1e523e] text-white font-semibold text-[13px] h-[44px] rounded-[8px] transition-colors cursor-pointer w-full mt-1"
                        >
                            Understood
                        </button>
                    </div>
                </div>

                <!-- Form Error Banner -->
                <div class="bg-[#fef2f2] border border-[#ef4444]/30 text-[#991b1b] px-4 py-3 rounded-[8px] text-[13px] flex items-center gap-2">
                    <svg class="size-4 shrink-0 text-[#dc2626]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <!-- Form Introduction -->
            <div class="flex flex-col gap-2.5">
                <h1 class="text-[#1e3329] text-[32px] font-normal leading-tight">
                    Customer sign-in
                </h1>
                <p class="text-[#69736b] text-[14px] leading-[1.6]">
                    Welcome back. Let’s pick up where you left off.
                </p>
                <p class="text-[#69736b] text-[13px]">
                    Not part of the neighborhood yet?
                    <a href="{{ route('customer.registration') }}" class="text-[#25664d] font-semibold hover:underline">
                        Create a customer account
                    </a>
                </p>
            </div>

            <!-- Google Sign-in Button -->
            <a
                href="{{ route('auth.google') }}"
                class="bg-white border border-[#dfe3d9] rounded-[8px] h-[50px] flex items-center justify-center gap-3 text-[#1e3329] text-[14px] font-semibold hover:border-[#25664d] hover:bg-[#fcfbf7] transition-all shadow-sm cursor-pointer w-full text-center"
            >
                <svg class="size-5 shrink-0" viewBox="0 0 24 24">
                    <path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.7 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.4 9 5 12 5z"/>
                    <path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.7-.2-2.3H12v4.5h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5.1 3.7-8.8z"/>
                    <path fill="#FBBC05" d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3 0-.8.2-1.6.4-2.3L1.9 7.3C.7 9.7 0 12.3 0 15.2c0 2.8.7 5.5 1.9 7.8l3.7-2.9z"/>
                    <path fill="#34A853" d="M12 23c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2.4-6.4-5.2L1.9 16c1.8 3.7 5.6 7 10.1 7z"/>
                </svg>
                <span>Continue with Google</span>
            </a>

            <!-- Divider -->
            <div class="flex items-center gap-4">
                <div class="flex-1 h-px bg-[#dfe3d9]"></div>
                <span class="text-[#69736b] text-[11px] whitespace-nowrap">
                    or sign in with email
                </span>
                <div class="flex-1 h-px bg-[#dfe3d9]"></div>
            </div>

            <!-- Sign-in Form -->
            <form action="{{ route('login.store') }}" method="POST" class="flex flex-col gap-5">
                @csrf

                <!-- Email Field -->
                <div class="flex flex-col gap-2">
                    <label for="email" class="text-[#1e3329] text-[13px] font-normal">
                        Email address
                    </label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="emily.rivera@email.com"
                        required
                        autofocus
                        class="bg-white border border-[#dfe3d9] rounded-[8px] h-[49px] px-[14px] text-[14px] text-[#1e3329] placeholder:text-[#69736b] outline-none focus:border-[#25664d] transition-colors w-full shadow-sm"
                    />
                </div>

                <!-- Password Field -->
                <div class="flex flex-col gap-2">
                    <label for="password" class="text-[#1e3329] text-[13px] font-normal">
                        Password
                    </label>
                    <div class="bg-white border border-[#dfe3d9] rounded-[8px] h-[49px] px-[14px] flex items-center justify-between focus-within:border-[#25664d] transition-colors shadow-sm">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="••••••••••••"
                            required
                            class="text-[14px] text-[#1e3329] placeholder:text-[#69736b] outline-none flex-1 bg-transparent"
                        />
                        <button
                            type="button"
                            onclick="const p = document.getElementById('password'); p.type = p.type === 'password' ? 'text' : 'password';"
                            class="text-[#69736b] hover:text-[#1e3329] transition-colors p-1 cursor-pointer"
                            title="Toggle password visibility"
                        >
                            <img src="{{ asset('images/pubfix/cc222.svg') }}" alt="Toggle password" class="size-[18px]" />
                        </button>
                    </div>
                </div>

                <!-- Sign-in Preferences -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2.5 cursor-pointer select-none group">
                        <input type="checkbox" name="remember" value="1" checked class="sr-only peer" />
                        <span class="size-[17px] rounded-[4px] border border-[#dfe3d9] bg-white peer-checked:bg-[#25664d] peer-checked:border-[#25664d] flex items-center justify-center shrink-0 transition-colors shadow-2xs">
                            <svg class="size-[12px] text-white hidden peer-checked:block pointer-events-none" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2.5 6 5 8.5 9.5 3.5"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#69736b] text-[13px] group-hover:text-[#1e3329] transition-colors">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-[#25664d] text-[13px] font-semibold hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Sign In Button -->
                <button
                    type="submit"
                    class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white rounded-[8px] h-[50px] flex items-center justify-center gap-2.5 text-[14px] font-semibold shadow-sm cursor-pointer w-full mt-1"
                >
                    <span>Sign in to my customer account</span>
                    <img src="{{ asset('images/pubfix/796ed.svg') }}" alt="" class="size-[17px]" />
                </button>
            </form>

            <!-- Privacy Reassurance -->
            <div class="flex items-center justify-center gap-1.5 text-[#69736b] text-[11px]">
                <img src="{{ asset('images/pubfix/52192.svg') }}" alt="" class="size-3" />
                <span>Your information is safe. Your inbox stays peaceful.</span>
            </div>

            <!-- Support Help Box -->
            <div class="bg-[#eaf0e6] p-5 rounded-[12px] flex items-center gap-3 border border-[#dfe3d9]/50 shadow-sm">
                <img src="{{ asset('images/pubfix/57a1d.svg') }}" alt="Support" class="size-6 shrink-0" />
                <div class="flex flex-col gap-0.5">
                    <p class="text-[#1e3329] text-[13px] font-semibold">
                        A real team, on your side.
                    </p>
                    <a href="#" class="text-[#25664d] text-[12px] font-normal hover:underline">
                        Need a hand signing in? Talk to us ↗
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
