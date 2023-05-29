<?php

namespace App\Policies;

use App\Models\PaquetesModel;
use App\Models\Gerente;
use App\Models\Usuarios;

use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Access\Response;

class PaquetePolicy
{


    public function edit(Usuarios $authUser, PaquetesModel $paquetes ){

        return  $authUser->id == $paquetes->gerente_id;
    }

    public function delete(Usuarios $usuario, PaquetesModel $paquetes): bool
    {
            if ($usuario->id == $paquetes->gerente_id) {


        }
        return false;
    }

    public function insercion(Usuarios $usuario, PaquetesModel $paquetes): bool
    {
          
        return $usuario->Roles == 'Gerente';
    }



}






