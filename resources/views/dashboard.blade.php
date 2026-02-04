@php
use App\DashboardRole;

$roleParam = request('role', 'super_admin');
$role = DashboardRole::tryFrom($roleParam) ?? DashboardRole::SUPER_ADMIN;
@endphp

<x-layouts::app :title="__('Dashboard') . ' - ' . $role->label()">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        @switch($role)
            @case(DashboardRole::SUPER_ADMIN)
                <livewire:dashboards.super-admin-dashboard />
                @break
            @case(DashboardRole::ADMIN)
                <livewire:dashboards.admin-dashboard />
                @break
            @case(DashboardRole::REGISTRAR)
                <livewire:dashboards.registrar-dashboard />
                @break
            @case(DashboardRole::FINANCE)
                <livewire:dashboards.finance-dashboard />
                @break
            @case(DashboardRole::TEACHER)
                <livewire:dashboards.teacher-dashboard />
                @break
            @case(DashboardRole::STUDENT)
                <livewire:dashboards.student-dashboard />
                @break
            @case(DashboardRole::PARENT)
                <livewire:dashboards.parent-dashboard />
                @break
        @endswitch
    </div>
</x-layouts::app>