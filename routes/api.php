<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\LifeSheetApiController;
use App\Http\Controllers\OccupationApiController;
use App\Http\Controllers\PostApiController;
use App\Http\Controllers\StateApiController;
use App\Http\Controllers\UserApiController;
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

// RUTAS USERS
// Ruta visualizacion de usuarios
Route::get('/users', [UserApiController::class, 'users']);
//Rutas para visualizar por id
Route::get('user/{id}', [UserApiController::class, 'getById']);
// Rutas para mirar credenciales de login
Route::post('/login', [UserApiController::class, 'login']);
//Ruta creacion desde postman
Route::post('/user', [UserApiController::class, 'crearUser']);

// RUTAS OCCUPATIONS
//Ruta visualizacion de ocupaciones
Route::get('/occupation', [OccupationApiController::class, 'occupation']);
//Ruta creacion desde postman
Route::post('/occupation', [OccupationApiController::class, 'crearOccupation']);
//Rutas para visualizar por id
Route::get('occupation/{id}', [OccupationApiController::class, 'getById']);


// RUTAS POSTS
//Ruta visualizacion de cargos
Route::get('/post', [PostApiController::class, 'post']);
//Ruta creacion desde postman
Route::post('/posts', [PostApiController::class, 'crearPost']);
//Rutas para visualizar por id
Route::get('post/{id}', [PostApiController::class, 'getById']);


// RUTAS STATES
//Ruta visualizacion de estados
Route::get('/state', [StateApiController::class, 'state']);
//Ruta creacion desde postman
Route::post('/state', [StateApiController::class, 'crearState']);
//Rutas para visualizar por id
Route::get('state/{id}', [StateApiController::class, 'getById']);


// RUTAS LIFESHEETS
//Ruta visualizacion de hojas de vida
Route::get('/lifeSheet', [LifeSheetApiController::class, 'lifeSheet']);
//Ruta creacion desde postman
Route::post('/lifeSheet', [LifeSheetApiController::class, 'crearLifeSheet']);
//Rutas para visualizar por id
Route::get('lifeSheet/{id}', [LifeSheetApiController::class, 'getById']);