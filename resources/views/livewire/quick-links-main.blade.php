<div class="text-base lg:text-sm" x-data="{ activePage: @entangle('current')}">
    <div role="list" class="space-y-9">
        <!-- Titles and links components -->
        @foreach ($routeCategories as $category => $pages)
            <x-modules.quick-links-title>
                {{ $category }}
                <x-slot:subSlot>
                    @foreach ($pages as $route)
                        <x-modules.quick-links-list-item :uri="$route['uri']">
                            {{ $route['page'] }}
                        </x-modules.quick-links-list-item>
                    @endforeach
                </x-slot:subSlot>
            </x-modules.quick-links-title>
        @endforeach
    </div>
</div>
