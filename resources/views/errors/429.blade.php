<x-layouts.error>
    Too Many Requests
    <x-slot:error>
        {{ $exception->getMessage() }}
    </x-slot:error>
</x-layouts.error>
