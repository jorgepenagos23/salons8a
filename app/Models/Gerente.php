<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Gerente extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'gerentes';
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

    // Resto de la implementación del modelo

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return $this->{$this->getRememberTokenName()};
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string|null  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->{$this->getRememberTokenName()} = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }

}
