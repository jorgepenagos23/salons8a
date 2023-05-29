<?php

namespace App\Observers;

use App\Models\EventosModel;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;

class EventoObserver
{
    public function created(EventosModel $evento): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'se creó el evento:  -->' . $evento->nombre;
        $registro->save();
    }

    public function updated(EventosModel $evento): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'se ha  actualizado el evento: -->' . $evento->nombre;
        $registro->save();
    }


    public function deleted(EventosModel $evento): void
    {
        $registro = new Registro();
        $registro->usuario = Auth::user()->nombre;
        $registro->accion = 'Se  eliminó el evento:  -->' . $evento->nombre;
        $registro->save();
    }


}
