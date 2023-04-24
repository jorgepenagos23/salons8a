<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\EventosModel;
use App\Models\PaquetesModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Eventos::all();
        return view('eventos.eventos', compact('eventos'));

    }

    public function index2(){

        return view('eventos.agregar_evento');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('eventos.agregar_evento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|integer',
            'id_paquete' => 'required|integer',
            'nombre' => 'required|string',
            'descripción' => 'required|string',
            'fecha_evento' => 'required|date',
            'status' => 'required|integer',
            'confirmado' => 'required|boolean',
        ]);

        $evento = new EventosModel([
            'usuario_id' => $request->usuario_id,
            'id_paquete' => $request->id_paquete,
            'nombre' => $request->nombre,
            'descripción' => $request->descripción,
            'fecha_evento' => $request->fecha_evento,
            'status' => $request->status,
            'confirmado' => $request->confirmado,
        ]);

        $evento->save();

        return redirect()->route('eventos.eventos')
                         ->with('success', 'Evento agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function verEventos()
    {

       ///segunda forma de  $usuario = DB::select('select * from usuarios');

        $evento = EventosModel::all();
        return view('eventos.eventos',compact('evento'), ['lista' => $evento]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar($id)
{
    $evento = EventosModel::findOrFail($id);
    return view('eventos.editar', compact('evento'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evento = EventosModel::findOrFail($id);

        $evento->nombre = $request->nombre;
        $evento->descripción = $request->descripción;
        $evento->fecha_evento = $request->fecha_evento;
        $evento->status = $request->has('status');
        $evento->confirmado = $request->has('confirmado');

        $evento->save();

        return redirect()->route('eventos.eventos');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paquete = EventosModel::findOrFail($id);
        $paquete->delete();

        return redirect()->route('eventos.eventos')->with('success', 'Servicio actualizado exitosamente.');


    }

}
