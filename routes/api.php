<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\LocalidadController;


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

/**
 * Provincia
 */
Route::post('insertProvincias', [ProvinciaController::class, 'store']);
// Listar todas las provincias
Route::get('getAllProvincias', [ProvinciaController::class, 'index']);
// Listar un provincia
Route::get('getProvincia/{id}', [ProvinciaController::class, 'show']);


/**
* Localidad
*/
// Listar todos
Route::get('getAllLocalidades', [LocalidadController::class, 'index']);
// Listar una localidad
Route::get('getLocalidad/{id}', [LocalidadController::class, 'show']);
// Registrar una localidad
Route::post('postLocalidad', [LocalidadController::class, 'store']);
// Actualizar una localidad
Route::put('updateLocalidad', [LocalidadController::class, 'update']);
// borrar una localidad
Route::delete('borrarLocalidad/{id}', [LocalidadController::class, 'destroy']);