<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\PaquetesModel;
use Illuminate\Auth\Access\Response;

class PaquetePolicy
{


    public function edit(Cliente $authUser, PaquetesModel $paquetes)
    {

        return  $authUser->id == $paquetes->gerente_id;
    }

    public function delete(Cliente $usuario, PaquetesModel $paquetes): bool
    {

        return $usuario->id == $paquetes->gerente_id;
    }

    public function insercion(Usuarios $usuario, PaquetesModel $paquetes): bool
    {

        return $usuario->Roles == 'Gerente';
    }
}
