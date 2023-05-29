<?php

namespace Database\Seeders;

use App\Models\PaquetesModel;
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
        $paquete = new PaquetesModel();
        $paquete->nombre = 'Bodas';
        $paquete->descripcion='Para bodas';
        $paquete->costo = '20000';
        $paquete->estado = '1';
        $paquete->capacidad = '400';
        $paquete->gerente_id = '2';
        $paquete->save();

        $paquete = new PaquetesModel();
        $paquete->nombre = 'XV años';
        $paquete->descripcion='XV 100 GENTES';
        $paquete->costo = '10000';
        $paquete->estado = '1';
        $paquete->capacidad = '200';
        $paquete->gerente_id = '2';
        $paquete->save();

        $paquete = new PaquetesModel();
        $paquete->nombre = 'Fiesta infantil CON CHUPONCITOS';
        $paquete->descripcion='FIESTA INFANTIL CHUPONCITO';
        $paquete->costo = '5000';
        $paquete->estado = '1';
        $paquete->capacidad = '400';
        $paquete->gerente_id = '2';
        $paquete->save();

        $paquete = new PaquetesModel();
        $paquete->nombre = 'Bautizos';
        $paquete->descripcion=' bautizos 100 GENTES';
        $paquete->costo = '9000';
        $paquete->estado = '1';
        $paquete->capacidad = '200';
        $paquete->gerente_id = '2';
        $paquete->save();

    }
}
