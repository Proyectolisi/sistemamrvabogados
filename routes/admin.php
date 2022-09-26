<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CircuitoController;
use App\Http\Controllers\Admin\MunicipioController;
use App\Http\Controllers\Admin\DespachoController;
use App\Http\Controllers\Admin\ProcesoController;
use App\Http\Controllers\Admin\ActuacioneController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

//Rutas de calendario

//Rutas de circuitos administrador
Route::resource('circuitos',CircuitoController::class)->names('admin.circuitos');
//Rutas de municipios administrador
Route::resource('municipios',MunicipioController::class)->names('admin.municipios');
//Rutas de despachos administrador
Route::resource('despachos',DespachoController::class)->names('admin.despachos');
//Rutas de procesos administrador
Route::resource('procesos',ProcesoController::class)->names('admin.procesos');
//Rutas de procesos actuaciones
Route::resource('actuaciones',ActuacioneController::class)->names('admin.actuaciones');
