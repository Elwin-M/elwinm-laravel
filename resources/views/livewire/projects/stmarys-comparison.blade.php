@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
        <x-slot:date> Website Update </x-slot:date>
    </x-modules.title-subtitle>

    <x-modules.bar-horizontal />

    <p class="pt-4 content-main-group">
        <span class="text-base font-semibold leading-6 text-white">Technologies Used:</span> Laravel, Livewire, Tailwind
        CSS, Alpine.js
    </p>

    <h3 class="text-xl tracking-tight text-white font-display">
        Overview
    </h3>
    <p class="pt-4 content-main-group">
        In this project, I updated the old website to be more reactive, with updated features and interface.
        Below, you can see a side-by-side comparison showcasing the improvements in design, functionality, and
        usability. Many features were added upon request, the code was simplified greatly, and overall performance was improved.
    </p>

    <p class="pt-4 content-main-group">
        The home page is a kiosk style display that auto updates data when edited in the back-end, as well as rotates displays based on specified timers.
    </p>

    <x-modules.bar-horizontal />
    <h2 class="py-4 text-2xl tracking-tight text-white font-display">
        Image comparison
    </h2>

    <!-- Start -->
    <x-modules.description-list-main-outer>
        <!-- First Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Before </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysBEFOREunscaledpage.png') }}" width="full">
                Old pages feature unscaled elements that are hard to see on larger displays.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysBEFOREemptypage.png') }}" width="full">
                Old pages displayed when there were no entries to display.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysBEFOREoldimages.png') }}" width="full">
                Images table missed needed features.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysBEFOREoldtableandui.png') }}" width="full">
                Old table displayed all items at the same time. Lacked pagination, sorting, and other quality of life features.
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
        
        <!-- Second Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> After </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERscaledhome.png') }}" width="full">
                Added proper scaling and increased visibility as per request of users.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERmultipleentries.png') }}" width="full">
                Added option to add multiple entries at the same time.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERupdatedtablesandui.png') }}" width="full">
                Reworked entire table display to incorporate search, pagination, bulk actions, and to enable entries with a single click.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERtableheader.png') }}" width="full">
                Close-up of table headers.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERautoscroll.png') }}" width="full">
                Not visible in screenshot, but added auto-scrolling for pages that featured large sets of entries.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERannouncementspage.png') }}" width="full">
                Added a new announcements section.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERsettingspage.png') }}" width="full">
                Added a settings page to hide/display different components, as well as gave the ability to set timers for components. Also added a fallback in case no components are enabled.
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/stmarys-comparison/stmarysAFTERimagespage.png') }}" width="full">
                Updated images to have their own individual timers for the slideshow.
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
    </x-modules.description-list-main-outer>
    <!-- End -->
</div>
