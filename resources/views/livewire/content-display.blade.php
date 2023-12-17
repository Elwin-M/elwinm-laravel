<div x-data="{ activePage: @entangle('content') }">
    <!-- Nav bar and menu -->
    <x-modules.nav-bar />
    <x-modules.mobile-menu />
    <!-- Hero section -->
    <x-modules.hero-section />

    <div class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <div class="hidden lg:relative lg:block lg:flex-none">
            <div class="absolute inset-y-0 right-0 w-[50vw] bg-slate-50 dark:hidden"></div>
            <div class="absolute bottom-0 right-0 hidden w-px h-12 top-16 bg-gradient-to-t from-slate-800 dark:block"></div>
            <div class="absolute bottom-0 right-0 hidden w-px top-28 bg-slate-800 dark:block"></div>
            <!-- Left quicklinks -->
            <x-modules.desktop-menu />
        </div>
        <!-- Main body -->
        <div class="flex-auto max-w-2xl min-w-0 px-4 py-16 lg:max-w-none lg:pl-8 lg:pr-0 xl:px-16">
            <div class="space-y-1 mb-9">
                <p class="text-sm font-medium font-display text-sky-500">
                    {{ $title }}
                </p>
                <h1 class="text-3xl tracking-tight font-display text-slate-900 dark:text-white">
                    {{ $subheading }}
                </h1>
            </div>
            <div class="max-w-none dark:prose-invert dark:text-slate-400">
                @include($content)
            </div>
        </div>
        <!-- Right page contents -->
        {{-- <x-modules.current-page-contents /> --}}
    </div>
</div>
