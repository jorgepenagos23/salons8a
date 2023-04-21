<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoServicio extends Model
{
    use HasFactory;

    protected $table = 'evento_servicio';

    public function evento()
    {
        return $this->belongsTo(EventosModel::class);
    }

    public function servicio()
    {
        return $this->belongsTo(ServiciosModel::class);
    }
}
