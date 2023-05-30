<?php

namespace App\Policies;

use App\Models\ServiciosModel;
use App\Models\Usuarios;
use Illuminate\Auth\Access\Response;

class ServicioPolicy
{



    public function eliminar(Usuarios $usuario, ServiciosModel $servicio): bool
    {

            $sin_uso = $servicio->estado==0;


            return $sin_uso;

    }

    public function agregar(Usuarios $usuario, ServiciosModel $servicio): bool
    {

        return $usuario->Roles == 'Gerente';


    }

    public function editar(Usuarios $authUser, ServiciosModel $servicio): bool
    {

        $es_gerente = $authUser->id == $servicio->cliente_id;
        $esta_sin_uso_elservicio = $servicio->estado == 0;
        return $$es_gerente && $esta_sin_uso_elservicio && $authUser->Roles == 'Gerente' ;



    }


}
