@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        Here are some handy scripts and projects I've made or were a part of. The projects are diverse and were mostly created out of necessity. They are in no particular order and all their source code is available at the links provided!
    </p>

    <!-- Project -->
    <div>
        <x-modules.bar-horizontal />
        <h2 class="text-2xl tracking-tight text-white font-display">
            Website Status Checker
        </h2>
        <div class="flex pb-4 gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Github Link</span>
                <x-icons.github />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white"
                    href="https://github.com/Elwin-M/Website-Status-Checker" target="_blank">Python</a><x-icons.new-tab />
            </div>
        </div>
        <x-modules.dropdown>
            Description
            <x-slot:content>
                <p class="content-main-group">
                    This Python script checks the status of websites listed in a JSON file, records the results, and
                    updates the JSON file with the status of each website
                </p>
            </x-slot:content>
        </x-modules.dropdown>
    </div>

    <!-- Project -->
    <div>
        <x-modules.bar-horizontal />
        <h2 class="text-2xl tracking-tight text-white font-display">
            Unsorted Scripts
        </h2>
        <div class="flex pb-4 gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Github Link</span>
                <x-icons.github />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white"
                    href="https://github.com/Elwin-M/Unsorted-Scripts" target="_blank">PowerShell And
                    Python</a><x-icons.new-tab />
            </div>
        </div>
        <x-modules.dropdown>
            Description
            <x-slot:content>
                <p class="content-main-group">
                    This is an unsorted collection of my scripts that I've made over time
                </p>
            </x-slot:content>
        </x-modules.dropdown>
    </div>

    <!-- Project -->
    <div>
        <x-modules.bar-horizontal />
        <h2 class="text-2xl tracking-tight text-white font-display">
            Local Music To JSON
        </h2>
        <div class="flex pb-4 gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Github Link</span>
                <x-icons.github />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white"
                    href="https://github.com/Elwin-M/Local-Music-To-JSON" target="_blank">Python</a><x-icons.new-tab />
            </div>
        </div>
        <x-modules.dropdown>
            Description
            <x-slot:content>
                <p class="content-main-group">
                    A simple GUI for converting local music files to specified JSON format. Format and specifics can be
                    changed easily with simple python knowledge so that it can be used with other utilities as required.
                </p>

                <p class="content-main-group">
                    Right now, only mp3, m4a formats are supported
                </p>
            </x-slot:content>
        </x-modules.dropdown>
    </div>

    <!-- Project -->
    <div>
        <x-modules.bar-horizontal />
        <h2 class="text-2xl tracking-tight text-white font-display">
            IP Checker
        </h2>
        <div class="flex pb-4 gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Github Link</span>
                <x-icons.github />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white"
                    href="https://github.com/Elwin-M/IP-Checker" target="_blank">Python</a><x-icons.new-tab />
            </div>
        </div>
        <x-modules.dropdown>
            Description
            <x-slot:content>
                <p class="content-main-group">
                    This Python script checks your current IP and compares it to the contents of the JSON file, updating
                    it if necessary
                </p>
            </x-slot:content>
        </x-modules.dropdown>
    </div>

    <!-- Project -->
    <div>
        <x-modules.bar-horizontal />
        <h2 class="text-2xl tracking-tight text-white font-display">
            Twitter And OpenAI Showcase
        </h2>
        <div class="flex pb-4 gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Github Link</span>
                <x-icons.github />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white"
                    href="https://github.com/Elwin-M/Twitter-OpenAI" target="_blank">Python</a><x-icons.new-tab />
            </div>
        </div>
        <x-modules.dropdown>
            Description
            <x-slot:content>
                <p class="content-main-group">
                    Python script that uses the (old) Twitter API to read tweets from an account and then uses the
                    OpenAI (Chat GTP) API to classify the tweets
                </p>
                <p class="content-main-group">
                    In this specific script, it determines if tweets from the specific account contains sales
                    promotions in the forms of “deals”
                </p>
                <p class="content-main-group">
                    This was a simple project to showcase my ability to use different API’s
                </p>
            </x-slot:content>
        </x-modules.dropdown>
    </div>

    <!-- Project -->
    <div>
        <x-modules.bar-horizontal />
        <h2 class="text-2xl tracking-tight text-white font-display">
            Toronto Hacks 2022
        </h2>
        <div class="flex pb-4 gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Github Link</span>
                <x-icons.github />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white"
                    href="https://github.com/Elwin-M/TO-Hacks-2022" target="_blank">Python</a><x-icons.new-tab />
            </div>
        </div>
        <x-modules.dropdown>
            Description
            <x-slot:content>
                <p class="content-main-group">
                    24 Hour Collaborative Hackathon Project
                </p>
            </x-slot:content>
        </x-modules.dropdown>
    </div>

</div>
