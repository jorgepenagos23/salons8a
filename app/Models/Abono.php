<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuarios;

class Abono extends Model
{
    use HasFactory;
    protected $table = 'abono';

    protected $fillable = [
        'id',
        'fecha_pago',
        'abono_cantidad',
        'cliente_id',
        'id_paquete',




    ];

    public function evento()
    {
        return $this->belongsTo(EventosModel::class);
    }


    public function abonos()
    {
        return $this->hasMany(Abono::class);
    }

    public function usuarios()
    {
        return $this->belongsTo(Usuario::class.'cliente_id');
    }


}
