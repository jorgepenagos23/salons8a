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

  // Obtener el evento correspondiente al abono actual public function getCostoAttribute()
   // Obtener el evento correspondiente al abono actual {
      // Obtener el evento correspondiente al abono actual  $costoServicio = $this->ServiciosModel->costo;
      // Obtener el evento correspondiente al abono actual  $costoPaquete = $this->PaquetesModel->costo;
      // Obtener el evento correspondiente al abono actual  $costoTotal = $costoServicio + $costoPaquete;

       // Obtener el evento correspondiente al abono actual return $costoTotal;
   // Obtener el evento correspondiente al abono actual }


}
