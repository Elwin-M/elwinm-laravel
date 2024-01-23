@section('pageTitle', $currentPageTitle)

<div id="contact">
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>

    <p class="content-main-group">If any of what you saw interests you, feel free to get in contact with me via any of
        the following:</p>

    <div class="space-y-4">
        <x-modules.resume />
        <!-- Email -->
        <div class="flex gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Email</span>
                <x-icons.email />
            </div>
            <div><a class="hover:text-white link" href="mailto:contact@elwinm.ca">contact@elwinm.ca</a></div>
        </div>
        <!-- Phone Number -->
        <div class="flex gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Telephone</span>
                <x-icons.phone />
            </div>
            <div><a class="hover:text-white link" href="tel:+1 (647) 921-6841"><!--sse-->+1 (647) 921-6841<!--/sse--></a>
            </div>
        </div>
        <!-- LinkedIn -->
        <div class="flex gap-x-4">
            <div class="flex-none">
                <span class="sr-only">LinkedIn</span>
                <x-icons.linkedin />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white" href="https://www.linkedin.com/in/elwinwm"
                    target="_blank">Elwin M</a><x-icons.new-tab /></div>
        </div>
        <!-- GitHub -->
        <div class="flex gap-x-4">
            <div class="flex-none">
                <span class="sr-only">GitHub</span>
                <x-icons.github />
            </div>
            <div class="flex gap-2"><a class="link link-underline hover:text-white" href="https://github.com/Elwin-M"
                    target="_blank">Elwin M</a><x-icons.new-tab /></div>
        </div>
        <!-- Location -->
        <div class="flex gap-x-4">
            <div class="flex-none">
                <span class="sr-only">Location</span>
                <x-icons.location />
            </div>
            <div>Ontario, Canada</div>
        </div>
    </div>
</div>
