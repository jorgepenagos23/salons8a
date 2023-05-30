<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PaquetesModel;
use Illuminate\Support\Facades\Auth;


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

    {        $paquetes = PaquetesModel::all();

        $this->authorize('insercion', $paquetes);

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
        'descripcion' => 'required',
        'costo' => 'required|numeric|min:0.01',
        'estado' => 'required|boolean',
    ]);

    // Crear un nuevo objeto de PaquetesModel y asignar los valores del formulario
    $paquete = new PaquetesModel;
    $paquete->nombre = $validated['nombre'];
    $paquete->descripcion = $validated['descripcion'];
    $paquete->costo = $validated['costo'];
    $paquete->estado = $validated['estado'];

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
        $paquete = PaquetesModel::findOrFail($id_paquete);
        $this->authorize('edit', $paquete);


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
            'descripcion' => 'required',
            'costo' => 'required|numeric|min:0.01',
            'estado' => 'required|boolean',
            'capacidad' => 'capacidad',
            'gerente_id' => 'gerente_id',


        ]);

        // Actualizar los valores del paquete con los valores del formulario
        $paquete->nombre = $validated['nombre'];
        $paquete->descripcion = $validated['descripcion'];
        $paquete->costo = $validated['costo'];
        $paquete->estado = $validated['estado'];
        $paquete->capacidad = $validated['capacidad'];
        $paquete->gerente_id = $validated['gerente_id'];


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
      // Obtener el usuario actual autenticado
      if (Auth::check()) {
        $user = Auth::guard('web')->user();
        $paquete = PaquetesModel::findOrFail($id_paquete);
        $this->authorize('delete', $paquete);
        $paquete->delete();
         return redirect()->route('paquetes.paquete')->with('success', 'Paquete eliminado exitosamente.');


        dd($user);
    } else {
        echo "Usuario no autenticado";
    }
      // Imprimir el usuario y el paquete


    }


}
