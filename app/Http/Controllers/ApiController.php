<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiRequest;
use App\Models\EventosModel;
use App\Models\PaquetesModel;
use App\Models\ServiciosModel;
use App\Models\Usuarios;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class ApiController extends Controller
{
    public function index(Request $request)
    {

        $paquetes = PaquetesModel::select('nombre', 'costo', 'descripcion', 'capacidad')->get();

            return response()->json([
                'message' => "Paquetes buscados correctamente",
                'paquetes' => $paquetes,
            ], Response::HTTP_OK);

    }


    public function eventos(Request $request)
    {
        $usuario = $request->input('usuario');
        $password = $request->input('password');

        $usuarioEncontrado = Usuarios::where('usuario', $usuario)->first();

        if ($usuarioEncontrado && Hash::check($password, $usuarioEncontrado->password)) {
            switch ($usuarioEncontrado->Roles) {
                case 'Gerente':
                    $eventos = EventosModel::select('id','nombre', 'cliente_id', 'estado','fecha_evento','descripción','precio')->get();
                    $message = 'Hola Gerente'  .  $usuarioEncontrado->  usuario . 'estos son los eventos';
                    break;

                    case 'Empleado':
                        $eventos = EventosModel::select('id','nombre', 'cliente_id', 'estado','fecha_evento', 'descripción','precio')->get();
                        $message = 'Hola Empleado '. $usuarioEncontrado->  usuario . ' estos son los eventos';
                        break;

                default:
                    $eventos = EventosModel::where('cliente_id', $usuarioEncontrado->id)->get();
                    $message = 'Hola! ' . $usuarioEncontrado->  usuario.'estos tus los eventos';
                    break;
            }

            return response()->json([
                'message' => $message,
                'eventos' => $eventos,
            ], Response::HTTP_OK);
        } else {
            return response()->json(['mensaje' => 'Credenciales inválidas o usuario no autorizado'], Response::HTTP_UNAUTHORIZED);
        }
    }










    /**
     * Store a newly created resource in storage.
     */
    public function store(ApiRequest $request)
    {
        $eventos= EventosModel::create($request->all());
        return response()->json([

            'message' => "Registro  creado correctamente",
            'evento' => $eventos,
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function servicios()
    {
        $servicios = ServiciosModel::all();
        return response()->json([

            'message' => "Servicios buscados   correctamente",
            'servicio' => $servicios,
        ],Response::HTTP_CREATED);    }
    public function usuarios()
    {
        $gerentes = Usuarios::all();
        return response()->json($gerentes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ApiRequest $request, $eventos)
    {
        $eventos=EventosModel::find($eventos);
        $eventos->update($request->only('nombre','descripcion'));
        $eventos= EventosModel::create($request->all());
        return response()->json([

            'message' => "Registro  actualizado correctamente",
            'evento' => $eventos,
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete($eventos)
     {
         $eventos=EventosModel::find($eventos);
         $eventos->delete();

         return response()->json([

             'message' => "Registro  eliminado  correctamente",
             'evento' => $eventos,
         ],Response::HTTP_OK);
        }



        public function login2(ApiRequest $request){

            $usuario = Usuarios::where('usuario', $request->usuario)->first();
            if (!is_null($usuario) && Hash::check($request->password, $usuario->password)) {
                $token = $usuario->createToken('token_api');
                $accessToken = $token->plainTextToken;
                $expiresAt = now()->addMinutes(10);
                $personalAccessToken = PersonalAccessToken::findToken($accessToken);
                $personalAccessToken->forceFill([
                    'expires_at' => $expiresAt,
                    'abilities' => ['create']
                ])->save();

                $usuario->api_token =  $accessToken;
                $usuario->save();

                return response()->json([
                    'res' => true,
                    'token' =>  $accessToken,
                    'expira' => $expiresAt,
                    'message' => 'Bienvenido al sistema'
                ], 200);
            } else {
                return response()->json([
                    'res' => false,
                    'message' => 'Usuario incorrecto'
                ], 200);
            }

            return view('gerente.login');

        }




    }
