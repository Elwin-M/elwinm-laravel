<x-layouts.error>
    The page you're looking for doesn't exist!
    <x-slot:error>
        {{ $exception->getMessage() }}
    </x-slot:error>
</x-layouts.error>
