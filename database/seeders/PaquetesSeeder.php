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

        $paquete1 = new PaquetesModel();
        $paquete1->nombre = 'XV años';
        $paquete1->descripcion='XV 100 GENTES';
        $paquete1->costo = '10000';
        $paquete1->estado = '1';
        $paquete1->capacidad = '200';
        $paquete1->gerente_id = '2';
        $paquete1->save();

        $paquete2 = new PaquetesModel();
        $paquete2->nombre = 'Fiesta infantil CON CHUPONCITOS';
        $paquete2->descripcion='FIESTA INFANTIL CHUPONCITO';
        $paquete2->costo = '5000';
        $paquete2->estado = '1';
        $paquete2->capacidad = '400';
        $paquete2->gerente_id = '2';
        $paquete2->save();

        $paquete3 = new PaquetesModel();
        $paquete3->nombre = 'Bautizos';
        $paquete3->descripcion=' bautizos 100 GENTES';
        $paquete3->costo = '9000';
        $paquete3->estado = '1';
        $paquete3->capacidad = '200';
        $paquete3->gerente_id = '2';
        $paquete3->save();

    }
}
