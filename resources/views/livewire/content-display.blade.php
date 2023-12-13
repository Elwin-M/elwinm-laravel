<div x-data="{ activePage: @entangle('content') }">
    <!-- Nav bar and menu -->
    <x-modules.nav-bar />
    <x-modules.mobile-menu />
    <!-- Hero section -->
    <x-modules.hero-section />

    <div class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <!-- Left quicklinks -->
        <x-modules.desktop-menu />
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
        <x-modules.current-page-contents />
    </div>
</div>
