<?php

// For changing the livewire page

namespace App\Traits;

trait WithChangePage
{
    public $content;
    public $menusConfig;
    public $title;
    public $pageTitle;
    public $subheading;

    public function mount()
    {
        $this->menusConfig = config('menus');
        foreach ($this->menusConfig as $menu => $subItem)
        {
            $this->title = $menu;
            foreach ($subItem as $item => $link)
            {
                $this->subheading = $item;
                $this->content = $link['link'];
                $this->pageTitle = $link['title'];
                break;
            }
            break;
        }
    }

    public function changeContent($menu, $item)
    {
        $this->dispatch('page-changed', $menu, $item);
    }

}
