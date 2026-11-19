<x-layout title="PubFix · Set New Password" :minimal-footer="true">
    <div class="py-12 px-6 sm:px-12 flex items-center justify-center min-h-[calc(100vh-88px-75px)]">
        <div class="w-full max-w-[560px] mx-auto flex flex-col gap-6">
            <!-- Header -->
            <div class="flex flex-col gap-2.5">
                <h1 class="text-[#1e3329] text-[32px] font-normal leading-tight">
                    Set a new password
                </h1>
                <p class="text-[#69736b] text-[14px] leading-[1.6]">
                    Please choose a strong password with at least 8 characters.
                </p>
            </div>

            @if ($errors->any())
                <div class="bg-[#fef2f2] border border-[#ef4444]/30 text-[#991b1b] px-4 py-3 rounded-[8px] text-[13px] flex items-center gap-2">
                    <svg class="size-4 shrink-0 text-[#dc2626]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('password.update') }}" method="POST" class="flex flex-col gap-5">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}" />

                <div class="flex flex-col gap-2">
                    <label for="email" class="text-[#1e3329] text-[13px] font-normal">
                        Customer email address
                    </label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email', $email) }}"
                        required
                        class="bg-white border border-[#dfe3d9] rounded-[8px] h-[49px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d] transition-colors w-full shadow-sm"
                    />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password" class="text-[#1e3329] text-[13px] font-normal">
                        New Password
                    </label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="At least 8 characters"
                        required
                        minlength="8"
                        class="bg-white border border-[#dfe3d9] rounded-[8px] h-[49px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d] transition-colors w-full shadow-sm"
                    />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password_confirmation" class="text-[#1e3329] text-[13px] font-normal">
                        Confirm New Password
                    </label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        placeholder="Re-enter your new password"
                        required
                        minlength="8"
                        class="bg-white border border-[#dfe3d9] rounded-[8px] h-[49px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d] transition-colors w-full shadow-sm"
                    />
                </div>

                <button
                    type="submit"
                    class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white rounded-[8px] h-[50px] flex items-center justify-center gap-2.5 text-[14px] font-semibold shadow-sm cursor-pointer w-full mt-1"
                >
                    <span>Update password & sign in</span>
                    <img src="{{ asset('images/pubfix/796ed.svg') }}" alt="" class="size-[17px]" />
                </button>
            </form>
        </div>
    </div>
</x-layout>
