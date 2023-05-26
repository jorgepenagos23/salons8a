<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\PaquetesModel;
use Illuminate\Auth\Access\Response;

class PaquetePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Cliente $cliente): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Cliente $cliente, PaquetesModel $paquetesModel): bool
    {
        


        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Cliente $cliente): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Cliente $cliente, PaquetesModel $paquetesModel): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Cliente $cliente, PaquetesModel $paquetesModel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Cliente $cliente, PaquetesModel $paquetesModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Cliente $cliente, PaquetesModel $paquetesModel): bool
    {
        //
    }
}
