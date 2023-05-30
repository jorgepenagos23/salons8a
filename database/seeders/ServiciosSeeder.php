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

        $servicio1 = new ServiciosModel();
        $servicio1->nombre = 'Meseros';
        $servicio1->descripcion = 'MESEROS PREMIUM';
        $servicio1->estado = '1';
        $servicio1->costo = '6000';
        $servicio1->save();

        $servicio2 = new ServiciosModel();
        $servicio2->nombre = 'Aire acondicionado';
        $servicio2->descripcion = 'AIRE OSO FRIO';
        $servicio2->estado = '1';
        $servicio2->costo = '3000';
        $servicio2->save();

    }
}
