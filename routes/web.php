<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialtyController;

// Ruta principal que muestra la vista de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas de recurso para los doctores
Route::resource('doctores', DoctorController::class);

// Rutas de recurso para las especialidades
Route::resource('especialidades', SpecialtyController::class);
