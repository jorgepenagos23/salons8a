<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {


    $cliente = new Cliente();
    $cliente->nombre = 'Nombre 1';
    $cliente->usuario = 'usuario 1';
    $cliente->apellidos = 'Apellidos 1';
    $cliente->direccion = 'Direccion 1';
    $cliente->telefono = '1234567890';
    $cliente->edad = 25;
    $cliente->email = 'usuario1@example.com';
    $cliente->password = Hash::make('123456');
    $cliente->fecha_nacimiento = '00-00-0000';
    $cliente->save();    



    $cliente2 = new Cliente();
    $cliente2->nombre = 'Nombre 2';
    $cliente2->usuario = 'usuario 2';
    $cliente2->apellidos = 'Apellidos 2';
    $cliente2->direccion = 'Direccion 2';
    $cliente2->telefono = '9876543210';
    $cliente2->edad = 30;
    $cliente2->email = 'usuario2@example.com';
    $cliente2->password = Hash::make('123456');
    $cliente2->fecha_nacimiento = '00-00-0000';
    $cliente2->save(); 
/* 
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
 */
    // Agregar más usuarios si es necesario
}
}
