<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PaquetesModel;


class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $paquetes = PaquetesModel::all();
    return view('paquetes.paquete', ['lista' => $paquetes]);
    }
    public function index2()
    {
        $paquetes2 = PaquetesModel::all();
        return view('paquetes.agregar_paquetes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paquetes.agregar_paquetes');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
{
    // Validar los campos del formulario
    $validated = $request->validate([
        'nombre' => 'required|max:255',
        'descripción' => 'required',
        'precio' => 'required|numeric|min:0.01',
        'active' => 'required|boolean',
    ]);

    // Crear un nuevo objeto de PaquetesModel y asignar los valores del formulario
    $paquete = new PaquetesModel;
    $paquete->nombre = $validated['nombre'];
    $paquete->descripción = $validated['descripción'];
    $paquete->precio = $validated['precio'];
    $paquete->active = $validated['active'];

    // Guardar el paquete en la base de datos
    $paquete->save();

    // Redirigir al usuario a la lista de paquetes
    return redirect()->route('paquetes.paquete')->with('success', 'El paquete se agregó correctamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(Paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_paquete)
    {
        $paquetes = DB::table('paquetes')->where('id_paquete', $id_paquete)->first();

    return view('paquetes.edit_paquetes')->with('paquete', $paquetes);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_paquete)
    {
        // Buscar el paquete a actualizar
        $paquete = PaquetesModel::findOrFail($id_paquete);

        // Validar los campos del formulario
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'descripción' => 'required',
            'precio' => 'required|numeric|min:0.01',
            'active' => 'required|boolean',
        ]);

        // Actualizar los valores del paquete con los valores del formulario
        $paquete->nombre = $validated['nombre'];
        $paquete->descripción = $validated['descripción'];
        $paquete->precio = $validated['precio'];
        $paquete->active = $validated['active'];

        // Guardar el paquete actualizado en la base de datos
        $paquete->save();

        // Redirigir al usuario a la lista de paquetes
        return redirect()->route('paquetes.paquete')->with('success', 'El paquete se actualizó correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_paquete)
    {
        $paquete = PaquetesModel::findOrFail($id_paquete);
        $paquete->delete();

    return redirect()->route('paquetes.paquete')->with('success', 'Paquete eliminado exitosamente.');


    }


}
