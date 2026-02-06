<?php

namespace App\Livewire\Finance;

use Livewire\Component;

class Dashboard extends Component
{

    public function mount()
    {
        $this->authorize('manage-finance');
    }

    public function render()
    {
        return view('livewire.finance.dashboard')
            ->layout('layouts.app');
    }
}
