<?php

namespace App\Livewire\Admin\Clients;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.clients.create')->layout('layouts.app');
    }
}
