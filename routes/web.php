<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\GerenteLoginController;
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

Route::get('/ejemplo', [ExampleController::class, 'index'])->name('ejemplo');
Route::get('/ejemplo2', [ExampleController::class, 'dashboard'])->name('ejemplo2');


Route::get('/user/login', [UserLoginController::class, 'showLoginForm'])->name('user.showLoginForm');
Route::get('/user/login', [UserLoginController::class, 'login'])->name('user.login');
Route::post('/user/login', [UserLoginController::class, 'authenticate'])->name('login.authenticate');



Route::get('/gerente/login', [GerenteLoginController::class, 'showLoginForm'])->name('gerente.showLoginForm');
Route::post('/gerente/login', [GerenteLoginController::class, 'login'])->name('gerente.login');

