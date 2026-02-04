<?php

namespace App\Livewire\Dashboards;

use Livewire\Component;

class SuperAdminDashboard extends Component
{
    public function render(): \Illuminate\View\View
    {
        return view('livewire.dashboards.super-admin-dashboard');
    }
}
