<?php

namespace App\Policies;

use App\Models\Usuarios;
use App\Models\PaquetesModel;
use Illuminate\Auth\Access\HandlesAuthorization;


class UsuarioPolicy
{
    use HandlesAuthorization;



        public function autor(Usuarios $usario, PaquetesModel $id_paquete ){

            if($usuario->id == $id_paquete->id){

              return true;
            }else{
                return false;

            }

        }



}
