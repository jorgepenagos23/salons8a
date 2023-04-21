<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiciosModel;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            'nombre' => 'Mantelería',
            'descripción' => 'Servicio de  mantelería color blanco',
            'precio' => 100.00,
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Aire Acondicionado',
            'descripción' => 'Servicio de aire acondicionado para eventos',
            'precio' => 150.00,
        ]);

        DB::table('servicios')->insert([
        'nombre' => 'Meseros',
        'descripción' => 'Servicio de Meseros',
        'precio' => 200.00,
    ]);



    }
}
