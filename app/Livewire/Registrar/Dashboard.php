<?php

namespace App\Livewire\Registrar;

use Livewire\Component;

class Dashboard extends Component
{

    public function mount()
    {
        $this->authorize('manage-registry');
    }

    public function render()
    {
        return view('livewire.registrar.dashboard')
            ->layout('layouts.app');
    }
}
