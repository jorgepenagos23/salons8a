<?php

namespace App\Http\Controllers;

use App\Models\Anonimo;
use Illuminate\Http\Request;

class AnonimoController extends Controller
{
    public function showLoginForm()
    {
        return view('anonimo.loginAnonimo');
    }

    public function authenticate(Request $request)
    {
        // Obtener los valores del usuario y contraseña del formulario de inicio de sesión
        $username = $request->input('username');
        $password = $request->input('password');

        // Verificar si el usuario y contraseña son correctos (en este ejemplo, son 'admin' y 'password')
        if ($username == 'anonimo' && $password == 'anonimo') {
            // Si el usuario y contraseña son correctos, redirigir al usuario a la página de inicio con un mensaje de éxito
            return redirect(route("anonimo.index"));
        } else {
            // Si el usuario y contraseña no son correctos, redirigir al usuario al formulario de inicio de sesión con un mensaje de error
            return redirect('/ejemplo');
        }
    }
    public function indexAnonimo()
    {
        return view('anonimo.anonimoInicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Anonimo $anonimo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anonimo $anonimo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anonimo $anonimo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anonimo $anonimo)
    {
        //
    }
}
