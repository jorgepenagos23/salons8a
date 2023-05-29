<?php

namespace App\Http\Controllers;

use App\Models\Abono;
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
            $evento = new Abono([

                'id' => $request->id,
                'fecha_pago' => $request->fecha_pago,
                'abono_cantidad' => $request->abono_cantidad,
                'cliente_id' => $request->estado,


            ]);

            return view('sistema.abono');
        }


    public function dashboard_cliente()
    {
        // Aquí puedes realizar cualquier lógica que necesites para tu aplicación
        $mensaje = 'Hola, mundo!';

        // Llamamos a la vista 'ejemplo' y le pasamos el mensaje como variable
        $paquetes = PaquetesModel::all();
        return view('gerente.gerenteInicio', compact('paquetes'));    }










}
