<?php

namespace App\Providers;
use App\Models\Usuarios;
use App\Models\PaquetesModel;


// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Policies\PaquetePolicy;
use App\Policies\EventoPolicy;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

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

    }
}
