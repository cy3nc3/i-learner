<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class UserManager extends Component
{
    public function render(): \Illuminate\View\View
    {
        return view('livewire.admin.user-manager');
    }
}
