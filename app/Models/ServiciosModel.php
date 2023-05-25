<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiciosModel extends Model
{
    use HasFactory;
    protected $table = 'servicios';



    protected $fillable = [
        'nombre',
        'descripción',
        'precio',


    ];

    public function paquetes()
    {
        return $this->belongsToMany(PaquetesModel::class);
    }

    public function eventos()
    {
        return $this->belongsToMany(EventosModel::class);
    }

    public function gerente(){
        return $this->belongsTo(Gerente::class);
    }



}
