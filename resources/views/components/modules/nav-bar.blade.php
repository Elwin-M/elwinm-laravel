<!-- Navbar -->
<div x-data="{ scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 0);"
    class="sticky top-0 z-40 flex flex-wrap items-center justify-between px-4 py-5 transition duration-500 bg-white shadow-md dark:shadow-none sm:px-6 lg:px-8 dark:bg-transparent"
    :class="{ 'dark:backdrop-blur dark:bg-slate-900/75 dark:backdrop-filter dark:backdrop-filter-blur-sm': scrolled }">
    <!-- Mobile navigation menu -->
    <div class="flex mr-6 lg:hidden" x-on:click="mobileMenu = true">
        <x-icons.hamburger-menu /> <!-- Hamburger menu for mobile -->
    </div>
    <!-- Logo SVG code -->
    <div class="relative flex items-center flex-grow basis-0">
        <a href="/" aria-label="Home page">
            <x-icons.logomark /> <!-- Base logo for mobile -->
            <x-icons.logo /> <!-- Logo with text -->
        </a>
    </div>
    <!-- GitHub icon SVG code -->
    <div class="relative flex justify-end gap-6 basis-0 sm:gap-8 md:flex-grow">
        <a href="https://github.com/Elwin-M" class="group" aria-label="GitHub">
            <x-icons.github />
        </a>
    </div>
</div>
