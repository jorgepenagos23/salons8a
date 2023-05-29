<?php

use App\Http\Controllers\AnonimoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\GerenteLoginController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\Paquetes;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UsuariosController;
use App\Models\Gerente;
use App\Models\Servicios;
use App\Models\ServiciosModel;
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

Route::get('inicio', [GerenteLoginController::class, 'inicio'])->name(('inicio'))->middleware('guest');



//rutas para mostrar el texto de advertencia
Route::get('/ejemplo', [ExampleController::class, 'index'])->name('ejemplo');
//rutas para mostrar index gerente
//Route::get('/ejemplo2', [ExampleController::class, 'dashboard'])->name('ejemplo2');


///INGRESAR AL SISTEMA LOGIN
Route::get('login', [GerenteLoginController::class, 'showLoginForm'])->name(('login'))->middleware('guest');
Route::post('authenticate', [GerenteLoginController::class, 'authenticate'])->name('authenticate');
Route::get('@inicio_g', [GerenteLoginController::class, 'index'])->name(("@inicio_gerente"));
Route::get('cerrar_sesion', [GerenteLoginController::class, 'logout'])->name(("cerrar_sesion"));

Route::get('/registro', [GerenteLoginController::class, 'registro'])->name(('registro'));



//rutas para mostrar index cliente
Route::get('@inicio', [ExampleController::class, 'dashboard_cliente'])->name(("@inicio"));





//rutas para mostrar login usuario tipo cliente CLIENTE CLIENTE CLIENTE
Route::get('/user/login', [UserLoginController::class, 'showLoginForm'])->name('user.showLoginForm');
Route::post('/user/login', [UserLoginController::class, 'authenticate'])->name('login.authenticate');




//rutas para mostrar login gerente
Route::get('/gerente/login', [GerenteLoginController::class, 'showLoginForm'])->name('gerente.showLoginForm');
Route::get('/gerente2', [GerenteLoginController::class, 'index'])->name('gerente.gerenteinicio2')->middleware('auth.basic');

Route::post('/gerente', [GerenteLoginController::class, 'authenticate'])->name('gerente.gerenteinicio');


//rutas para el gerente muestre paquetes, servicios eventos
Route::get('sistema/paquetes', [PaqueteController::class, 'index'])->name('paquetes.paquete');

//rutas para eventos

Route::get('gerente/eventos', [EventosController::class, 'index'])->name('eventos.eventos');

Route::get('/eventos/{id}', [EventosController::class, 'verEventos'])->name('eventos.verEventos');
Route::post('/eventos/store', [EventosController::class, 'store'])->name('eventos.store');
Route::get('/eventos/create', [EventosController::class, 'create'])->name('eventos.create');
Route::get('/evento/{id}/editar', [EventosController::class, 'editar'])->name('evento.editar');
Route::put('/evento/{id}', [EventosController::class, 'update'])->name('evento.update');
Route::get('/evento/agregar', [EventosController::class, 'index2'])->name('eventos.index2');
Route::delete('/eventos/eliminar/{id}', [EventosController::class, 'destroy'])->name('eventos.destroy');

//rutas evento y servicios

Route::get('sistema/servicios', [ServiciosController::class, 'index'])->name('servicios.servicios');


//rutas para mostrar paquetes no moverle

Route::get('gerente/agrega_paquetes', [PaqueteController::class, 'index2'])->name('agregar.paquetes');
Route::post('/paquetes/agrega', [PaqueteController::class, 'store'])->name('paquetes.store');

Route::get('paquetes/{id_paquete}/edit', [PaqueteController::class, 'edit'])->name('paquetes.edit_paquetes');
Route::put('paquetes/{id_paquete}', [PaqueteController::class, 'update'])->name('paquetes.update');
Route::delete('paquetes/{id_paquete}', [PaqueteController::class, 'destroy'])->name('paquetes.destroy');


//rutas para mostrar eventos para clientes
Route::get('agregarevento', [EventosController::class, 'index2'])->name('agregar.eventos');
Route::get('eventos/eventos', [EventosController::class, 'index'])->name('eventos.eventos');


//rutas para mostrar servicios
Route::get('servicios/index_servicios', [ServiciosController::class, 'index2'])->name('servicios.index');
Route::get('servicios/agrega_servicios', [ServiciosController::class, 'index3'])->name('agregar.servicios');
Route::post('/servicios/store', [ServiciosController::class, 'store'])->name('servicios.store');

Route::put('/servicios/editarmas/{servicio}', [ServiciosController::class, 'update'])->name('servicios.update');

Route::get('/servicios/editar/{servicio}', [ServiciosController::class, 'edit'])->name('servicios.edit_servicios');

Route::delete('/servicios/eliminar/{id}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');



//rutas para logout salir de cliente

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Anonimo login e inicio


//Empleado login e inicio
Route::get('/empleado/login', [EmpleadosController::class, 'showLoginForm'])->name('empleados.showLoginForm');
Route::post('/empleadosvalidar', [EmpleadosController::class, 'authenticate'])->name('empleados.authenticate');
Route::get('/empleados', [EmpleadosController::class, 'indexEmpleados'])->name('empleados.index');


//Para las rutas  de ver usuarios de guia ------------------------------------------------------------------------------------------ no mover arriba ya sirve.
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
//Para las rutas  de ver usuarios de guia
Route::get('/usuarios/{usuario}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');



//Para las rutas  de ver usuarios no mover
Route::get('gerente/usuarios', [UsuariosController::class, 'verUsuarios'])->name('usuariotabla.ver');
Route::get('gerente/agregarusuario', [UsuariosController::class, 'agregarUsuarios'])->name('usuarios.agregarUsuarios');
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit_usuario');
Route::delete('usuarios/{id}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');


