<div>
    <x-modules.bar-horizontal />
    <div class="flex">
        <div>
            @if ($previousPage)
                <a href="{{ $previousPage['uri'] }}" class="text-slate-400 hover:text-slate-300" wire:navigate>
                    <div class="text-sm font-medium text-white font-display">
                        Previous
                    </div>
                    <div class="mt-1">
                        <div class="text-base font-semibold">
                            <span aria-hidden="true">&larr;</span> {{ $previousPage['page'] }}
                        </div>
                    </div>
                </a>
            @endif
        </div>
        <div class="ml-auto text-right">
            @if ($nextPage)
                <a href="{{ $nextPage['uri'] }}" class="text-slate-400 hover:text-slate-300" wire:navigate>
                    <div class="text-sm font-medium text-white font-display">
                        Next
                    </div>
                    <div class="mt-1">
                        <div class="text-base font-semibold">
                            {{ $nextPage['page'] }} <span aria-hidden="true">&rarr;</span>
                        </div>
                    </div>
                </a>
            @endif
        </div>
    </div>
</div>
