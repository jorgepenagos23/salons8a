<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {


        DB::table('usuarios')->insert([
            'nombre' => 'Hugo',
            'usuario' => 'Hugo',
            'Roles' => 'Cliente',
            'apellidos' => 'Pérez García',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '1234567890',
            'edad' => 30,
            'email' => 'kkan@gmail.com',
            'password' => Hash::make('123456'),
        ]);


        DB::table('usuarios')->insert([
            'nombre' => 'Paco',
            'usuario' => 'Paco',
            'Roles' => 'Cliente',
            'apellidos' => 'Lopez Diaz',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '4352545435',
            'edad' => 30,
            'email' => 'paqto@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Luis',
            'usuario' => 'Luis',

            'Roles' => 'Cliente',
            'apellidos' => 'Gonzales G',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '9982456235',
            'edad' => 30,
            'email' => 'is@gmail.com',
            'password' => Hash::make('123456'),
        ]);



        DB::table('usuarios')->insert([
            'nombre' => 'Carlos',
            'usuario' => 'carlos',
            'Roles' => 'Gerente',
            'apellidos' => 'Lopez Diaz',
            'direccion' => 'Calle Secundaria #456',
            'Telefono' => '9611702282',
            'edad' => 35,
            'email' => 'ankka@gmail.com',
            'password' => Hash::make('abcdef'),
        ]);
    }
}
