<?php

namespace App\Livewire\Contact;

use App\Traits\WithChangePage;
use Livewire\Component;

class Contact extends Component
{
    use WithChangePage;

    public function render()
    {
        return view('livewire.contact.contact');
    }
}
