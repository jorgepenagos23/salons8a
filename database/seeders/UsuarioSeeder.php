<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Gerente;
use App\Models\Usuario;
use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class UsuarioSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('usuarios')->insert([
            'nombre' => 'Tomas',
            'usuario' => 'Tomas',
            'Roles' => 'Empleado',
            'apellidos' => 'Tomas García',
            'direccion' => 'Av. Tomas #123',
            'Telefono' => '1234567890',
            'edad' => 30,
            'email' => 'Tomas@gmail.com',
            'password' => Hash::make('Tomas'),
            'token' => Str::random(60),

        ]);

        // Agregar más registros de usuarios si es necesario
    }

}


