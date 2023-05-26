<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\NombreModelo;
use Illuminate\Auth\Access\Response;

class NombrePolitica
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
    public function view(Cliente $cliente, NombreModelo $nombreModelo): bool
    {
        //
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
    public function update(Cliente $cliente, NombreModelo $nombreModelo): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Cliente $cliente, NombreModelo $nombreModelo): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Cliente $cliente, NombreModelo $nombreModelo): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Cliente $cliente, NombreModelo $nombreModelo): bool
    {
        //
    }
}
