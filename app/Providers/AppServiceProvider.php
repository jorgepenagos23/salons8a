<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Cliente;
use App\Models\EventosModel;
use App\Models\Gerente;
use App\Models\PaquetesModel;
use App\Models\ServiciosModel;
use App\Models\Usuarios;
use App\Observers\ClienteObserver;
use App\Observers\EventoObserver;
use App\Observers\GerenteObserver;
use App\Observers\PaqueteObserver;
use App\Observers\ServicioObserver;
use App\Observers\UsuarioObserver;

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

      PaquetesModel::observe(PaqueteObserver::class);// Creando el Paquete
      EventosModel::observe(EventoObserver::class);//Creando el Evento
      Usuarios::observe(UsuarioObserver::class);// Creando el Paquete
      ServiciosModel::observe(ServicioObserver::class);//Servicio
    }
}
