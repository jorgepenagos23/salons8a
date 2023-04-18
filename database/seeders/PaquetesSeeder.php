<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // dentro del método run() del seeder de paquetes

DB::table('paquetes')->insert([
    [
        'nombre' => 'Bodas',
        'descripción' => 'Paquete especial para bodas',
        'precio' => 1000.00,
        'active' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombre' => 'XV años',
        'descripción' => 'Paquete especial para XV años',
        'precio' => 800.00,
        'active' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombre' => 'Fiesta Infantil',
        'descripción' => 'Paquete especial para fiestas infantiles',
        'precio' => 500.00,
        'active' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombre' => 'Bautizos',
        'descripción' => 'Paquete especial para bautizos',
        'precio' => 600.00,
        'active' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}
