<?php

namespace App\Livewire\Student;

use Livewire\Component;

class Dashboard extends Component
{

    public function mount()
    {
        $this->authorize('view-student-portal');
    }

    public function render()
    {
        return view('livewire.student.dashboard')
            ->layout('layouts.app');
    }
}
