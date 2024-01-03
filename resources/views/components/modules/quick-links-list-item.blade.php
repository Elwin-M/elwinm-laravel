<div class="relative">
    <!-- Subheadings -->
    <a href="{{ $uri }}" x-on:click="mobileMenu = false" wire:navigate
        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full"
        :class="activePage === '{{ $uri }}' ? 'font-semibold text-sky-500 before:bg-sky-500' :
            'before:hidden hover:before:block text-slate-400 before:bg-slate-700 hover:text-slate-300 cursor-pointer'">
        {{ $slot }}
    </a>
</div>
