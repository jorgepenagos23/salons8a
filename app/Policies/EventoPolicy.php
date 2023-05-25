<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\EventosModel;
use Illuminate\Foundation\Auth\User as Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

use Illuminate\Auth\Access\Response;

class EventoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Cliente $usuario): bool
    {
        if ($usuario instanceof Cliente) return true;
        else return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Cliente $usuario, EventosModel $eventosModel): bool
    {

        if ($usuario->id == $eventosModel->usuario) return true;
        else return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Cliente $usuario): bool
    {
        if ($usuario instanceof Cliente) return true;
       else return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Cliente $usuario, EventosModel $eventosModel): bool
    {
        if ($usuario->id == $eventosModel->cliente_id) {
            if ($eventosModel->estado == '0'){
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Cliente $usuario, EventosModel $eventosModel): bool
    {

        if ($usuario->id == $eventosModel->cliente_id) {
            if ($eventosModel->estado == '0'){
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }


    }



}
