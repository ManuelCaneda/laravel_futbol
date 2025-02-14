<?php

use App\Http\Controllers\TorneoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});


Route::get('/torneos/listar', [TorneoController::class,'listar'])->name('listar-torneos');
Route::get('/equipos/listar', [EquipoController::class,'listar'])->name('listar-equipos');
Route::get('/jugadores/listar', [JugadorController::class,'listar'])->name('listar-jugadores');

Route::get('/torneos/form', [TorneoController::class,'formTorneo'])->name('form-torneos');
Route::post('/torneos/form', [TorneoController::class,'addTorneo'])->name('add-torneo');
Route::get('/torneos/formEquipoTorneo', [TorneoController::class,'formEquipoTorneo'])->name('form-eq-torneo');
Route::post('/torneos/addEquipoTorneo', [TorneoController::class,'addEquipoTorneo'])->name('add-eq-torneo');

Route::get('/equipos/form', [EquipoController::class,'formEquipo'])->name('form-equipos');
Route::post('/equipos/form', [EquipoController::class,'addEquipo'])->name('add-equipo');

Route::get('/jugadores/form', [JugadorController::class,'formJugador'])->name('form-jugadores');
Route::post('/jugadores/add', [JugadorController::class,'addJugador'])->name('add-jugador');