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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $paquetes= PaquetesModel::all();
        return response()->json([

            'message' => "Paquetes   buscados correctamente",
            'paquetes' => $paquetes,
        ],Response::HTTP_OK);


    }

    public function eventos()
    {


        $eventos= EventosModel::all();


         return response()->json([

            'message' => "Eventos  buscados correctamente",
            'evento' => $eventos,
        ],Response::HTTP_OK);

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
