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

        DB::table('eventos')->insert([
            'usuario_id' => 3,
            'id_paquete' => 1,
            'nombre' => ' Dia del estudiante Prevo ',
            'descripción' => 'Para todo  el plantel ',
            'fecha_evento' => now(),
            'status' => 1,
            'confirmado' => 0,
        ]);


        DB::table('eventos')->insert([
            'usuario_id' => 3,
            'id_paquete' => 2,
            'nombre' => ' Dia del maestro UNACH ',
            'descripción' => 'Para todo  el plantel ',
            'fecha_evento' => now(),
            'status' => 1,
            'confirmado' => 0,
        ]);

        DB::table('eventos')->insert([
            'usuario_id' => 1,
            'id_paquete' => 2,
            'nombre' => ' Luz y Sonido de Pedrito',
            'descripción' => 'Para cien personas. ',
            'fecha_evento' => now(),
            'status' => 1,
            'confirmado' => 0,
        ]);

        DB::table('eventos')->insert([
            'usuario_id' => 1,
            'id_paquete' => 2,
            'nombre' => 'Bautizo  ',
            'descripción' => 'El bautizo de un sobrino  , se va necesitar bocinas   ',
            'fecha_evento' => now(),
            'status' => 1,
            'confirmado' => 1,
        ]);

        DB::table('eventos')->insert([
            'usuario_id' => 1,
            'id_paquete' => 2,
            'nombre' => 'Quince años XV',
            'descripción' => 'XV  duracion de seis horas   ',
            'fecha_evento' => now(),
            'status' => 1,
            'confirmado' => 1,
        ]);






    }
}
