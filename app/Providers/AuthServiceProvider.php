<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        /* define a super admin user role */
        Gate::define('is-superadmin', function ($user) {
            return $user->role == 'superadmin';
        });

        /* define a admin user role */
        Gate::define('is-admin', function ($user) {
            return $user->role == 'admin';
        });

        /* define a volunter role */
        Gate::define('is-volunteer', function ($user) {
            return $user->role == 'volunteer';
        });

        /* define a user role */
        Gate::define('is-user', function ($user) {
            return $user->role == 'user';
        });
    }
}
