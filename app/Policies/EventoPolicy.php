<?php

namespace App\Policies;

use App\Models\EventosModel;
use App\Models\Usuarios;
use Illuminate\Auth\Access\Response;

class EventoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuarios $usuarios): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuarios $usuarios, EventosModel $eventosModel): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuarios $usuarios): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuarios $usuarios, EventosModel $eventosModel): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuarios $usuarios, EventosModel $eventosModel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuarios $usuarios, EventosModel $eventosModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuarios $usuarios, EventosModel $eventosModel): bool
    {
        //
    }
}
