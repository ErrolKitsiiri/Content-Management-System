<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.users.index')->layout('layouts.app');
    }
}
