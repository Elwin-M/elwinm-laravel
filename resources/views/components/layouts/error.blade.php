<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle', @config('app.name'))</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/fonts.css', 'resources/css/prism.css', 'resources/js/prism.js'])
</head>

<body class="antialiased bg-slate-900 [font-feature-settings:'ss01']">
    <!-- Nav bar and menu -->
    <!-- Navbar -->
    <div x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 0);"
        class="sticky top-0 z-40 flex flex-wrap items-center justify-between px-4 py-5 transition duration-500 bg-transparent shadow-none sm:px-6 lg:px-8"
        :class="{ 'backdrop-blur bg-slate-900/75 backdrop-filter backdrop-filter-blur-sm': scrolled }">
        <!-- Logo SVG code -->
        <div class="relative flex items-center flex-grow basis-0">
            <a href="/" aria-label="Home page" wire:navigate>
                <x-icons.logomark /> <!-- Base logo for mobile -->
                <x-icons.logo /> <!-- Logo with text -->
            </a>
        </div>
        <!-- GitHub icon SVG code -->
        <div class="relative flex justify-end flex-grow gap-6 basis-0 sm:gap-8">
            <a href="https://github.com/Elwin-M" class="group" aria-label="GitHub">
                <x-icons.github />
            </a>
        </div>
    </div>
    <!-- Hero section for home page -->
    <div class="overflow-hidden bg-slate-900 -mb-32 mt-[-4.5rem] pb-32 pt-[4.5rem] ">
        <div class="py-16 sm:px-2 ">
            <div class="grid items-center max-w-2xl grid-cols-1 px-4 mx-auto gap-x-8 gap-y-16 ">
                <div class="relative z-10 text-center">
                    <!-- Circles on left -->
                    <img class="absolute -mb-56 opacity-50 bottom-full right-full -mr-72"
                        src="{{ asset('images/blur-cyan.png') }}" alt="" width="530" height="530">
                    <div class="relative">
                        <!-- Title -->
                        <p
                            class="inline text-5xl tracking-tight text-transparent bg-gradient-to-r from-indigo-200 via-sky-400 to-indigo-200 bg-clip-text font-display">
                            Uh Oh
                        </p>
                        <!-- Subheading -->
                        <p class="mt-3 text-2xl tracking-tight text-slate-400">
                            {{ $slot }}
                        </p>
                        <!-- Buttons -->
                        <div class="flex justify-center gap-4 mt-8">
                            <a href="/" class="btn-sky" wire:navigate>Home Page</a>
                            <a href="https://github.com/Elwin-M" class="btn-slate">View my Github</a>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="absolute inset-x-[-50vw] -bottom-48 -top-32 [mask-image:linear-gradient(transparent,white,transparent)] ">
                        <!-- HeroBackground component HTML here -->
                        <!-- Hero background image -->
                        <svg aria-hidden="true" viewBox="0 0 668 1069" width="668" height="1069" fill="none"
                            class="absolute -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 ">
                            <defs>
                                <clipPath id="clip-path">
                                    <path fill="#fff" transform="rotate(-180 334 534.4)" d="M0 0h668v1068.8H0z" />
                                </clipPath>
                            </defs>
                            <g opacity=".4" clip-path="url(#clip-path)" stroke-width="4">
                                <path opacity=".3"
                                    d="M584.5 770.4v-474M484.5 770.4v-474M384.5 770.4v-474M283.5 769.4v-474M183.5 768.4v-474M83.5 767.4v-474"
                                    stroke="#334155" />
                                <path
                                    d="M83.5 221.275v6.587a50.1 50.1 0 0 0 22.309 41.686l55.581 37.054a50.102 50.102 0 0 1 22.309 41.686v6.587M83.5 716.012v6.588a50.099 50.099 0 0 0 22.309 41.685l55.581 37.054a50.102 50.102 0 0 1 22.309 41.686v6.587M183.7 584.5v6.587a50.1 50.1 0 0 0 22.31 41.686l55.581 37.054a50.097 50.097 0 0 1 22.309 41.685v6.588M384.101 277.637v6.588a50.1 50.1 0 0 0 22.309 41.685l55.581 37.054a50.1 50.1 0 0 1 22.31 41.686v6.587M384.1 770.288v6.587a50.1 50.1 0 0 1-22.309 41.686l-55.581 37.054A50.099 50.099 0 0 0 283.9 897.3v6.588"
                                    stroke="#334155" />
                                <path
                                    d="M384.1 770.288v6.587a50.1 50.1 0 0 1-22.309 41.686l-55.581 37.054A50.099 50.099 0 0 0 283.9 897.3v6.588M484.3 594.937v6.587a50.1 50.1 0 0 1-22.31 41.686l-55.581 37.054A50.1 50.1 0 0 0 384.1 721.95v6.587M484.3 872.575v6.587a50.1 50.1 0 0 1-22.31 41.686l-55.581 37.054a50.098 50.098 0 0 0-22.309 41.686v6.582M584.501 663.824v39.988a50.099 50.099 0 0 1-22.31 41.685l-55.581 37.054a50.102 50.102 0 0 0-22.309 41.686v6.587M283.899 945.637v6.588a50.1 50.1 0 0 1-22.309 41.685l-55.581 37.05a50.12 50.12 0 0 0-22.31 41.69v6.59M384.1 277.637c0 19.946 12.763 37.655 31.686 43.962l137.028 45.676c18.923 6.308 31.686 24.016 31.686 43.962M183.7 463.425v30.69c0 21.564 13.799 40.709 34.257 47.529l134.457 44.819c18.922 6.307 31.686 24.016 31.686 43.962M83.5 102.288c0 19.515 13.554 36.412 32.604 40.645l235.391 52.309c19.05 4.234 32.605 21.13 32.605 40.646M83.5 463.425v-58.45M183.699 542.75V396.625M283.9 1068.8V945.637M83.5 363.225v-141.95M83.5 179.524v-77.237M83.5 60.537V0M384.1 630.425V277.637M484.301 830.824V594.937M584.5 1068.8V663.825M484.301 555.275V452.988M584.5 622.075V452.988M384.1 728.537v-56.362M384.1 1068.8v-20.88M384.1 1006.17V770.287M283.9 903.888V759.85M183.699 1066.71V891.362M83.5 1068.8V716.012M83.5 674.263V505.175"
                                    stroke="#334155" />
                                <circle cx="83.5" cy="384.1" r="10.438" transform="rotate(-180 83.5 384.1)"
                                    fill="#1E293B" stroke="#334155" />
                                <circle cx="83.5" cy="200.399" r="10.438" transform="rotate(-180 83.5 200.399)"
                                    stroke="#334155" />
                                <circle cx="83.5" cy="81.412" r="10.438" transform="rotate(-180 83.5 81.412)"
                                    stroke="#334155" />
                                <circle cx="183.699" cy="375.75" r="10.438" transform="rotate(-180 183.699 375.75)"
                                    fill="#1E293B" stroke="#334155" />
                                <circle cx="183.699" cy="563.625" r="10.438"
                                    transform="rotate(-180 183.699 563.625)" fill="#1E293B" stroke="#334155" />
                                <circle cx="384.1" cy="651.3" r="10.438" transform="rotate(-180 384.1 651.3)"
                                    fill="#1E293B" stroke="#334155" />
                                <circle cx="484.301" cy="574.062" r="10.438"
                                    transform="rotate(-180 484.301 574.062)" fill="#0EA5E9" fillOpacity=".42"
                                    stroke="#0EA5E9" />
                                <circle cx="384.1" cy="749.412" r="10.438" transform="rotate(-180 384.1 749.412)"
                                    fill="#1E293B" stroke="#334155" />
                                <circle cx="384.1" cy="1027.05" r="10.438" transform="rotate(-180 384.1 1027.05)"
                                    stroke="#334155" />
                                <circle cx="283.9" cy="924.763" r="10.438" transform="rotate(-180 283.9 924.763)"
                                    stroke="#334155" />
                                <circle cx="183.699" cy="870.487" r="10.438"
                                    transform="rotate(-180 183.699 870.487)" stroke="#334155" />
                                <circle cx="283.9" cy="738.975" r="10.438"
                                    transform="rotate(-180 283.9 738.975)" fill="#1E293B" stroke="#334155" />
                                <circle cx="83.5" cy="695.138" r="10.438"
                                    transform="rotate(-180 83.5 695.138)" fill="#1E293B" stroke="#334155" />
                                <circle cx="83.5" cy="484.3" r="10.438" transform="rotate(-180 83.5 484.3)"
                                    fill="#0EA5E9" fillOpacity=".42" stroke="#0EA5E9" />
                                <circle cx="484.301" cy="432.112" r="10.438"
                                    transform="rotate(-180 484.301 432.112)" fill="#1E293B" stroke="#334155" />
                                <circle cx="584.5" cy="432.112" r="10.438"
                                    transform="rotate(-180 584.5 432.112)" fill="#1E293B" stroke="#334155" />
                                <circle cx="584.5" cy="642.95" r="10.438"
                                    transform="rotate(-180 584.5 642.95)" fill="#1E293B" stroke="#334155" />
                                <circle cx="484.301" cy="851.699" r="10.438"
                                    transform="rotate(-180 484.301 851.699)" stroke="#334155" />
                            </g>
                        </svg>
                    </div>
                    <div class="relative">
                        <!-- Circles on right -->
                        <img class="absolute -right-64 -top-64" src="{{ asset('images/blur-cyan.png') }}"
                            alt="" width="530" height="530">
                        <img class="absolute -bottom-40 -right-44" src="{{ asset('images/blur-indigo.png') }}"
                            alt="" width="567" height="567">
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10 blur-lg">
                        </div>
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10">
                        </div>
                        <!-- Dark box -->
                        <!-- Main code box -->
                        <div class="relative rounded-2xl bg-[#0A101F]/80 ring-1 ring-white/10 backdrop-blur">
                            <div
                                class="absolute h-px -top-px left-20 right-11 bg-gradient-to-r from-sky-300/0 via-sky-300/70 to-sky-300/0">
                            </div>
                            <div
                                class="absolute h-px -bottom-px left-11 right-20 bg-gradient-to-r from-blue-400/0 via-blue-400 to-blue-400/0">
                            </div>
                            <div class="pt-4 pl-4">
                                <!-- TrafficLightsIcon component SVG here -->
                                <svg aria-hidden="true" viewBox="0 0 42 10" fill="none"
                                    class="h-2.5 w-auto stroke-slate-500/30">
                                    <circle cx="5" cy="5" r="4.5" />
                                    <circle cx="21" cy="5" r="4.5" />
                                    <circle cx="37" cy="5" r="4.5" />
                                </svg>
                                <!-- Tabs here -->
                                <div class="flex mt-4 space-x-2 text-xs">
                                    <!-- Tab 1 -->
                                    <div x-on:click=" visibleId = 1"
                                        class="flex h-6 p-px font-medium rounded-full bg-gradient-to-r from-sky-400/30 via-sky-400 to-sky-400/30">
                                        <div class="flex items-center px-2.5 rounded-full bg-slate-800 text-sky-300">
                                            error.blade.php
                                        </div>
                                    </div>

                                </div>
                                <!-- Code box -->
                                <div class="flex items-start px-4 pb-6 mt-6 font-mono text-sm">
                                    <div class="pr-4 border-r select-none border-slate-300/5 text-slate-600">
                                        <!-- Line Numbers HTML here -->
                                        <div>
                                            <div>01</div>
                                            <div>02</div>
                                            <div>03</div>
                                            <div>04</div>
                                            <div>05</div>
                                            <div>06</div>
                                            <div>07</div>
                                            <div>08</div>
                                        </div>
                                    </div>
                                    <div class="flex overflow-x-auto whitespace-nowrap">
                                        <div class="px-4 text-sky-300">
                                            <!-- Code content 1 here -->
                                            <div>
                                                <pre>
<code class="language-markup">&lt;!-- This is my error page --&gt;
&lt;p class="subheading"&gt;
    &#123;{ $exception->getMessage() }}
&lt;/p&gt;

&lt;!-- Expected error response --&gt;
&lt;!--@if (strlen($error)  == 0 || empty($error)) No error message can be found @else {{ $error }} @endif--&gt;</code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
