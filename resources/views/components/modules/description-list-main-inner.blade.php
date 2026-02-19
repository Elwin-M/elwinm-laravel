<div class="overflow-hidden border border-slate-800 rounded-xl">
    <div class="flex items-center p-6 border-b gap-x-4 border-slate-800 bg-slate-800">
        <div class="text-base font-semibold leading-6 text-white">
            {{ $title }}
        </div>
    </div>
    <div class="px-6 py-4 -my-3 text-sm leading-6 divide-y divide-slate-800">
        {{ $slot }}
    </div>
</div>
