<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiciosModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
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
