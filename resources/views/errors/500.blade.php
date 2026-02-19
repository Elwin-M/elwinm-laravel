<x-layouts.error>
    Server Error
    <x-slot:error>
        {{ $exception->getMessage() }}
    </x-slot:error>
</x-layouts.error>
