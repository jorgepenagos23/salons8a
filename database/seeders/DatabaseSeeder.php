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
            $this->call(UsuarioSeeder::class);

       /*  DB::table('usuarios')->insert([
            'nombre' => 'Hugo',
            'usuario' => 'Cliente',
            'apellidos' => 'Pérez García',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '1234567890',
            'edad' => 30,
            'email' => 'juan@gmail.com',
            'password' => Hash::make('123456'),
        ]);


        DB::table('usuarios')->insert([
            'usuario' => 'Cliente',
            'nombre' => 'Paco',
            'apellidos' => 'Lopez Diaz',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '4352545435',
            'edad' => 30,
            'email' => 'paquito@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Luis',
            'usuario' => 'Cliente',
            'apellidos' => 'Gonzales G',
            'direccion' => 'Av. Principal #123',
            'Telefono' => '9982456235',
            'edad' => 30,
            'email' => 'luis@gmail.com',
            'password' => Hash::make('123456'),
        ]);



        DB::table('usuarios')->insert([
            'nombre' => 'Carlos',
            'usuario' => 'Gerente',
            'apellidos' => 'Lopez Diaz',
            'direccion' => 'Calle Secundaria #456',
            'Telefono' => '9611702282',
            'edad' => 35,
            'email' => 'ana@gmail.com',
            'password' => Hash::make('abcdef'),
        ]);




 */
    }
}
