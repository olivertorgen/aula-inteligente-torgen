<?php

use Illuminate\Support\Facades\Route;

// Importa los controladores con nombres en plural para que coincidan con los archivos
use App\Http\Controllers\AulasController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\ReservasController;
// ... (y los demás controladores)

// Ruta para la página de inicio
Route::get('/', function () {
    return view('home');
})->name('home'); // <-- Añade el nombre a la ruta de inicio
// Rutas de recursos
Route::resource('aulas', AulasController::class);
Route::resource('docentes', DocentesController::class);
Route::resource('materias', MateriasController::class);
Route::resource('reservas', ReservasController::class);
// ... (y los demás Route::resource)