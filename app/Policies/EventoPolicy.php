<?php

namespace App\Policies;

use App\Models\Cliente;
use Illuminate\Foundation\Auth\User as Usuario;

use App\Models\Usuarios;
use App\Models\EventosModel;
use App\Models\User;

class EventoPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function edit(Usuarios $authUser, EventosModel $eventos ){


        return  $authUser->id == $eventos->cliente_id;
    }



    public function delete(Usuarios $authUser, EventosModel $eventos)
    {
        $es_propietario = $authUser->id == $eventos->cliente_id;
        $esta_sin_evento = $eventos->Usuarios ? $eventos->Usuarios->count() == 0 : true;
        return $es_propietario && $esta_sin_evento;
    }

}
