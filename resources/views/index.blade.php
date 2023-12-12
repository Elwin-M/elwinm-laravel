{{-- @extends('app') --}}
@section('pageTitle')
    Index
@endsection
<x-layouts.app>
    <!-- Nav bar and menu -->
    <x-modules.nav-bar />
    <x-modules.mobile-menu />
    <!-- Hero section -->
    <x-modules.hero-section />
    <!-- Livewire component that displays page -->
    <livewire:content-display />
</x-layouts.app>
