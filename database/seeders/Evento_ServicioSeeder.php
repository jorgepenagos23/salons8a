<?php
use App\Models\Evento;
use App\Models\Servicio;
use App\Models\EventoServicio;
use App\Models\EventosModel;
use App\Models\ServiciosModel;
use Database\Seeders\EventosSeeder;
use Illuminate\Database\Seeder;

class EventoServicioSeeder extends Seeder
{
    public function run()
    {
        $evento = EventosModel::create([
            'nombre' => 'Evento de ejemplo',
            'fecha' => '2023-05-01',
            // Agrega los demás campos necesarios
        ]);

        $servicio = ServiciosModel::create([
            'nombre' => 'Servicio de ejemplo',
            'descripcion' => 'Descripción del servicio',
            // Agrega los demás campos necesarios
        ]);

        EventoServicio::create([
            'evento_id' => $evento->id,
            'servicio_id' => $servicio->id,
        ]);




    }
}
