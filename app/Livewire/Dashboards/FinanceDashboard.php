<?php

namespace App\Livewire\Dashboards;

use Livewire\Component;

class FinanceDashboard extends Component
{
    public function render(): \Illuminate\View\View
    {
        return view('livewire.dashboards.finance-dashboard');
    }
}
