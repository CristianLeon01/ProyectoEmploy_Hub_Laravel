<?php

use App\Http\Controllers\AbilityApiController;
use App\Http\Controllers\AdministratorApiController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CandidateApiController;
use App\Http\Controllers\CompanyApiController;
use App\Http\Controllers\DenominationApiController;
use App\Http\Controllers\FunctionApiController;
use App\Http\Controllers\InstructorApiController;
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
Route::get('/user', [UserApiController::class, 'users']);
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
Route::post('/post', [PostApiController::class, 'crearPost']);
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



// RUTAS ABILITIES
//Ruta visualizacion de habilidades
Route::get('/skill', [AbilityApiController::class, 'skill']);
//Ruta creacion desde postman
Route::post('/skill', [AbilityApiController::class, 'crearSkill']);
//Rutas para visualizar por id
Route::get('skill/{id}', [AbilityApiController::class, 'getById']);


// RUTAS ADMINISTRATOR
//Ruta visualizacion de administradores
Route::get('/administrator', [AdministratorApiController::class, 'administrator']);
//Ruta creacion desde postman
Route::post('/administrator', [AdministratorApiController::class, 'crearAdministrator']);
//Rutas para visualizar por id
Route::get('administrator/{id}', [AdministratorApiController::class, 'getById']);


// RUTAS CANDIDATES
//Ruta visualizacion de candidatos
Route::get('/candidate', [CandidateApiController::class, 'candidate']);
//Ruta creacion desde postman
Route::post('/candidate', [CandidateApiController::class, 'crearCandidate']);
//Rutas para visualizar por id
Route::get('candidate/{id}', [CandidateApiController::class, 'getById']);


// RUTAS COMPANIES
//Ruta visualizacion de empresas
Route::get('/company', [CompanyApiController::class, 'company']);
//Ruta creacion desde postman
Route::post('/company', [CompanyApiController::class, 'crearCompany']);
//Rutas para visualizar por id
Route::get('company/{id}', [CompanyApiController::class, 'getById']);


// RUTAS CONTRACT_TYPE
//Ruta visualizacion de tipos de contrato
Route::get('/contract_type', [AbilityApiController::class, 'contract_type']);
//Ruta creacion desde postman
Route::post('/contract_type', [AbilityApiController::class, 'crearContractType']);
//Rutas para visualizar por id
Route::get('contract_type/{id}', [AbilityApiController::class, 'getById']);


// RUTAS DENOMINATION
//Ruta visualizacion de denominations
Route::get('/denomination', [DenominationApiController::class, 'denomination']);
//Ruta creacion desde postman
Route::post('/denomination', [DenominationApiController::class, 'crearDenomination']);
//Rutas para visualizar por id
Route::get('denomination/{id}', [DenominationApiController::class, 'getById']);


// RUTAS FUNTIONS
//Ruta visualizacion de funciones
Route::get('/function', [FunctionApiController::class, 'function']);
//Ruta creacion desde postman
Route::post('/function', [FunctionApiController::class, 'crearFunction']);
//Rutas para visualizar por id
Route::get('function/{id}', [FunctionApiController::class, 'getById']);


// RUTAS INSTRUCTORS
//Ruta visualizacion de instructores
Route::get('/instructor', [InstructorApiController::class, 'instructor']);
//Ruta creacion desde postman
Route::post('/instructor', [InstructorApiController::class, 'crearInstructor']);
//Rutas para visualizar por id
Route::get('instructor/{id}', [InstructorApiController::class, 'getById']);