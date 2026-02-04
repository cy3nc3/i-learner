<?php

namespace App\Livewire\Dashboards;

use Livewire\Component;

class StudentDashboard extends Component
{
    public function render(): \Illuminate\View\View
    {
        return view('livewire.dashboards.student-dashboard');
    }
}
