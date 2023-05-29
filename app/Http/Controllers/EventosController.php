<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\EventosModel;
use App\Models\PaquetesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Eventos::all()->where('cliente_id'. '=', Auth::user()->id);
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
            'cliente_id' => 'required|integer',
            'id_paquete' => 'required|integer',
            'nombre' => 'required|string',
            'descripción' => 'required|string',
            'fecha_evento' => 'required|date',
            'estado' => 'required|integer',
            'confirmado' => 'required|boolean',
        ]);

        $evento = new EventosModel([
            'cliente_id' => $request->cliente_id,
            'id_paquete' => $request->id_paquete,
            'nombre' => $request->nombre,
            'descripción' => $request->descripción,
            'fecha_evento' => $request->fecha_evento,
            'estado' => $request->estado,
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

        $evento = EventosModel::all();
        return view('eventos.eventos',compact('evento'), ['lista' => $evento]);

       ///segunda forma de  $usuario = DB::select('select * from usuarios');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar($id)
{
    $evento = EventosModel::findOrFail($id);
    $this->authorize('edit', $evento);
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
        $evento->estado = $request->estado;

        $evento->save();

        return redirect()->route('eventos.eventos');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

         $evento = EventosModel::findOrFail($id);
        $this->authorize('delete', $evento);
        $evento->delete();
        return redirect()->route('eventos.eventos')->with('success', 'eliminaddo  a');


    }

}
