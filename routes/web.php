<?php

use App\Http\Controllers\AnonimoController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\GerenteLoginController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\Paquetes;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UsuariosController;
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
Route::post('/gerente', [GerenteLoginController::class, 'authenticate'])->name('gerente.gerenteinicio');


//rutas para el gerente muestre paquetes, servicios eventos
Route::get('gerente/paquetes', [PaqueteController::class, 'index'])->name('paquetes.paquete');
Route::get('gerente/eventos', [EventosController::class, 'index'])->name('eventos.eventos');
Route::get('gerente/servicios', [ServiciosController::class, 'index'])->name('servicios.servicios');





//rutas para mostrar paquetes 

Route::get('gerente/agrega_paquetes', [PaqueteController::class, 'index2'])->name('agregar.paquetes');



//rutas para mostrar eventos para clientes
Route::get('agregarevento', [EventosController::class, 'index2'])->name('agregar.eventos');
Route::get('eventos/eventos', [EventosController::class, 'index'])->name('eventos.eventos');


//rutas para mostrar servicios 
Route::get('servicios/index_servicios', [ServiciosController::class, 'index2'])->name('servicios.index');
Route::get('servicios/agrega_servicios', [ServiciosController::class, 'index3'])->name('agregar.servicios');



//rutas para logout salir de cliente

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Anonimo login e inicio
Route::get('/login', [AnonimoController::class, 'showLoginForm'])->name('anonimo.showLoginForm');
Route::post('/anonimovalidar', [AnonimoController::class, 'authenticate'])->name('anonimo.authenticate');
Route::get('/paquetes', [AnonimoController::class, 'indexAnonimo'])->name('anonimo.index');


//Empleado login e inicio
Route::get('/empleado/login', [EmpleadosController::class, 'showLoginForm'])->name('empleados.showLoginForm');
Route::post('/empleadosvalidar', [EmpleadosController::class, 'authenticate'])->name('empleados.authenticate');
Route::get('/empleados', [EmpleadosController::class, 'indexEmpleados'])->name('empleados.index');

//Para las rutas  de ver usuarios
Route::get('gerente/usuarios', [UsuariosController::class, 'index'])->name('usuario.ver');
Route::get('gerente/usuarios', [UsuariosController::class, 'index2'])->name('usuariotabla.ver');