<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoEventoController;
use App\Http\Controllers\ContactoLocalidadController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\EventoLocalidadController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\SeccionController;
use App\Models\ContactoLocalidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('eventos', EventoController::class);
Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('contactoEventos', ContactoEventoController::class);
Route::apiResource('localidads', LocalidadController::class);
Route::apiResource('evento_localidads', EventoLocalidadController::class);
Route::apiResource('horarios', HorarioController::class);
Route::apiResource('seccions', SeccionController::class);
Route::apiResource('areas', AreaController::class);
Route::apiResource('espacios', EspacioController::class);
Route::apiResource('contactoLocalidads', ContactoLocalidadController::class);
