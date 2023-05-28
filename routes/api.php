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
*/

Route::get('gerente/login2', [ApiController::class, 'login2']);

Route::get('/paquetes',[ApiController::class, 'index']);

Route::get('usuarios', [ApiController::class, 'usuarios']);

 Route::get('eventos', [ApiController::class, 'eventos']);

 Route::get('servicios', [ApiController::class, 'servicios']);

Route::middleware('auth:api')->get('/user', function (Request $request) {





    return $request->user();


});
