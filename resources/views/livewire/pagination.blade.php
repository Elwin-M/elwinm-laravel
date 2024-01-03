<div>
    <x-modules.bar-horizontal />
    <div class="flex">
        <div>
            @if ($previousPage)
                <div class="text-sm font-medium text-white font-display">
                    Previous
                </div>
                <div class="mt-1">
                    <a href="{{ $previousPage['uri'] }}"
                        class="text-base font-semibold text-slate-400 hover:text-slate-300"
                        wire:navigate>
                        <span aria-hidden="true">&larr;</span> {{ $previousPage['page'] }}
                    </a>
                </div>
            @endif
        </div>
        <div class="ml-auto text-right">
            @if ($nextPage)
                <div class="text-sm font-medium text-white font-display">
                    Next
                </div>
                <div class="mt-1">
                    <a href="{{ $nextPage['uri'] }}"
                        class="text-base font-semibold text-slate-400 hover:text-slate-300"
                        wire:navigate>
                        {{ $nextPage['page'] }} <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
