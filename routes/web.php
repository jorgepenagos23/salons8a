<?php

use App\Http\Controllers\EventosController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\GerenteLoginController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\Paquetes;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UserLoginController;
use App\Models\Servicios;
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
//Route::get('/ejemplo2', [ExampleController::class, 'dashboard'])->name('ejemplo2');

//rutas para mostrar index cliente
Route::get('index/cliente', [ExampleController::class, 'dashboard_usuarios'])->name('index_cliente');
//Route::get('cliente/eventos', [EventosController::class, 'index'])->name('eventos.eventos');

//rutas para mostrar login usuario 
Route::get('/user/login', [UserLoginController::class, 'showLoginForm'])->name('user.showLoginForm');
Route::post('/user/login', [UserLoginController::class, 'authenticate'])->name('login.authenticate');

//rutas para mostrar login gerente 
Route::get('/gerente/login', [GerenteLoginController::class, 'showLoginForm'])->name('gerente.showLoginForm');
Route::post('/inicio', [GerenteLoginController::class, 'authenticate'])->name('login2.authenticate');

Route::get('/inicio2', [GerenteLoginController::class, 'index'])->name('gerente.gerenteinicio');


//rutas para el gerente muestre paquetes, servicios eventos
Route::get('gerente/paquetes', [PaqueteController::class, 'index'])->name('paquetes.paquete');
Route::get('gerente/eventos', [EventosController::class, 'index'])->name('eventos.eventos');
Route::get('gerente/servicios', [ServiciosController::class, 'index'])->name('servicios.servicios');





//rutas para mostrar paquetes 

Route::get('gerente/agrega_paquetes', [PaqueteController::class, 'index2'])->name('agregar.paquetes');



//rutas para mostrar eventos para clientes
Route::get('gerente/eventos', [EventosController::class, 'index2'])->name('agregar.eventos');
Route::get('eventos/eventos', [EventosController::class, 'index'])->name('eventos.eventos');


//rutas para mostrar servicios 
Route::get('servicios/index_servicios', [ServiciosController::class, 'index2'])->name('servicios.index');
Route::get('servicios/agrega_servicios', [ServiciosController::class, 'index3'])->name('agregar.servicios');



//rutas para logout salir de cliente

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
