{{-- @php
    $routes = Route::getRoutes();
    $routeCategories = [];
    foreach ($routes as $route) {
        $name = $route->getName();

        if ($name && strpos($name, 'elwinm') !== false) {
            $parts = explode('/', $name);

            $category = $parts[1]; // Extract the category name from the route
            $page = end($parts); // Get the last part of the route as the page name

            if (!isset($routeCategories[$category])) {
                $routeCategories[$category] = [];
            }

            // Build the URL associated with the route name
            //  $url = url()->route($name); // Or route($name) depending on your requirement
            $uri = $route->uri();

            // Remove the 'elwinm/' prefix and add the page name to the respective category
            $routeCategories[$category][] = [
                'page' => str_replace('elwinm/', '', $page),
                'uri' => $uri,
            ];
        }
    }

@endphp

<div class="text-base lg:text-sm">
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
</div> --}}
