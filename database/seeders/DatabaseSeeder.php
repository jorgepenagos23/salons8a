<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'email' => 'hhhhhh@gmail.com',
            'password' => Hash::make('hugo'),
            'token' => Str::random(60),

        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Usuario 2',
            'usuario' => 'Usuario2',
            'Roles' => 'Cliente',
            'apellidos' => 'Gómez',
            'direccion' => 'Calle 2',
            'Telefono' => '0987654321',
            'edad' => 25,
            'email' => 'usuario2@gmail.com',
            'password' => Hash::make('usuario2'),
            'token' => Str::random(60),
        ]);


        DB::table('usuarios')->insert([
            'nombre' => 'Luis',
            'usuario' => 'luis',
            'Roles' => 'Cliente',
            'apellidos' => 'Gonzales G',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '9982456235',
            'edad' => 30,
            'email' => 'llll@gmail.com',
            'password' => Hash::make('luis'),
            'token' => Str::random(60),

        ]);



        DB::table('usuarios')->insert([
            'nombre' => 'Carlos',
            'usuario' => 'Carloss',
            'Roles' => 'Gerente',
            'apellidos' => 'Lopez Diaz',
            'direccion' => 'Calle Secundaria #456',
            'Telefono' => '9611702282',
            'edad' => 35,
            'email' => 'ccccc@gmail.com',
            'password' => Hash::make('abcdef'),
            'token' => Str::random(60),

        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'penagos',
            'usuario' => 'penagos',
            'Roles' => 'Gerente',
            'apellidos' => 'Pérez',
            'direccion' => 'Calle Principal',
            'Telefono' => '9876543210',
            'edad' => 35,
            'email' => 'gerente1@gmail.com',
            'password' => Hash::make('admin'),
            'token' => Str::random(60),
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Gerente2',
            'usuario' => 'Gerente2',
            'Roles' => 'Gerente',
            'apellidos' => 'Gómez',
            'direccion' => 'Calle 2',
            'Telefono' => '0123456789',
            'edad' => 40,
            'email' => 'gerente2@gmail.com',
            'password' => Hash::make('gerente2'),
            'token' => Str::random(60),
        ]);



    }
}
