<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',

        'App\Models\EventosModel' =>'App\Policies\EventoPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        session_start();

        if (isset($_SESSION['AuthGuard'])) {
            Auth::setDefaultDriver($_SESSION['AuthGuard']);
        }

        $this->registerPolicies();

        Gate::define('forbidden', function ($user) {
            return abort(403, 'Acceso denegado');
        });
    }
}
