<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $paquetes = DB::select('select * from paquetes');
        return view('paquetes.paquete', ['lista' => $paquetes]);
    }
    public function index2()
    {
        $paquetes = Paquete::all();
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
        //
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
    public function edit(Paquete $paquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paquete $paquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paquete $paquete)
    {
        //
    }
}
