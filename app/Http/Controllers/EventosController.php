<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
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
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
