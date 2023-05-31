<?php

namespace App\Observers;

use App\Models\PaquetesModel;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;


class PaqueteObserver
{

    public function created(PaquetesModel $paquete): void
    {
        $paquete = new Registro();
        if(Auth::guest()){
            $paquete->usuario = "Seeder";
        }else{
            $paquete->servicio = Auth::user()->nombre;
        }

        $paquete->registro = 'se creó el usuario : ---> ' . $paquete->nombre;
        $paquete->save();
    }

    public function updated(PaquetesModel $paquete): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'se ha  actualizado el paquete: ' . $paquete->nombre;
        $registro->save();
    }


    public function deleted(PaquetesModel $paquete): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'Se  eliminó el paquete: ' . $paquete->nombre;
        $registro->save();
    }




}
