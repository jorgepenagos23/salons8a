<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteLoginController extends Controller
{
   

    public function showLoginForm()
    {
        return view('gerente.login');
    }


    public function authenticate(Request $request)
    {
        // Obtener los valores del usuario y contraseña del formulario de inicio de sesión
        $username = $request->input('username');
        $password = $request->input('password');

        // Verificar si el usuario y contraseña son correctos (en este ejemplo, son 'admin' y 'password')
        if ($username == 'gerente' && $password == 'gerente') {
            // Si el usuario y contraseña son correctos, redirigir al usuario a la página de inicio con un mensaje de éxito
            return redirect('/ejemplo2')->with('success', 'Inicio de sesión exitoso');
        } else {
            // Si el usuario y contraseña no son correctos, redirigir al usuario al formulario de inicio de sesión con un mensaje de error
            return redirect('/ejemplo')->with('error', 'Usuario o contraseña incorrectos');
        }
    }
    



   

}
