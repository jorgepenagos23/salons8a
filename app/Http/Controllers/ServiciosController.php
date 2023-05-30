<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\ServiciosModel;
use Database\Seeders\ServiciosSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {

         $servicios = ServiciosModel::all();
     return view('servicios.servicios', ['lista' => $servicios]);
     }

    public function index2()
    {
        $servicios = Servicios::all();
        return view('servicios.servicios');
    }

    public function index3()
    {
        $servicios = Servicios::all();
        return view('servicios.agregar_servicios');
    }
    /**
     * Show the form for creating a new resource.
     */



    public function create()
    {
        $servicios = ServiciosModel::all();

        $this->authorize('agregar', $servicios);

        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'costo' => 'required|numeric|min:0',
            'estado' => 'required',

        ]);

        $servicio = new ServiciosModel();
        $servicio->nombre = $validatedData['nombre'];
        $servicio->descripcion = $validatedData['descripcion'];
        $servicio->costo = $validatedData['costo'];
        $servicio->estado = $validatedData['estado'];
        $servicio->imagen = $validatedData['imagen'];

        $servicio->save();

        return redirect()->route('servicios.servicios')->with('success', 'El servicio ha sido creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiciosModel $servicio)
{
    $this->authorize('editar', $servicio);

    return view('servicios.edit_servicios', compact('servicio'));
}

public function update(Request $request, ServiciosModel $servicio)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required',
        'costo' => 'required',
        'imagen' => 'required',
    ]);

    $servicio->nombre = $request->nombre;
    $servicio->descripcion = $request->descripcion;
    $servicio->costo = $request->costo;
    $servicio->estado = $request->estado;
    $servicio->imagen = $request->imagen;


    $servicio->save();

    return redirect()->route('servicios.servicios')->with('success', 'Servicio actualizado exitosamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            $user = Auth::guard('web')->user();
            $servicio = ServiciosModel::findOrFail($id);
            $this->authorize('eliminar', $servicio);
            $servicio->delete();
            return redirect()->route('servicios.servicios')->with('success', 'Servicio actualizado exitosamente.');


            dd($user);
        } else {
            echo "Usuario no autenticado";
        }
          // Imprimir el usuario y el paquete


        }






    }




