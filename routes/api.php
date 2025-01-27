<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\GenreController;
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

// Rutas para las bandas

Route::get('/bands', [BandController::class, 'index']); // Retorna todas las bandas
Route::get('/bands/{id}', [BandController::class, 'show']); // Retorna una banda por ID

// Rutas para los géneros
Route::get('/genres', [GenreController::class, 'index']); // Retorna todos los géneros con sus bandas
Route::get('/genres/{id}', [GenreController::class, 'show']); // Retorna un género con sus bandas



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
