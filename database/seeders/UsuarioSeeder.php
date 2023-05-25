<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Gerente;
use App\Models\Usuario;
use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        $usuario = new Usuarios();
        $usuario->nombre = 'casemiro gonzalez';
        $usuario->apellidos = 'Apellidos';
        $usuario->direccion = 'Dirección';
        $usuario->telefono = 'Teléfono';
        $usuario->edad = 25;
        $usuario->email = 'case@gmail.com';
        $usuario->contraseña = Hash::make('rodri');
        $usuario->save();



        // Agregar más registros de usuarios si es necesario
    }

}


