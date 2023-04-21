<?php
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Servicio;
use App\Models\EventoServicio;
use App\Models\EventosModel;
use App\Models\ServiciosModel;

class EventoServicioSeeder extends Seeder
{
    public function run()
    {
        // Obtener una lista ordenada de los IDs de eventos y servicios
        $evento_ids = EventosModel::orderBy('id')->pluck('id')->toArray();
        $servicio_ids = ServiciosModel::orderBy('id')->pluck('id')->toArray();

        // Recorrer la lista de IDs de eventos y servicios y crear registros en la tabla intermedia
        foreach ($evento_ids as $evento_id) {
            foreach ($servicio_ids as $servicio_id) {
                EventoServicio::create([
                    'evento_id' => $evento_id,
                    'servicio_id' => $servicio_id,
                ]);
            }
        }
    }
}

