<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos')->insert([
            'usuario_id' => 1,
            'id_paquete' => 2,
            'nombre' => 'Mi evento de prueba',
            'descripción' => 'Descripción de mi evento de prueba',
            'fecha_evento' => now(),
            'status' => 1,
            'confirmado' => 0,
        ]);

        DB::table('eventos')->insert([
            'usuario_id' => 2,
            'id_paquete' => 3,
            'nombre' => ' Dia del niño ',
            'descripción' => 'Pruebas priuebas ',
            'fecha_evento' => now(),
            'status' => 1,
            'confirmado' => 0,
        ]);

    }
}
