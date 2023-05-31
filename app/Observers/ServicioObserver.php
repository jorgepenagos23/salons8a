<?php

namespace App\Observers;

use App\Models\Registro;
use App\Models\ServiciosModel;
use Illuminate\Support\Facades\Auth;


class ServicioObserver
{
    public function created(ServiciosModel $servicio): void
    {
        $servicio = new Registro();
        if(Auth::guest()){
            $servicio->usuario = "Seeder";
        }else{
            $servicio->servicio = Auth::user()->nombre;
        }

        $servicio->registro = 'se creó el usuario : ---> ' . $servicio->nombre;
        $servicio->save();
    }


    public function updated(ServiciosModel $servicio): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'se ha  actualizado el servicio :  --->' . $servicio->nombre;
        $registro->save();
    }


    public function deleted(ServiciosModel $servicio): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'Se  eliminó el paquete:  --->' . $servicio->nombre;
        $registro->save();
    }



}
