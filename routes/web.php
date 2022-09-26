<?php

use Illuminate\Support\Facades\Route;

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
    return view ('welcome');
});

Auth::routes();
//Rutas de inicio de sesión
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Rutas de calendario
Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');
Route::get('/calendar/mostrar', [App\Http\Controllers\CalendarController::class, 'show']);
Route::post('/calendar/agregar', [App\Http\Controllers\CalendarController::class, 'store']);
Route::post('/calendar/editar/{id}', [App\Http\Controllers\CalendarController::class, 'edit']);
Route::post('/calendar/actualizar/{calendar}', [App\Http\Controllers\CalendarController::class, 'update']);
Route::post('/calendar/borrar/{id}', [App\Http\Controllers\CalendarController::class, 'destroy']);
//Rutas de clientes
Route::resource('cliente',App\Http\Controllers\ClienteController::class)->middleware('auth'); //con esta instrución se puede acceder a todas la url de clienteController(edit, create..etc)
//Rutas de circuitos
Route::resource('circuitos',App\Http\Controllers\CircuitoController::class)->middleware('auth');
//Rutas de municipios
Route::resource('municipios',App\Http\Controllers\MunicipioController::class)->middleware('auth');
//Rutas de despachos
Route::resource('despachos',App\Http\Controllers\DespachoController::class)->middleware('auth');
//Rutas de procesos
Route::resource('procesos',App\Http\Controllers\ProcesoController::class)->middleware('auth');
//Rutas de actuaciones
Route::resource('actuaciones',App\Http\Controllers\ActuacioneController::class)->middleware('auth');
Route::get('\download\{file}', [App\Http\Controllers\ActuacioneController::class, 'download']);
Route::get('\view\{id}', [App\Http\Controllers\ActuacioneController::class, 'view']);

