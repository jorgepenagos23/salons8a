<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\ServiciosModel;
use Database\Seeders\ServiciosSeeder;
use Illuminate\Http\Request;


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
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripción' => 'required',
            'precio' => 'required|numeric|min:0',

        ]);

        $servicio = new ServiciosModel();
        $servicio->nombre = $validatedData['nombre'];
        $servicio->descripción = $validatedData['descripción'];
        $servicio->precio = $validatedData['precio'];
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
    return view('servicios.edit_servicios', compact('servicio'));
}

public function update(Request $request, ServiciosModel $servicio)
{
    $request->validate([
        'nombre' => 'required',
        'descripción' => 'required',
'precio' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/']
    ]);

    $servicio->nombre = $request->nombre;
    $servicio->descripción = $request->descripción;
    $servicio->precio = $request->precio;
    $servicio->save();

    return redirect()->route('servicios.servicios')->with('success', 'Servicio actualizado exitosamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paquete = ServiciosModel::findOrFail($id);
        $paquete->delete();

        return redirect()->route('servicios.servicios')->with('success', 'Servicio actualizado exitosamente.');


    }
}
