<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index (){
        return view('usuarios.tabla_usuarios.blade.php');
    }
    public function index2 (){
        return view('usuarios.ver_usuarios.blade.php');
    }
}
