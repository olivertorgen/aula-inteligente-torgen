<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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
Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas.index');
Route::resource('aires-acondicionados', AiresAcondicionadosController::class);
Route::get('/aires-acondicionados', [AiresAcondicionadosController::class, 'index'])->name('airesacondicionados.index');
Route::resource('focos', FocosController::class);
Route::get('/focos', [FocosController::class, 'index'])->name('focos.index');
Route::resource('disponibilidades', DisponibilidadController::class);
Route::resource('cortinas', CortinasController::class);
Route::get('/Cortinas', [CortinasController::class, 'index'])->name('cortinas.index');
Route::resource('muebles', MueblesController::class);
