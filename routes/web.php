<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\SuperAdmin\Dashboard as SuperAdminDashboard;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Registrar\Dashboard as RegistrarDashboard;
use App\Livewire\Finance\Dashboard as FinanceDashboard;
use App\Livewire\Teacher\Dashboard as TeacherDashboard;
use App\Livewire\Student\Dashboard as StudentDashboard;
use App\Livewire\Parent\Dashboard as ParentDashboard;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return match(auth()->user()->role) {
        \App\Enums\UserRole::SuperAdmin => redirect()->route('super_admin.dashboard'),
        \App\Enums\UserRole::Admin => redirect()->route('admin.dashboard'),
        \App\Enums\UserRole::Registrar => redirect()->route('registrar.dashboard'),
        \App\Enums\UserRole::Finance => redirect()->route('finance.dashboard'),
        \App\Enums\UserRole::Teacher => redirect()->route('teacher.dashboard'),
        \App\Enums\UserRole::Student => redirect()->route('student.dashboard'),
        \App\Enums\UserRole::Parent => redirect()->route('parent.dashboard'),
        default => abort(403, 'Unauthorized'),
    };
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'can:super-admin'])->prefix('super-admin')->group(function () {
    Route::get('/dashboard', SuperAdminDashboard::class)->name('super_admin.dashboard');
});

Route::middleware(['auth', 'can:admin-access'])->prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('admin.dashboard');
});

Route::middleware(['auth', 'can:manage-registry'])->prefix('registrar')->group(function () {
    Route::get('/dashboard', RegistrarDashboard::class)->name('registrar.dashboard');
});

Route::middleware(['auth', 'can:manage-finance'])->prefix('finance')->group(function () {
    Route::get('/dashboard', FinanceDashboard::class)->name('finance.dashboard');
});

Route::middleware(['auth', 'can:manage-academics'])->prefix('teacher')->group(function () {
    Route::get('/dashboard', TeacherDashboard::class)->name('teacher.dashboard');
});

Route::middleware(['auth', 'can:view-student-portal'])->prefix('student')->group(function () {
    Route::get('/dashboard', StudentDashboard::class)->name('student.dashboard');
});

Route::middleware(['auth', 'can:view-parent-portal'])->prefix('parent')->group(function () {
    Route::get('/dashboard', ParentDashboard::class)->name('parent.dashboard');
});

require __DIR__.'/settings.php';
