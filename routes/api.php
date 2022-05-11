<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoEventoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\EventoLocalidadController;
use App\Http\Controllers\LocalidadController;
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
