<?php

namespace App\Livewire\SkillsTools;

use App\Traits\WithChangePage;
use Livewire\Component;

class SkillsTools extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.skills-tools.skills-tools');
    }
}
