<?php

use App\Http\Controllers\EjerciciosController;
use App\Http\Controllers\EjerciciosRutinasController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\RutinasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('ejercicios', EjerciciosController::class);
Route::apiResource('ejercicios_rutina', EjerciciosRutinasController::class);
Route::apiResource('entrenador', EntrenadorController::class);
Route::apiResource('perfiles', PerfilesController::class);
Route::apiResource('planes', PlanesController::class);
Route::apiResource('rutinas', RutinasController::class);
Route::apiResource('usuarios', UsuariosController::class);
