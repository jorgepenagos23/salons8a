<?php

namespace Database\Seeders\Usuarios;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Juan',
            'tipo_usuario' => 'Cliente',
            'apellidos' => 'Pérez García',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '1234567890',
            'edad' => 30,
            'email' => 'juan@gmail.com',
            'contraseña' => Hash::make('123456'),
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Ana',
            'tipo_usuario' => 'Gerente',
            'apellidos' => 'López Hernández',
            'direccion' => 'Calle Secundaria #456',
            'Telefono' => '0987654321',
            'edad' => 35,
            'email' => 'ana@gmail.com',
            'contraseña' => Hash::make('abcdef'),
        ]);




    }
}
