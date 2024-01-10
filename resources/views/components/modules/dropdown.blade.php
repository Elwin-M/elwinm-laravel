<div x-cloak class="pt-4" x-data="{ dropdown: false }">
    <!-- Expand/collapse -->
    <div @click="dropdown = !dropdown" class="hover:cursor-pointer">
        <div class="flex items-start justify-between w-full py-4 text-left text-white border-t border-slate-800"
            aria-controls="faq-0" aria-expanded="false">
            <span class="text-base font-semibold leading-7">{{ $slot }}</span>
            <span class="flex items-center ml-6 h-7">
                <!-- Plus icon -->
                <div x-show="!dropdown">
                    <x-icons.plus />
                </div>
                <!-- Minus icon -->
                <div x-show="dropdown">
                    <x-icons.minus />
                </div>
            </span>
        </div>
    </div>
    <!-- Actual dropdown -->
    <div x-show="dropdown" class="px-4 mt-2">
        {{ $content }}
    </div>
</div>
