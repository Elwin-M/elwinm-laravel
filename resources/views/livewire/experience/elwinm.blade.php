@section('pageTitle', 'Short')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>

    <p>
        CHANGEME
    </p>
</div>
