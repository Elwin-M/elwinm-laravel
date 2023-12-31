<div
    class="overflow-hidden bg-slate-900 -mb-32 mt-[-4.5rem] pb-32 pt-[4.5rem] lg:mt-[-4.75rem] lg:pt-[4.75rem]">
    <div class="py-16 sm:px-2 lg:relative lg:px-0 lg:py-20">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 mx-auto gap-x-8 gap-y-16 lg:max-w-8xl lg:grid-cols-2 lg:px-8 xl:gap-x-16 xl:px-12">
            <div class="relative z-10 md:text-center lg:text-left">
                <!-- Circles on left -->
                <img class="absolute -mb-56 opacity-50 bottom-full right-full -mr-72"
                    src="{{ asset('images/blur-cyan.png') }}" alt="" width="530" height="530">
                <div class="relative">
                    <!-- Title -->
                    <p
                        class="inline text-5xl tracking-tight text-transparent bg-gradient-to-r from-indigo-200 via-sky-400 to-indigo-200 bg-clip-text font-display">
                        {{ $slot }}
                    </p>
                    <!-- Subheading -->
                    <p class="mt-3 text-2xl tracking-tight text-slate-400">
                        {{ $description }}
                    </p>
                    <!-- Buttons -->
                    <div class="flex gap-4 mt-8 md:justify-center lg:justify-start">
                        {{ $buttons }}
                    </div>
                </div>
            </div>

            <div class="relative lg:static xl:pl-10">
                <div
                    class="absolute inset-x-[-50vw] -bottom-48 -top-32 [mask-image:linear-gradient(transparent,white,transparent)] lg:-bottom-32 lg:-top-32 lg:left-[calc(50%+14rem)] lg:right-0 lg:[mask-image:linear-gradient(white,white,transparent)]">
                    <!-- HeroBackground component HTML here -->
                    <x-modules.hero-background />
                </div>
                <div class="relative">
                    <!-- Circles on right -->
                    <img class="absolute -right-64 -top-64" src="{{ asset('images/blur-cyan.png') }}" alt=""
                        width="530" height="530">
                    <img class="absolute -bottom-40 -right-44" src="{{ asset('images/blur-indigo.png') }}"
                        alt="" width="567" height="567">
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10 blur-lg">
                    </div>
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10">
                    </div>
                    <!-- Dark box -->
                    <x-modules.hero-section-code-box />
                </div>
            </div>
        </div>
    </div>
</div>
