<?php

// For changing the livewire page

namespace App\Traits;

use Illuminate\Support\Facades\Route;

trait WithChangePage
{
    public $routeCategories;
    public $current; // Required for the highlighting
    public $currentPageTitle;
    public $currentPageSub;
    public $previousPage;
    public $nextPage;

    public function mount()
    {
        $this->current = Route::getCurrentRoute()->uri();
        $routes = Route::getRoutes();

        // To get the title and subheading for each page
        $currentName = explode('/', Route::getCurrentRoute()->getName());
        $this->currentPageTitle = $currentName[1];
        $this->currentPageSub = end($currentName);

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
                $uri = $route->uri();

                // Remove the 'elwinm/' prefix and add the page name to the respective category
                $this->routeCategories[$category][] = [
                    'page' => str_replace('elwinm/', '', $page),
                    'uri' => $uri,
                ];

                // For pagination
                $allRoutes[] = [
                    'page' => $page,
                    'uri' => $uri,
                ];
            }
        }

        // For pagination
        $currentPage = Route::getCurrentRoute()->uri();

        $pageURIs = array_column($allRoutes, 'uri');
        $currentIndex = array_search($currentPage, $pageURIs);

        $previousPageIndex = ($currentIndex - 1 >= 0) ? $currentIndex - 1 : null;
        $nextPageIndex = ($currentIndex + 1 < count($allRoutes)) ? $currentIndex + 1 : null;

        $this->previousPage = ($previousPageIndex !== null) ? $allRoutes[$previousPageIndex] : null;
        $this->nextPage = ($nextPageIndex !== null) ? $allRoutes[$nextPageIndex] : null;
    }
}
