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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('manage-users', function($user){
            return $user->hasAnyRole(['superAdmin']);
        });

        Gate::define('edit-users', function($user){
            return $user->hasAnyRole(['superAdmin']);
        });

        Gate::define('delete-users', function($user){
            return $user->hasAnyRole(['superAdmin']);
        });

        Gate::define('manage-centros', function($user){
            return $user->hasAnyRole(['secretariaCentro']);
        });

        Gate::define('usar-calendario', function($user){
            return $user->hasAnyRole(['secretariaCentro']);
        });
        Gate::define('Dashboard-Secretaria', function($user){
            return $user->hasAnyRole(['secretariaCentro']);
        });
        Gate::define('Dashboard-SuperAdmin', function($user){
            return $user->hasAnyRole(['superAdmin']);
        });
        Gate::define('Dashboard-Paciente', function($user){
            return $user->hasAnyRole(['paciente']);
        });
        Gate::define('Dashboard-AdminCentro', function($user){
            return $user->hasAnyRole(['adminCentro']);
        });
    }
}
