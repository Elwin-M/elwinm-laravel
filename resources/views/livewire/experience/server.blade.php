@section('pageTitle', 'ElwinM - System Administrator')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        CHANGEME
    </p>
        <!-- Start -->
        <x-modules.description-list-main-outer>
            <!-- First Box -->
            <x-modules.description-list-main-inner>
                <x-slot:title> Responsibilities </x-slot:title>
                <!-- List -->
                <x-modules.description-list-item>
                    CHANGEME
                </x-modules.description-list-item>
            </x-modules.description-list-main-inner>
            <!-- Second Box -->
            <x-modules.description-list-main-inner>
                <x-slot:title> Achievements </x-slot:title>
                <!-- List -->
                <x-modules.description-list-item>
                    CHANGEME
                </x-modules.description-list-item>
            </x-modules.description-list-main-inner>
        </x-modules.description-list-main-outer>
        <!-- End -->
</div>
