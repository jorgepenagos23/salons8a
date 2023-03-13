<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function agregarUsuarios()
    {
        return view('usuarios.agregarUsuarios');
    }
    public function verUsuarios()
    {
        return view('usuarios.ver_usuarios');
    }
}
