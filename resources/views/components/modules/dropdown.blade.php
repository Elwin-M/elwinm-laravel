<div x-cloak class="px-6 border rounded-md shadow-sm border-slate-800" x-data="{ dropdown: false }">
    <!-- Expand/collapse -->
    <div @click="dropdown = !dropdown" class="hover:cursor-pointer">
        <div class="flex items-start justify-between w-full py-4 text-left text-white"
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
    <div x-show="dropdown" class="mt-2">
        {{ $content }}
    </div>
</div>
