<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\Usuarios;
use App\Models\PaquetesModel;
use Illuminate\Auth\Access\Response;

class PaquetePolicy
{


    public function edit(Usuarios $authUser, PaquetesModel $paquetes)
    {

        return  $authUser->id == $paquetes->gerente_id;
    }

    public function delete(Usuarios $usuario, PaquetesModel $paquetes): bool
    {

        return $usuario->id == $paquetes->gerente_id;
    }

    public function insercion(Usuarios $usuario, PaquetesModel $paquetes): bool
    {

        return $usuario->Roles == 'Gerente';
    }
}
