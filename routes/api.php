<?php

use App\Http\Controllers\AbilityApiController;
use App\Http\Controllers\AdministratorApiController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CandidateApiController;
use App\Http\Controllers\CompanyApiController;
use App\Http\Controllers\DenominationApiController;
use App\Http\Controllers\FunctionApiController;
use App\Http\Controllers\InstructorApiController;
use App\Http\Controllers\KnowledgeApiController;
use App\Http\Controllers\LifeSheetApiController;
use App\Http\Controllers\LocationApiController;
use App\Http\Controllers\OccupationApiController;
use App\Http\Controllers\OfferApiController;
use App\Http\Controllers\PostApiController;
use App\Http\Controllers\RecruiterApiController;
use App\Http\Controllers\RelationApiController;
use App\Http\Controllers\SelectorApiController;
use App\Http\Controllers\StateApiController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\UserTypeApiController;
use App\Http\Controllers\VacantApiController;
use App\Http\Controllers\WeighingApiController;
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


// RUTAS KNOWLEDGES
//Ruta visualizacion de conocimientos
Route::get('/knowledge', [KnowledgeApiController::class, 'knowledge']);
//Ruta creacion desde postman
Route::post('/knowledge', [KnowledgeApiController::class, 'crearKnowledge']);
//Rutas para visualizar por id
Route::get('knowledge/{id}', [KnowledgeApiController::class, 'getById']);


// RUTAS LOCATIONS
//Ruta visualizacion de localidades
Route::get('/location', [LocationApiController::class, 'location']);
//Ruta creacion desde postman
Route::post('/location', [LocationApiController::class, 'crearLocation']);
//Rutas para visualizar por id
Route::get('location/{id}', [LocationApiController::class, 'getById']);


// RUTAS OFFERS
//Ruta visualizacion de ofertas
Route::get('/offer', [OfferApiController::class, 'offer']);
//Ruta creacion desde postman
Route::post('/offer', [OfferApiController::class, 'crearOffer']);
//Rutas para visualizar por id
Route::get('offer/{id}', [OfferApiController::class, 'getById']);


// RUTAS RECRUITERS
//Ruta visualizacion de reclutadores
Route::get('/recruiter', [RecruiterApiController::class, 'recruiter']);
//Ruta creacion desde postman
Route::post('/recruiter', [RecruiterApiController::class, 'crearRecruiter']);
//Rutas para visualizar por id
Route::get('recruiter/{id}', [RecruiterApiController::class, 'getById']);


// RUTAS RELATION
//Ruta visualizacion de relaciones
Route::get('/relation', [RelationApiController::class, 'relation']);
//Ruta creacion desde postman
Route::post('/relation', [RelationApiController::class, 'crearRelation']);
//Rutas para visualizar por id
Route::get('relation/{id}', [RelationApiController::class, 'getById']);


// RUTAS SELECTORS
//Ruta visualizacion de seleccionadores
Route::get('/selector', [SelectorApiController::class, 'selector']);
//Ruta creacion desde postman
Route::post('/selector', [SelectorApiController::class, 'crearSelector']);
//Rutas para visualizar por id
Route::get('selector/{id}', [SelectorApiController::class, 'getById']);


// RUTAS USER_TYPES
//Ruta visualizacion de tipos de usuarios
Route::get('/user_type', [UserTypeApiController::class, 'user_type']);
//Ruta creacion desde postman
Route::post('/user_type', [UserTypeApiController::class, 'crearUserType']);
//Rutas para visualizar por id
Route::get('user_type/{id}', [UserTypeApiController::class, 'getById']);


// RUTAS VACANTS
//Ruta visualizacion de vacantes
Route::get('/vacant', [VacantApiController::class, 'vacant']);
//Ruta creacion desde postman
Route::post('/vacant', [VacantApiController::class, 'crearVacant']);
//Rutas para visualizar por id
Route::get('vacant/{id}', [VacantApiController::class, 'getById']);


// RUTAS WEIGHINGS
//Ruta visualizacion de ponderaciones
Route::get('/weighing', [WeighingApiController::class, 'weighing']);
//Ruta creacion desde postman
Route::post('/weighing', [WeighingApiController::class, 'crearWeighing']);
//Rutas para visualizar por id
Route::get('weighing/{id}', [WeighingApiController::class, 'getById']);