<?php

namespace App\Livewire\Projects;

use App\Traits\WithChangePage;
use Livewire\Component;

class Random extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.projects.random');
    }
}
