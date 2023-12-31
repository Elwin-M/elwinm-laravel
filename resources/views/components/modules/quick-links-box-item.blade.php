<div class="relative border border-gray-800 rounded-xl group">
    <div
        class="absolute -inset-px rounded-xl border-2 border-transparent opacity-0 [background:linear-gradient(var(--quick-links-hover-bg,theme(colors.sky.50)),var(--quick-links-hover-bg,theme(colors.sky.50)))_padding-box,linear-gradient(to_top,theme(colors.indigo.400),theme(colors.cyan.400),theme(colors.sky.500))_border-box] group-hover:opacity-100 [--quick-links-hover-bg:theme(colors.slate.800)]">
    </div>
    <div class="relative p-6 overflow-hidden rounded-xl">
        {{-- <img src="/" class="w-8 h-8" alt="Image" /> --}}
        <h2 class="mt-4 text-base text-white font-display">
            @if (isset($link))
                <a href="{{ route($link) }}" wire:navigate>
                    <span class="absolute inset-0 cursor-pointer rounded-xl"></span>
                    {{ $slot }}
                </a>
            @else
                <div>
                    <span class="absolute inset-0 rounded-xl"></span>
                    {{ $slot }}
                </div>
            @endif
        </h2>
        <p class="mt-1 text-sm text-gray-400">
            {{ $description }}
        </p>
    </div>
</div>
