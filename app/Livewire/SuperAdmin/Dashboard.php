<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;

class Dashboard extends Component
{

    public function mount()
    {
        $this->authorize('super-admin');
    }

    public function render()
    {
        return view('livewire.super-admin.dashboard')
            ->layout('layouts.app');
    }
}
