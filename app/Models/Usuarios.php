<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [

        'usuario',
        'nombre',
        'apellidos',
        'direccion',
        'telefono',
        'edad',
        'email',
        'Roles',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



}
