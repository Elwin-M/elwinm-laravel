<?php

namespace App\Livewire;

use Livewire\Component;
use App\Traits\WithChangePage;
use Livewire\Attributes\On;

class ContentDisplay extends Component
{
    use WithChangePage;

    #[On('page-changed')]
    public function changeContent($menu, $item)
    {
        $this->title = $menu;
        $this->subheading = $item;

        $pageDetails = $this->getPageDetails($menu, $item);
        $this->content = $pageDetails['link'];
        $this->pageTitle = $pageDetails['title'];


        // $this->content = $link;
        // $this->pageTitle = $$this->title;
        // $this->render();
    }

    public function getPageDetails($menu, $item)
    {
        $collection = collect($this->menusConfig);
        $pageDetails = $collection[$menu][$item];

        if (!view()->exists($pageDetails['link']))
        {
            $pageDetails['link'] = 'pages.404';
            $pageDetails['title'] = 'Page Not Found';
        }

        return $pageDetails;
    }

    public function render()
    {
        return view('livewire.content-display');
    }
}
