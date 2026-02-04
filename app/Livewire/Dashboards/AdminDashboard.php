<?php

namespace App\Livewire\Dashboards;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render(): \Illuminate\View\View
    {
        return view('livewire.dashboards.admin-dashboard');
    }
}
