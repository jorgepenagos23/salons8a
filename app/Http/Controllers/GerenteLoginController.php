<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Gerente;

use App\Models\PaquetesModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class GerenteLoginController extends Controller
{


    public function inicio()
    {
        $paquetes = PaquetesModel::all();
        return view('welcome', compact('paquetes'));
    }


    public function index()
    {
        $paquetes = PaquetesModel::all();
        return view('gerente.gerenteInicio', compact('paquetes'));
    }

    public function showLoginForm()
    {
        return view('gerente.login');
    }
    public function registro()
    {

        return view('gerente.registro');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('inicio');
    }


   public function authenticate (Request $request)
        {
             // Crear una cookie con el identificador de sesión del usuario
            $credentials = $request->only('usuario',  'password');

            if (Auth::guard('guard_gerentes')->attempt($credentials)) {
                // Autenticación exitosa para el gerente
                return redirect()->intended('@inicio_gerente');
            }

            if (Auth::guard('guard_clientes')->attempt($credentials)) {
                // Autenticación exitosa para el cliente
                return redirect()->intended('@inicio');
            }

            if (Auth::guard('web')->attempt($credentials)) {
                // Autenticación exitosa para el cliente
                return redirect()->intended('@inicio');
            }



            // Credenciales inválidas
            return redirect()->back()->withInput()->withErrors(['error' => 'Credenciales inválidas']);
        }

        if (Auth::guard('guard_gerentes')->attempt($credentials)) {
            // Autenticación exitosa para el gerente
            return redirect()->intended('@inicio_gerente');
        }

        if (Auth::guard('guard_clientes')->attempt($credentials)) {
            // Autenticación exitosa para el cliente
            return redirect()->intended('@inicio_cliente');
        }

        if (Auth::guard('web')->attempt($credentials)) {
            // Autenticación exitosa para el cliente
            return redirect()->intended('@inicio_cliente');
        }



        // Credenciales inválidas
        return redirect()->back()->withInput()->withErrors(['error' => 'Credenciales inválidas']);
    }
}
