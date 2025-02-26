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
        usability.
    </p>

    <x-modules.bar-horizontal />
    <h2 class="py-4 text-2xl tracking-tight text-white font-display">
        Image comparison
    </h2>

    {{-- <x-modules.dropdown>
        Click to show before and after
        <x-slot:content>
            <div class="pb-6">
                <img class="rounded-md" src="{{ asset('images/old.elwinm.ca.png') }}"
                    alt="Old elwinm website screenshot" width="full">
            </div>
        </x-slot:content>
    </x-modules.dropdown> --}}
    <!-- Start -->
    <x-modules.description-list-main-outer>
        <!-- First Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Before </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/old.elwinm.ca.png') }}" alt="Old elwinm website screenshot"
                    width="full">
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
        
        <!-- Second Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> After </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                <img class="rounded-md" src="{{ asset('images/old.elwinm.ca.png') }}" alt="Old elwinm website screenshot"
                    width="full">
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
    </x-modules.description-list-main-outer>
    <!-- End -->
</div>
