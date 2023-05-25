<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Cliente;
use App\Models\Gerente;
use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return view('sistema.login');
    }

    public function validar(Request $solicitud)
    {
        $usuario = $solicitud->input('usuario');
        $contraseña = $solicitud->input('contraseña');
        $encontrado = Gerente::where('usuario', $usuario)->first();
        if (is_null($encontrado)) {
            $encontrado = Cliente::where('usuario', $usuario)->first();
            if (is_null($encontrado)) {
                return redirect('login')
                    ->with(['mensaje' => 'Error, usuario no encontrado']);
            } else {
                $contraseña_bd = $encontrado->contraseña;
                $conincide = Hash::check($contraseña, $contraseña_bd);
                if ($conincide) {
                    Auth::guard('guard_clientes')->login($encontrado);
                    $_SESSION['AuthGuard'] = 'guard_clientes';
                    return redirect('@me');
                } else {
                    return redirect('login');
                }
            }
        } else {
            $contraseña_bd = $encontrado->contraseña;
            $conincide = Hash::check($contraseña, $contraseña_bd);
            if ($conincide) {
                Auth::guard('guard_gerentes')->login($encontrado);
                $_SESSION['AuthGuard'] = 'guard_gerentes';
                return redirect('@me');
            } else {
                return redirect('login');
            }
        }
    }


}
