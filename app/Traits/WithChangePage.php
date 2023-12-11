<?php

// For changing the livewire page

namespace App\Traits;

trait WithChangePage
{
    public $content;
    public $menusConfig;

    public function mount()
    {
        $this->menusConfig = config('menus');
        $this->content = 'pages.test';
    }

    public function changeContent($page)
    {
        $this->dispatch('page-changed', $page);
    }

}
