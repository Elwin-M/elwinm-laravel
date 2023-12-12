<div>
    <h2 class="font-medium text-white font-display">
        <!-- Section title data -->
        {{ $slot }}
    </h2>
    <!-- If section has subheadings -->
    @if (isset($subSlot))
        <div class="mt-2 space-y-2 border-l-2 border-slate-800 lg:mt-4 lg:space-y-4 ">
            {{ $subSlot }}
        </div>
    @endif
    </div>
