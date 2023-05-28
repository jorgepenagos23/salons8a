<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Cliente extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clientes';

    protected $primaryKey = 'id';

    protected $fillable = [

        'nombre',
        'usuario',
        'apellidos',
        'direccion',
        'telefono',
        'edad',
        'email',
        'token_autorizacion',
        'imagen'

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function eventos()
    {
        return $this->hasMany(EventosModel::class);
    }



}
