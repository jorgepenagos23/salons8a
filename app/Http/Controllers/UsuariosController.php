<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function agregarUsuarios()
    {
        return view('usuarios.agregarUsuarios');
    }
    public function verUsuarios()
    {

       ///segunda forma de  $usuario = DB::select('select * from usuarios');

        $usuario = Usuarios::all();
        return view('usuarios.ver_usuarios',compact('usuario'), ['lista' => $usuario]);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario  para CLIENTE
        $request->validate([
            'nombre' => 'required|max:20',
            'tipo_usuario' => 'required',
            'apellidos' => 'required|max:20',
            'direccion' => 'required',
            'telefono' => 'required',
            'edad' => 'required|integer|min:18|max:99',
            'email' => 'required|email|unique:usuarios,email',
            'contraseña' => 'required'
        ]);

        // Crear un nuevo usuario con los datos del formulario
        $usuario = new Usuarios();
        $usuario->nombre = $request->input('nombre');
        $usuario->tipo_usuario = $request->input('tipo_usuario');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->edad = $request->input('edad');
        $usuario->email = $request->input('email');
        $usuario->contraseña = bcrypt($request->input('contraseña'));
        $usuario->save();

        // Redireccionar al usuario a la lista de usuarios
        return redirect()->route('usuariotabla.ver');





    }









    public function edit($id)
    {
        $usuario = Usuarios::findOrFail($id);

        return view('usuarios.edit_usuario', compact('usuario'));
    }



    public function update(Request $request, Usuarios $usuario)
    {
        $usuario->nombre = $request->input('nombre');
        $usuario->tipo_usuario = $request->input('tipo_usuario');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->edad = $request->input('edad');
        $usuario->email = $request->input('email');
        if (!empty($request->input('contraseña'))) {
            $usuario->password = bcrypt($request->input('contraseña'));
        }
        $usuario->save();

        return redirect()->route('usuariotabla.ver')->with('success', 'El usuario ha sido actualizado.');
    }

    public function destroy($id)
{
    $usuario = Usuarios::findOrFail($id);
    $usuario->delete();

    return redirect()->route('usuariotabla.ver')->with('success', 'Usuario eliminado exitosamente');
}






}
