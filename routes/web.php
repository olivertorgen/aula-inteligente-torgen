<?php

use Illuminate\Support\Facades\Route;

// Aquí está tu ruta, que apunta a tu vista home.blade.php
Route::get('/', function () {
    return view('home');
});

// Esta es la ruta por defecto de Laravel. La mantenemos por si acaso.
Route::get('/', function () {
    return view('welcome');
});
// Importa los controladores que vas a usar
use App\Http\Controllers\AulaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AiresAcondicionadosController;
use App\Http\Controllers\FocosController;
use App\Http\Controllers\DisponibilidadController;
use App\Http\Controllers\CortinasController;
use App\Http\Controllers\MueblesController;

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

// Define la ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de recursos para los controladores
Route::resource('aulas', AulaController::class);
Route::resource('docentes', DocenteController::class);
Route::resource('materias', MateriaController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('aires-acondicionados', AiresAcondicionadosController::class);
Route::resource('focos', FocosController::class);
Route::resource('disponibilidades', DisponibilidadController::class);
Route::resource('cortinas', CortinasController::class);
Route::resource('muebles', MueblesController::class);
