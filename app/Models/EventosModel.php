<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Abono;

class EventosModel extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $fillable = [
        'id',
        'cliente_id',
        'id_paquete',
        'nombre',
        'descripción',
        'fecha_evento',
        'estado',
        'created_at',
        'updated_at',

    ];


    public function paquetes()
    {
        return $this->belongsToMany(PaquetesModel::class);

    }

    public function servicios()
{
    return $this->belongsToMany(ServiciosModel::class);
}

        public function abonos()
{
    return $this->hasMany(Abono::class);
}


}
