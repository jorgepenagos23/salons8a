<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Gerente;
use App\Models\PaquetesModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AnonimoController extends Controller
{


    public function index(){
        $paquetes = PaquetesModel::all();
        return view('gerente.gerenteInicio', compact('paquetes'));

    }


    public function showLoginForm()
    {
        return view('gerente.login');
    }


    public function authenticate(Request $solicitud)
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
                    return redirect('@validar');
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
                return redirect('@validar');
            } else {
                return redirect('login');
            }
        }
    }


}
