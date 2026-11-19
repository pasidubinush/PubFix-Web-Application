<x-layout title="PubFix · Forgot Password" :minimal-footer="true">
    <div class="py-12 px-6 sm:px-12 flex items-center justify-center min-h-[calc(100vh-88px-75px)]">
        <div class="w-full max-w-[560px] mx-auto flex flex-col gap-6">
            <!-- Header -->
            <div class="flex flex-col gap-2.5">
                <a href="{{ route('customer.signin') }}" class="text-[#25664d] text-[13px] font-medium hover:underline inline-flex items-center gap-1.5 self-start">
                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    <span>Back to customer sign-in</span>
                </a>
                <h1 class="text-[#1e3329] text-[32px] font-normal leading-tight">
                    Reset your password
                </h1>
                <p class="text-[#69736b] text-[14px] leading-[1.6]">
                    Enter the email address tied to your PubFix customer account and we’ll send you a link to reset your password.
                </p>
            </div>

            <!-- Status Alerts -->
            @if (session('status'))
                <div class="bg-[#e8f5e9] border border-[#25664d]/30 text-[#1e3329] px-4 py-3 rounded-[8px] text-[13px] flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/pubfix/14f9c.svg') }}" alt="" class="size-3.5 bg-[#25664d] rounded-full p-0.5" />
                        <span>{{ session('status') }}</span>
                    </div>
                    @if (session('reset_url'))
                        <div class="pt-2 border-t border-[#25664d]/20 text-[12px]">
                            <span class="text-[#69736b]">Quick Test Link (Local Dev):</span>
                            <a href="{{ session('reset_url') }}" class="text-[#25664d] font-semibold underline block mt-1 break-all">
                                Click here to open password reset screen →
                            </a>
                        </div>
                    @endif
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-[#fef2f2] border border-[#ef4444]/30 text-[#991b1b] px-4 py-3 rounded-[8px] text-[13px] flex items-center gap-2">
                    <svg class="size-4 shrink-0 text-[#dc2626]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('password.email') }}" method="POST" class="flex flex-col gap-5">
                @csrf

                <div class="flex flex-col gap-2">
                    <label for="email" class="text-[#1e3329] text-[13px] font-normal">
                        Customer email address
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

                <button
                    type="submit"
                    class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white rounded-[8px] h-[50px] flex items-center justify-center gap-2.5 text-[14px] font-semibold shadow-sm cursor-pointer w-full mt-1"
                >
                    <span>Send password reset link</span>
                    <img src="{{ asset('images/pubfix/796ed.svg') }}" alt="" class="size-[17px]" />
                </button>
            </form>

            <div class="flex items-center justify-center gap-1.5 text-[#69736b] text-[12px]">
                <span>Remember your password?</span>
                <a href="{{ route('customer.signin') }}" class="text-[#25664d] font-semibold hover:underline">
                    Sign in here
                </a>
            </div>
        </div>
    </div>
</x-layout>
