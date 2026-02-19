<?php

namespace App\Livewire\About;

use App\Traits\WithChangePage;
use Livewire\Component;

class Long extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.about.long');
    }
}
