<?php

namespace App\Livewire\Experience;

use App\Traits\WithChangePage;
use Livewire\Component;

class Server extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.experience.server');
    }
}
