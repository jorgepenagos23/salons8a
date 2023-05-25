<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {

    DB::table('clientes')->insert([
        'nombre' => 'Nombre 1',
        'usuario' => 'usuario1',
        'apellidos' => 'Apellidos 1',
        'direccion' => 'Dirección 1',
        'telefono' => 'Teléfono 1',
        'edad' => 25,
        'email' => 'usuario1@example.com',
        'password' => Hash::make('123456'),
        'fecha_nacimiento' => '00-00-0000',
    ]);

    DB::table('clientes')->insert([
        'nombre' => 'Nombre 2',
        'usuario' => 'usuario2',
        'apellidos' => 'Apellidos 2',
        'direccion' => 'Dirección 2',
        'telefono' => 'Teléfono 2',
        'edad' => 30,
        'email' => 'usuario2@example.com',
        'password' => Hash::make('123456'),
        'fecha_nacimiento' => '00-00-0000',
    ]);

    // Agregar más usuarios si es necesario
}
}
