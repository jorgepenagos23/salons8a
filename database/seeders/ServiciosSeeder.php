<?php

namespace Database\Seeders;

use App\Models\Servicio;
use App\Models\ServiciosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicio = new ServiciosModel();
        $servicio->nombre = 'Mantelería';
        $servicio->descripcion = 'MANTELES MONI';
        $servicio->estado = '1';
        $servicio->costo = '1000';
        $servicio->save();

        $servicio = new ServiciosModel();
        $servicio->nombre = 'Meseros';
        $servicio->descripcion = 'MESEROS PREMIUM';
        $servicio->estado = '1';
        $servicio->costo = '6000';
        $servicio->save();

        $servicio = new ServiciosModel();
        $servicio->nombre = 'Aire acondicionado';
        $servicio->descripcion = 'AIRE OSO FRIO';
        $servicio->estado = '1';
        $servicio->costo = '3000';
        $servicio->save();

    }
}
