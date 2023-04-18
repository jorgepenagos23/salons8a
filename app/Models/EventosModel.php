<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class EventosModel extends Model
{
    use HasFactory;





    public function servicios(){


    return $this->hasMany(ServiciosModel::class);

    }


    public function paquetes()
    {
        return $this->belongsToMany(PaquetesModel::class);

    }



}
