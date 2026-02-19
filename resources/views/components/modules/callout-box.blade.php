<div class='flex p-6 my-8 rounded-3xl bg-slate-800/60 ring-1 ring-slate-300/10'>
    <div class="flex-auto ml-4">
        <p class='m-0 text-xl font-display text-amber-500'>
            {{ $slot }}
        </p>
        <div
            class='mt-2.5 text-slate-300'>
            {{ $description }}
        </div>
    </div>
</div>
