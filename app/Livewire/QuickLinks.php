<?php

namespace App\Livewire;

use Livewire\Component;
use App\Traits\WithChangePage;

class QuickLinks extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.quick-links');
    }
}
