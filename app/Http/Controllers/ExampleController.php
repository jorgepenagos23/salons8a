<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Models\EventosModel;
use App\Models\PaquetesModel;
use Illuminate\Http\Request;
class ExampleController extends Controller
{

    public function index()
    {
        // Aquí puedes realizar cualquier lógica que necesites para tu aplicación
        $mensaje = 'Hola, mundo!';

        // Llamamos a la vista 'ejemplo' y le pasamos el mensaje como variable
        return view('anonimo.ejemplo', ['mensaje' => $mensaje]);
    }

    public function dashboard()
    {
        // Aquí puedes realizar cualquier lógica que necesites para tu aplicación
        $mensaje = 'Hola, mundo!';

        // Llamamos a la vista 'ejemplo' y le pasamos el mensaje como variable
        return view('anonimo.ejemplo2', ['mensaje' => $mensaje]);
    }

        public function mostrarAbono()
        {


            return view('sistema.abono');
        }

        public function store(Request $request)
        {
            $validated = $request->validate([

                'fecha_pago' => 'required',
                'abono_cantidad' => 'required|numeric|min:0.01',
                'id_paquete' => 'required',
                'cliente_id' => 'required',
            ]);

            $abono = new Abono;
            $abono->fecha_pago = $validated['fecha_pago'];
            $abono->abono_cantidad = $validated['abono_cantidad'];
            $abono->id_paquete = $validated['id_paquete'];
            $abono->cliente_id = $validated['cliente_id'];

            // Guardar el paquete en la base de datos
            $abono->save();
                // Obtener el evento correspondiente al abono actual
              // Obtener el evento correspondiente al abono actual  $evento = EventosModel::find($request->id_evento);

                // Verificar si se encontró el evento
              // Obtener el evento correspondiente al abono actual   if ($evento) {
                     // Calcular el nuevo costo total sumando el costo de servicio y el costo del paquete
                   // Obtener el evento correspondiente al abono actual $nuevoCosto = $evento->costo_servicio + $evento->paquete->costo;

                    // Actualizar el valor del costo del evento en la tabla
                    // Obtener el evento correspondiente al abono actual$evento->update([
                    // Obtener el evento correspondiente al abono actual    'costo' => $nuevoCosto
                  // Obtener el evento correspondiente al abono actual ]);
            // Obtener el evento correspondiente al abono actual    }



            return view('gerente.gerenteInicio');
        }


    public function dashboard_cliente()
    {
        // Aquí puedes realizar cualquier lógica que necesites para tu aplicación
        $mensaje = 'Hola, mundo!';

        // Llamamos a la vista 'ejemplo' y le pasamos el mensaje como variable
        $paquetes = PaquetesModel::all();
        return view('gerente.gerenteInicio', compact('paquetes'));    }










}
