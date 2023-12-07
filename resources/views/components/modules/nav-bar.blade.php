<div x-data="{ scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 0);
    scrolledUp = window.pageYOffset < lastScroll; lastScroll = window.pageYOffset"
    class="sticky top-0 z-50 flex flex-wrap items-center justify-between px-4 py-5 transition duration-500 bg-white shadow-md dark:shadow-none sm:px-6 lg:px-8 dark:bg-transparent"
    :class="{ 'dark:backdrop-blur dark:bg-slate-900/75 dark:backdrop-filter dark:backdrop-filter-blur-sm': scrolled }">
    <div class="flex mr-6 lg:hidden">
        <!-- MobileNavigation -->
        <x-icons.hamburger-menu /> <!-- Hamburgwer menu for mobile -->
    </div>
    <div class="relative flex items-center flex-grow basis-0">
        <a href="/" aria-label="Home page">
            <!-- Logo SVG code -->
            <x-icons.logomark /> <!-- Base logo for mobile -->
            <x-icons.logo /> <!-- Logo with text -->
        </a>
    </div>
    <div class="mr-6 -my-5 text-white sm:mr-8 md:mr-0">
        <!-- Search -->
        Search Bar
    </div>
    <div class="relative flex justify-end gap-6 basis-0 sm:gap-8 md:flex-grow">
        <a href="https://github.com" class="group" aria-label="GitHub">
            <!-- Your GitHub icon SVG code -->
            <x-icons.github />
        </a>
    </div>
</div>
