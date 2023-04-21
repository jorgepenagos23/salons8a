<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiciosModel extends Model
{
    use HasFactory;
    protected $table = 'servicios';


    protected $fillable = [
        'id',
        'nombre',
        'descripción',
        'precio',
        'created_at',
        'updated_at',

    ];

    public function paquetes()
    {
        return $this->belongsToMany(PaquetesModel::class);
    }

    public function eventos()
    {
        return $this->belongsToMany(EventosModel::class);
    }




}
