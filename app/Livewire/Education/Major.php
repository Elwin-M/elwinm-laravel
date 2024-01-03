<?php

namespace App\Livewire\Education;

use App\Traits\WithChangePage;
use Livewire\Component;

class Major extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.education.major');
    }
}
