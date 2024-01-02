<div class="flex pt-6 mt-12 border-t border-slate-200 dark:border-slate-800">
    <div>
        @if ($previousPage)
            <div class="text-sm font-medium font-display text-slate-900 dark:text-white">
                Previous
            </div>
            <div class="mt-1">
                <a href="{{ $previousPage['uri'] }}"
                    class="text-base font-semibold text-slate-500 hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300" wire:navigate>
                    <span aria-hidden="true">&larr;</span> {{ $previousPage['page'] }}
                </a>
            </div>
        @endif
    </div>
    <div class="ml-auto text-right">
        @if ($nextPage)
            <div class="text-sm font-medium font-display text-slate-900 dark:text-white">
                Next
            </div>
            <div class="mt-1">
                <a href="{{ $nextPage['uri'] }}"
                    class="text-base font-semibold text-slate-500 hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300" wire:navigate>
                    {{ $nextPage['page'] }} <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        @endif
    </div>
</div>
