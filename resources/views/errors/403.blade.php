<x-layouts.error>
    Forbidden. You do not have access to this resource.
    <x-slot:error>
        {{ $exception->getMessage() }}
    </x-slot:error>
</x-layouts.error>
