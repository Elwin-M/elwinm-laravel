@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
        <x-slot:date> 04/2024 - 12/2024 CONTRACT</x-slot:date>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        TODO
    </p>
    <!-- Start -->
    <x-modules.description-list-main-outer>
        <!-- First Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Responsibilities </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                TODO
            </x-modules.description-list-item>

        </x-modules.description-list-main-inner>
        <!-- Second Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Achievements </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                TODO
            </x-modules.description-list-item>

        </x-modules.description-list-main-inner>
    </x-modules.description-list-main-outer>
    <!-- End -->
</div>
