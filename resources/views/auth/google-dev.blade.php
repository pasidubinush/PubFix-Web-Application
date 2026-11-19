<x-layout title="PubFix · Google Sign-In" :minimal-footer="true">
    <div class="py-12 px-6 sm:px-12 flex items-center justify-center min-h-[calc(100vh-88px-75px)]">
        <div class="w-full max-w-[540px] mx-auto flex flex-col gap-6 bg-white border border-[#dfe3d9] rounded-[16px] p-6 sm:p-8 shadow-sm">
            <div class="flex items-center gap-3">
                <div class="size-11 rounded-full bg-[#f8f7f2] border border-[#dfe3d9] flex items-center justify-center shrink-0">
                    <svg class="size-6" viewBox="0 0 24 24">
                        <path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.7 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.4 9 5 12 5z"/>
                        <path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.7-.2-2.3H12v4.5h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5.1 3.7-8.8z"/>
                        <path fill="#FBBC05" d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3 0-.8.2-1.6.4-2.3L1.9 7.3C.7 9.7 0 12.3 0 15.2c0 2.8.7 5.5 1.9 7.8l3.7-2.9z"/>
                        <path fill="#34A853" d="M12 23c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2.4-6.4-5.2L1.9 16c1.8 3.7 5.6 7 10.1 7z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-[#1e3329] text-[22px] font-semibold">Google Sign-In Simulator</h1>
                    <p class="text-[#69736b] text-[13px]">Local environment development mode</p>
                </div>
            </div>

            <div class="bg-[#fcfbf7] border border-[#dfe3d9] p-4 rounded-[10px] text-[13px] text-[#69736b] flex flex-col gap-2 leading-relaxed">
                <p>
                    <strong class="text-[#1e3329]">Note:</strong> <code class="bg-[#ede9de] px-1 py-0.5 rounded text-[12px] text-[#25664d]">GOOGLE_CLIENT_ID</code> and <code class="bg-[#ede9de] px-1 py-0.5 rounded text-[12px] text-[#25664d]">GOOGLE_CLIENT_SECRET</code> are not configured in your <code class="bg-[#ede9de] px-1 py-0.5 rounded text-[12px]">.env</code> file yet.
                </p>
                <p>
                    You can sign in immediately below to test the full customer authentication flow and automatic redirect to the home page:
                </p>
            </div>

            <form action="{{ route('auth.google.callback') }}" method="GET" class="flex flex-col gap-4">
                <input type="hidden" name="dev_mode" value="1" />

                <div class="flex flex-col gap-1.5">
                    <label for="name" class="text-[#1e3329] text-[13px] font-medium">Customer Name</label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="Emily Rivera"
                        required
                        class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                    />
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="email" class="text-[#1e3329] text-[13px] font-medium">Google Account Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="emily.rivera.google@gmail.com"
                        required
                        class="bg-white border border-[#dfe3d9] rounded-[8px] h-[45px] px-[14px] text-[14px] text-[#1e3329] outline-none focus:border-[#25664d]"
                    />
                </div>

                <button
                    type="submit"
                    class="bg-[#25664d] hover:bg-[#1e523e] transition-colors text-white rounded-[8px] h-[48px] flex items-center justify-center gap-2 text-[14px] font-semibold cursor-pointer shadow-sm mt-2"
                >
                    <span>Sign in with Google Account</span>
                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </form>

            <div class="text-center">
                <a href="{{ route('customer.signin') }}" class="text-[#25664d] text-[13px] font-medium hover:underline">
                    ← Back to customer sign-in
                </a>
            </div>
        </div>
    </div>
</x-layout>
