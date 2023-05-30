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


        $usuario2 = new Usuarios();
        $usuario2->nombre = 'gerardo';
        $usuario2->usuario = 'gera';
        $usuario2->apellidos = 'perez lopez';
        $usuario2->direccion = 'Dirección';
        $usuario2->telefono = 'Teléfono';
        $usuario2->edad = 65;
        $usuario2->email = 'gera@gmail.com';
        $usuario2->Roles = 'Cliente';
        $usuario2->password = Hash::make('gera');
        $usuario2->save();


        // Agregar más registros de usuarios si es necesario
    }

}


