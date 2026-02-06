<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Enums\UserRole;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureDefaults();



        Gate::before(function (User $user, $ability) {
            return $user->role === UserRole::SuperAdmin ? true : null;
        });
        Gate::define('super-admin', fn (User $user) => $user->role === UserRole::SuperAdmin);
        Gate::define('admin-access', fn (User $user) => $user->role === UserRole::Admin);
        Gate::define('manage-registry', fn (User $user) => $user->role === UserRole::Registrar);
        Gate::define('manage-finance', fn (User $user) => $user->role === UserRole::Finance);
        Gate::define('manage-academics', fn (User $user) => $user->role === UserRole::Teacher);
        Gate::define('view-student-portal', fn (User $user) => $user->role === UserRole::Student);
        Gate::define('view-parent-portal', fn (User $user) => $user->role === UserRole::Parent);
    }

    /**
     * Configure default behaviors for production-ready applications.
     */
    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(fn (): ?Password => app()->isProduction()
            ? Password::min(12)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            : null
        );
    }
}
