<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaquetesModel extends Model
{
    protected $table = 'paquetes';

    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripción',
        'precio',
        'activo',
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
