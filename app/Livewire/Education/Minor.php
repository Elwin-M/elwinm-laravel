<?php

namespace App\Livewire\Education;

use App\Traits\WithChangePage;
use Livewire\Component;

class Minor extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.education.minor');
    }
}
