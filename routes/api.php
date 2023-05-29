<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
Route::get('usuarios', [ApiController::class, 'usuarios']);

    return $request->user();


});

Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->revoke();

    return [
        'message' => 'Token revocado correctamente'
    ];

});

Route::get('gerente/login2', [ApiController::class, 'login2']);

Route::get('/paquetes',[ApiController::class, 'index']);


 Route::get('eventos', [ApiController::class, 'eventos']);

 Route::get('servicios', [ApiController::class, 'servicios']);


