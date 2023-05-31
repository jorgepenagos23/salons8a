<?php

namespace App\Observers;

use App\Models\Registro;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;

class UsuarioObserver
{
    public function created(Usuarios $usuario): void
    {
        $registro = new Registro();
        if(Auth::guest()){
            $registro->usuario = "Seeder";
        }else{
            $registro->usuario = Auth::user()->nombre;
        }

        $registro->registro = 'se creó el usuario : ---> ' . $usuario->nombre;
        $registro->save();
    }

    public function updated(Usuarios $usuario): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'se ha  actualizado el usuario :  --->' . $usuario->nombre;
        $registro->save();
    }


    public function deleted(Usuarios $usuario): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'Se  eliminó el usuario:  --->' . $usuario->nombre;
        $registro->save();
    }



}
