{{-- <x-layouts.app> --}}
    <!-- Nav bar and menu -->
    {{-- <x-modules.nav-bar /> --}}
    {{-- <x-modules.mobile-menu /> --}}
    <!-- Hero section -->
    {{-- <x-modules.hero-section /> --}}
{{-- </x-layouts.app> --}}

{{-- Not allowed --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>@yield('pageTitle', @config('app.name'))</title> --}}
    <title>{{ $pageTitle ?? @config('app.name') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/fonts.css', 'resources/css/prism.css', 'resources/js/prism.js'])
</head>

<body x-data="{ mobileMenu: false }" class="antialiased bg-slate-900 [font-feature-settings:'ss01']">
    <!-- Nav bar and menu -->
    <x-modules.nav-bar />
    {{-- <x-modules.mobile-menu /> --}}
    <!-- Hero section -->
    <x-modules.hero-section />

    <div class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <div class="hidden lg:relative lg:block lg:flex-none">
            <div class="absolute bottom-0 right-0 block w-px h-12 top-16 bg-gradient-to-t from-slate-800">
            </div>
            <div class="absolute bottom-0 right-0 block w-px top-28 bg-slate-800"></div>
            <!-- Left quicklinks -->
            {{-- <x-modules.desktop-menu /> --}}
        </div>
        <!-- Main body -->
        <div class="flex-auto max-w-2xl min-w-0 px-4 py-16 lg:max-w-none lg:pl-8 lg:pr-0 xl:px-16">
            {{-- {{ $slot }} --}}
        </div>
    </div>
</body>

</html>
