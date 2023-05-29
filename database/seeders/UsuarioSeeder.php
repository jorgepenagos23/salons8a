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
        $usuario->nombre = 'cristiano';
        $usuario->usuario = 'CRISTIANO';
        $usuario->apellidos = 'ronaldo';
        $usuario->direccion = 'Dirección';
        $usuario->telefono = 'Teléfono';
        $usuario->edad = 26;
        $usuario->email = 'cr7@gmail.com';
        $usuario->Roles = 'Cliente';
        $usuario->password = Hash::make('cr7');
        $usuario->save();


        $usuario = new Usuarios();
        $usuario->nombre = 'gerardo ';
        $usuario->usuario = 'gera';
        $usuario->apellidos = 'perez lopez';
        $usuario->direccion = 'Dirección';
        $usuario->telefono = 'Teléfono';
        $usuario->edad = 65;
        $usuario->email = 'gera@gmail.com';
        $usuario->Roles = 'Cliente';
        $usuario->password = Hash::make('gera');
        $usuario->save();


        // Agregar más registros de usuarios si es necesario
    }

}


