<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'tipo_usuario',
        'apellidos',
        'direccion',
        'telefono',
        'edad',
        'email',
        'contraseña',
    ];

    protected $hidden = [
        'contraseña',
    ];
}
