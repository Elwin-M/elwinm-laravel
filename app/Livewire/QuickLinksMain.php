<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class QuickLinksMain extends Component
{
    public $routeCategories;
    public $current;

    public function mount()
    {
        $this->current = Route::getCurrentRoute()->uri();
        $routes = Route::getRoutes();

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
            }
        }
    }

    public function render()
    {
        return view('livewire.quick-links-main');
    }
}
