<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\DoctoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('modulos.Seleccionar');
});

Route::get('/Ingresar', function () {
    return view('modulos.Ingresar');
});

Auth::routes();

Route::get('Inicio', [InicioController::class, 'index']);

Route::get('Doctores', [DoctoresController::class, 'index']);
Route::post('Doctores', [DoctoresController::class, 'store']);
Route::get('Eliminar-Doctor/{id}', [DoctoresController::class, 'destroy']);

Route::post('Consultorios', [ConsultoriosController::class, 'store']);
Route::PUT('Consultorio/{id}', [ConsultoriosController::class, 'update']);
Route::get('Consultorios', [ConsultoriosController::class, 'index']);
Route::delete('borrar-Consultorio/{id}', [ConsultoriosController::class, 'destroy']);



