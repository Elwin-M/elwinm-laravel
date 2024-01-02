<!-- Animation for mobile menu -->
<div x-cloak x-show="mobileMenu" x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="transform translate-x-0"
    x-transition:leave-end="transform -translate-x-full"
    class="fixed inset-0 z-50 flex items-start pr-10 overflow-y-auto bg-slate-900/50 backdrop-blur lg:hidden">
    <div class="w-full max-w-xs min-h-full px-4 pt-5 pb-12 bg-slate-900 sm:px-6"
        x-on:click.away="mobileMenu = false">
        <!-- Icons -->
        <div class="flex items-center">
            <div x-on:click="mobileMenu = false">
                <x-icons.hamburger-menu /> <!-- Hamburger menu -->
            </div>
            <a href="/" class="ml-6" aria-label="Home page">
                <x-icons.logomark /> <!-- Base logo -->
            </a>
        </div>
        <div class="px-1 mt-5">
            <livewire:quick-links-main /> <!-- Links to pages -->
            {{-- <x-modules.quick-links-main /> --}}
        </div>
    </div>
</div>
