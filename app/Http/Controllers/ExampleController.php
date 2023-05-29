<?php

namespace App\Http\Controllers;

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



    public function dashboard_cliente()
    {
        // Aquí puedes realizar cualquier lógica que necesites para tu aplicación
        $mensaje = 'Hola, mundo!';

        // Llamamos a la vista 'ejemplo' y le pasamos el mensaje como variable
        $paquetes = PaquetesModel::all();
        return view('gerente.gerenteInicio', compact('paquetes'));    }










}
