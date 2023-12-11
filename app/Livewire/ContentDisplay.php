<?php

namespace App\Livewire;

use Livewire\Component;
use App\Traits\WithChangePage;
use Livewire\Attributes\On;

class ContentDisplay extends Component
{
    use WithChangePage;

    // public function mount()
    // {
    //     // $this->content = 'pages.test';
    // }

    #[On('page-changed')]
    public function changeContent($page)
    {
        $this->content = $page;
    }

    public function render()
    {
        return view('livewire.content-display');
    }
}
