<?php

namespace App\Livewire\Dashboards;

use Livewire\Component;

class ParentDashboard extends Component
{
    public function render(): \Illuminate\View\View
    {
        return view('livewire.dashboards.parent-dashboard');
    }
}
