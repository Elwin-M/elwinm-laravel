<?php

namespace App\Livewire;

use App\Traits\WithChangePage;
use Livewire\Component;

class Pagination extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.pagination');
    }
}
