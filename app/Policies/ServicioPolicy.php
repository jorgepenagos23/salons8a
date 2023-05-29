<?php

namespace App\Policies;

use App\Models\ServiciosModel;
use App\Models\Usuarios;
use Illuminate\Auth\Access\Response;

class ServicioPolicy
{


    /**
     * Determine whether the user can view the model.
     */


    /**
     * Determine whether the user can delete the model.
     */
    public function eliminar(Usuarios $usuario, ServiciosModel $servicio): bool
    {

        return $usuario->Roles == 'Gerente';


    }

    public function editar(Usuarios $usuario, ServiciosModel $servicio): bool
    {

        return $usuario->Roles == 'Gerente';


    }


}
