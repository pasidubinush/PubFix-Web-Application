@props(['title' => 'PubFix · Good work, close to home', 'minimalFooter' => false])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f7f2] font-sans text-[#1e3329] antialiased min-h-full flex flex-col">
    <x-navbar />

    <main class="flex-1">
        @if (session('success'))
            <div class="bg-[#e8f5e9] border-b border-[#25664d]/30 text-[#1e3329] px-6 py-3 text-[13px] flex items-center justify-center gap-2 shadow-xs">
                <img src="{{ asset('images/pubfix/14f9c.svg') }}" alt="" class="size-3.5 bg-[#25664d] rounded-full p-0.5" />
                <span>{{ session('success') }}</span>
            </div>
        @endif
        @if (session('error'))
            <div class="bg-[#fef2f2] border-b border-[#ef4444]/30 text-[#991b1b] px-6 py-3 text-[13px] flex items-center justify-center gap-2 shadow-xs">
                <svg class="size-4 shrink-0 text-[#dc2626]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                <span>{{ session('error') }}</span>
            </div>
        @endif
        {{ $slot }}
    </main>

    @if ($minimalFooter)
        <footer class="border-t border-[#dfe3d9] bg-[#f8f7f2] px-6 sm:px-12 lg:px-20 py-6 text-[#69736b] text-[12px]">
            <div class="max-w-[1440px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
                <p>© {{ date('Y') }} PubFix. Good work, close to home.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-[#1e3329] transition-colors">Privacy policy</a>
                    <a href="#" class="hover:text-[#1e3329] transition-colors">Terms of service</a>
                    <a href="#" class="hover:text-[#1e3329] transition-colors">Help center</a>
                </div>
            </div>
        </footer>
    @else
        <x-footer />
    @endif
</body>
</html>
