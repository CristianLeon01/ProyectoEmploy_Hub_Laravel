<?php

use App\Http\Controllers\ApiController;
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

// Ruta visualizacion de usuarios
Route::get('/users', [ApiController::class, 'users']);

//Ruta visualizacion de ocupaciones
Route::get('/occupations', [ApiController::class, 'occupations']);

//Ruta creacion desde postman
Route::post('/posts', [ApiController::class, 'crearPost']);

// Rutas para mirar credenciales de login
Route::post('/login', [ApiController::class, 'login']);