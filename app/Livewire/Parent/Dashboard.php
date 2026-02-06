<?php

namespace App\Livewire\Parent;

use Livewire\Component;

class Dashboard extends Component
{

    public function mount()
    {
        $this->authorize('view-parent-portal');
    }

    public function render()
    {
        return view('livewire.parent.dashboard')
            ->layout('layouts.app');
    }
}
