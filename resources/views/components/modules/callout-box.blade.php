<div class='flex p-6 my-8 rounded-3xl bg-sky-50 dark:bg-slate-800/60 dark:ring-1 dark:ring-slate-300/10'>
    <div class="flex-auto ml-4">
        <p class='m-0 text-xl font-display text-amber-900 dark:text-amber-500'>
            {{ $slot }}
        </p>
        <div
            class='mt-2.5 text-amber-800 [--tw-prose-underline:theme(colors.amber.400)] [--tw-prose-background:theme(colors.amber.50)] prose-a:text-amber-900 prose-code:text-amber-900 dark:text-slate-300 dark:[--tw-prose-underline:theme(colors.sky.700)] dark:prose-code:text-slate-300'>
            {{ $description }}
        </div>
    </div>
</div>
