<?php

namespace App\Livewire\Dashboards;

use Livewire\Component;

class TeacherDashboard extends Component
{
    public function render(): \Illuminate\View\View
    {
        return view('livewire.dashboards.teacher-dashboard');
    }
}
