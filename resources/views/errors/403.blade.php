<x-layouts.error>
    Forbidden
    <x-slot:error>
        {{ $exception->getMessage() }}
    </x-slot:error>
</x-layouts.error>
