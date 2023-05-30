<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaquetesModel extends Model
{
    protected $table = 'paquetes';
    protected $primaryKey = 'id_paquete';

    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'costo',
        'estado',
        'capacidad',

    ];

    public function eventos()
    {
        return $this->hasMany(EventosModel::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(ServiciosModel::class);
    }




}
