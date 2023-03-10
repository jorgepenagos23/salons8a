<?php

use App\Http\Controllers\EventosController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\GerenteLoginController;
use App\Http\Controllers\Paquetes;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Route;
use Tests\Unit\ExampleTest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//rutas para mostrar el texto de advertencia
Route::get('/ejemplo', [ExampleController::class, 'index'])->name('ejemplo');
//rutas para mostrar index gerente
Route::get('/ejemplo2', [ExampleController::class, 'dashboard'])->name('ejemplo2');

//rutas para mostrar index cliente
Route::get('/index_cliente', [ExampleController::class, 'dashboard_usuarios'])->name('index_cliente');


//rutas para mostrar login usuario 
Route::get('/user/login', [UserLoginController::class, 'showLoginForm'])->name('user.showLoginForm');
Route::post('/user/login', [UserLoginController::class, 'authenticate'])->name('login.authenticate');


//rutas para mostrar login gerente 
Route::get('/gerente/login', [GerenteLoginController::class, 'showLoginForm'])->name('gerente.showLoginForm');
Route::post('/gerente/login', [GerenteLoginController::class, 'authenticate'])->name('login2.authenticate');


//rutas para mostrar paquetes 
Route::get('/paquetes', [Paquetes::class, 'index'])->name('paquetes.ver');

//rutas para mostrar eventos 
Route::get('/eventos', [EventosController::class, 'index'])->name('eventos.ver');


//rutas para mostrar servicios 
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.ver');


