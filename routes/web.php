<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbilityController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DenominationController;
use App\Http\Controllers\FunctionController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\LifeSheetController;
use App\Http\Controllers\OccupationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\SelectorController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\VacantController;
use App\Http\Controllers\WeighingController;
use App\Http\Controllers\Contract_TypeController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AboutUSController;
use App\Http\Controllers\BienvenidaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TermsAndConditionsController;
use App\Http\Controllers\UserController;
use App\Models\Recruiter;
use Illuminate\Auth\Events\Logout;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('layouts.app');
});


Route::get('/aboutUs', [AboutUSController::class, 'mostrarAbout'])->name('aboutUs');

Route::get('/termsConditions', [TermsAndConditionsController::class, 'mostrarTermsConditions'])->name('termsConditions');

Route::get('/layouts', [BienvenidaController::class, 'redirect'])->name('layouts');

// Routes Ability
Route::get('/skill', [AbilityController::class, 'Ability'])->name('skill');
Route::get('/skill/create', [AbilityController::class, 'Create'])->name('create.skill');
Route::post('/skill/store', [AbilityController::class, 'Store'])->name('store.skill');
Route::get('/skill/edit/{skill}', [AbilityController::class,'Edit'])->name('edit.skill');
Route::put('/skill/update/{skill}', [AbilityController::class,'Update'])->name('update.skill');
Route::get('/skill/show/{skill}', [AbilityController::class,'Show'])->name('show.skill');
Route::delete('/skill/destroy/{skill}', [AbilityController::class,'Destroy'])->name('destroy.skill');

// Routes Administrator
// Route::get('/administrators', [AdministratorController::class, 'Administrator'])->name('administrator');
// Route::get('/administrators/create', [AdministratorController::class, 'Create'])->name('create.administrator');
// Route::post('/administrators/store', [AdministratorController::class, 'Store'])->name('store.administrator');
// Route::get('/administrators/edit/{administrator}', [AdministratorController::class,'Edit'])->name('edit.administrator');
// Route::put('/administrators/update/{administrator}', [AdministratorController::class,'Update'])->name('update.administrator');
// Route::get('/administrators/show/{administrator}', [AdministratorController::class,'Show'])->name('show.administrator');
// Route::delete('/administrators/destroy/{administrator}', [AdministratorController::class,'Destroy'])->name('destroy.administrator');

Route::resource('administrator', AdministratorController::class);
Route::get('/headerAdmin', [AdministratorController::class, 'header'])->name('headerAdmin');

//Routes Candidate
// Route::get('/candidate', [CandidateController::class, 'Candidate'])->name('candidate');
// Route::get('/candidate/create', [CandidateController::class, 'Create'])->name('create.candidate');
// Route::post('/candidate/store', [CandidateController::class, 'Store'])->name('store.candidate');
// Route::get('/candidate/edit/{candidate}', [CandidateController::class,'Edit'])->name('edit.candidate');
// Route::put('/candidate/update/{candidate}', [CandidateController::class,'Update'])->name('update.candidate');
// Route::get('/candidate/show/{candidate}', [CandidateController::class,'Show'])->name('show.candidate');
// Route::delete('/candidate/destroy/{candidate}', [CandidateController::class,'Destroy'])->name('destroy.candidate');

Route::resource('candidate', CandidateController::class);
Route::get('/headerCandidate', [CandidateController::class, 'header'])->name('headerCandidate');


//Routes Company
Route::get('/headerCompany', [CompanyController::class, 'header'])->name('headerCompany');
Route::get('/company', [CompanyController::class, 'Company'])->name('company');
Route::get('/company/create', [CompanyController::class, 'Create'])->name('create.company')->middleware('auth');
Route::post('/company/store', [CompanyController::class, 'Store'])->name('store.company');
Route::get('/company/edit/{company}', [CompanyController::class,'Edit'])->name('edit.company');
Route::put('/company/update/{company}', [CompanyController::class,'Update'])->name('update.company');
Route::get('/company/show/{company}', [CompanyController::class,'Show'])->name('show.company');
Route::delete('/company/destroy/{company}', [CompanyController::class,'Destroy'])->name('destroy.company');

//Routes Denomination
Route::get('/denomination', [DenominationController::class, 'Denomination'])->name('denomination');
Route::get('/denomination/create', [DenominationController::class, 'Create'])->name('create.denomination')->middleware('auth');
Route::post('/denomination/store', [DenominationController::class, 'Store'])->name('store.denomination');
Route::get('/denomination/edit/{denomination}', [DenominationController::class,'Edit'])->name('edit.denomination');
Route::put('/denomination/update/{denomination}', [DenominationController::class,'Update'])->name('update.denomination');
Route::get('/denomination/show/{denomination}', [DenominationController::class,'Show'])->name('show.denomination');
Route::delete('/denomination/destroy/{denomination}', [DenominationController::class,'Destroy'])->name('destroy.denomination');

//Routes Function
Route::get('/funtion', [FunctionController::class, 'Functionn'])->name('funtion');
Route::get('/funtion/create', [FunctionController::class, 'Create'])->name('create.funtion')->middleware('auth');
Route::post('/funtion/store', [FunctionController::class, 'Store'])->name('store.funtion');
Route::get('/funtion/edit/{funtion}', [FunctionController::class,'Edit'])->name('edit.funtion');
Route::put('/funtion/update/{funtion}', [FunctionController::class,'Update'])->name('update.funtion');
Route::get('/funtion/show/{funtion}', [FunctionController::class,'Show'])->name('show.funtion');
Route::delete('/funtion/destroy/{funtion}', [FunctionController::class,'Destroy'])->name('destroy.funtion');

// Routes Knowledge
Route::get('/knowledge', [KnowledgeController::class, 'Knowledge'])->name('knowledge');
Route::get('/knowledge/create', [KnowledgeController::class, 'Create'])->name('create.knowledge')->middleware('auth');
Route::post('/knowledge/store', [KnowledgeController::class, 'Store'])->name('store.knowledge');
Route::get('/knowledge/edit/{knowledge}', [KnowledgeController::class,'Edit'])->name('edit.knowledge');
Route::put('/knowledge/update/{knowledge}', [KnowledgeController::class,'Update'])->name('update.knowledge');
Route::get('/knowledge/show/{knowledge}', [KnowledgeController::class,'Show'])->name('show.knowledge');
Route::delete('/knowledge/destroy/{knowledge}', [KnowledgeController::class,'Destroy'])->name('destroy.knowledge');

// Routes LifeSheet
Route::get('/lifeSheet', [LifeSheetController::class, 'LifeSheet'])->name('lifeSheet');
Route::get('/lifeSheet/create', [LifeSheetController::class, 'Create'])->name('create.lifeSheet')->middleware('auth');
Route::post('/lifeSheet/store', [LifeSheetController::class, 'Store'])->name('store.lifeSheet');
Route::get('/lifeSheet/edit/{lifeSheet}', [LifeSheetController::class,'Edit'])->name('edit.lifeSheet');
Route::put('/lifeSheet/update/{lifeSheet}', [LifeSheetController::class,'Update'])->name('update.lifeSheet');
Route::get('/lifeSheet/show/{lifeSheet}', [LifeSheetController::class,'Show'])->name('show.lifeSheet');
Route::delete('/lifeSheet/destroy/{lifeSheet}', [LifeSheetController::class,'Destroy'])->name('destroy.lifeSheet');

// Routes Occupation
Route::get('/occupation', [OccupationController::class, 'Occupation'])->name('occupation');
Route::get('/occupation/create', [OccupationController::class, 'Create'])->name('create.occupation')->middleware('auth');
Route::post('/occupation/store', [OccupationController::class, 'Store'])->name('store.occupation');
Route::get('/occupation/edit/{occupation}', [OccupationController::class,'Edit'])->name('edit.occupation');
Route::put('/occupation/update/{occupation}', [OccupationController::class,'Update'])->name('update.occupation');
Route::get('/occupation/show/{occupation}', [OccupationController::class,'Show'])->name('show.occupation');
Route::delete('/occupation/destroy/{occupation}', [OccupationController::class,'Destroy'])->name('destroy.occupation');

// Routes Post
Route::get('/post', [PostController::class, 'Post'])->name('post');
Route::get('/post/create', [PostController::class, 'Create'])->name('create.post')->middleware('auth');
Route::post('/post/store', [PostController::class, 'Store'])->name('store.post');
Route::get('/post/edit/{post}', [PostController::class,'Edit'])->name('edit.post');
Route::put('/post/update/{post}', [PostController::class,'Update'])->name('update.post');
Route::get('/post/show/{post}', [PostController::class,'Show'])->name('show.post');
Route::delete('/post/destroy/{post}', [PostController::class,'Destroy'])->name('destroy.post');

// Routes Recruiter
Route::get('/headerRecruiter', [RecruiterController::class, 'header'])->name('headerRecruiter');
Route::get('/recruiter', [RecruiterController::class, 'Recruiter'])->name('recruiter');
Route::get('/recruiter/create', [RecruiterController::class, 'Create'])->name('create.recruiter')->middleware('auth');
Route::post('/recruiter/store', [RecruiterController::class, 'Store'])->name('store.recruiter');
Route::get('/recruiter/edit/{recruiter}', [RecruiterController::class,'Edit'])->name('edit.recruiter');
Route::put('/recruiter/update/{recruiter}', [RecruiterController::class,'Update'])->name('update.recruiter');
Route::get('/recruiter/show/{recruiter}', [RecruiterController::class,'Show'])->name('show.recruiter');
Route::delete('/recruiter/destroy/{recruiter}', [RecruiterController::class,'Destroy'])->name('destroy.recruiter');

// Routes Relation
Route::get('/relation', [RelationController::class, 'Relation'])->name('relation');
Route::get('/relation/create', [RelationController::class, 'Create'])->name('create.relation')->middleware('auth');
Route::post('/relation/store', [RelationController::class, 'Store'])->name('store.relation');
Route::get('/relation/edit/{relation}', [RelationController::class,'Edit'])->name('edit.relation');
Route::put('/relation/update/{relation}', [RelationController::class,'Update'])->name('update.relation');
Route::get('/relation/show/{relation}', [RelationController::class,'Show'])->name('show.relation');
Route::delete('/relation/destroy/{relation}', [RelationController::class,'Destroy'])->name('destroy.relation');

// Routes Selector
Route::get('/headerSelector', [SelectorController::class, 'header'])->name('headerSelector');
Route::get('/selector', [SelectorController::class, 'Selector'])->name('selector');
Route::get('/selector/create', [SelectorController::class, 'Create'])->name('create.selector')->middleware('auth');;
Route::post('/selector/store', [SelectorController::class, 'Store'])->name('store.selector');
Route::get('/selector/edit/{selector}', [SelectorController::class,'Edit'])->name('edit.selector');
Route::put('/selector/update/{selector}', [SelectorController::class,'Update'])->name('update.selector');
Route::get('/selector/show/{selector}', [SelectorController::class,'Show'])->name('show.selector');
Route::delete('/selector/destroy/{selector}', [SelectorController::class,'Destroy'])->name('destroy.selector');

// Routes State
Route::get('/state', [StateController::class, 'State'])->name('state');
Route::get('/state/create', [StateController::class, 'Create'])->name('create.state')->middleware('auth');
Route::post('/state/store', [StateController::class, 'Store'])->name('store.state');
Route::get('/state/edit/{state}', [StateController::class,'Edit'])->name('edit.state');
Route::put('/state/update/{state}', [StateController::class,'Update'])->name('update.state');
Route::get('/state/show/{state}', [StateController::class,'Show'])->name('show.state');
Route::delete('/state/destroy/{state}', [StateController::class,'Destroy'])->name('destroy.state');

// Routes UserType
Route::get('/usertype', [UserTypeController::class, 'UserType'])->name('usertype');
Route::get('/usertype/create', [UserTypeController::class, 'Create'])->name('create.usertype')->middleware('auth');
Route::post('/usertype/store', [UserTypeController::class, 'Store'])->name('store.usertype');
Route::get('/usertype/edit/{usertype}', [UserTypeController::class,'Edit'])->name('edit.usertype');
Route::put('/usertype/update/{usertype}', [UserTypeController::class,'Update'])->name('update.usertype');
Route::get('/usertype/show/{usertype}', [UserTypeController::class,'Show'])->name('show.usertype');
Route::delete('/usertype/destroy/{usertype}', [UserTypeController::class,'Destroy'])->name('destroy.usertype');

// Routes Offer
Route::get('/offer', [OfferController::class, 'Offer'])->name('offer');
Route::get('/offer/create', [OfferController::class, 'Create'])->name('create.offer')->middleware('auth');
Route::post('/offer/store', [OfferController::class, 'Store'])->name('store.offer');
Route::get('/offer/edit/{offer}', [OfferController::class,'Edit'])->name('edit.offer');
Route::put('/offer/update/{offer}', [OfferController::class,'Update'])->name('update.offer');
Route::get('/offer/show/{offer}', [OfferController::class,'Show'])->name('show.offer');
Route::delete('/offer/destroy/{offer}', [OfferController::class,'Destroy'])->name('destroy.offer');

// Routes Weighing
Route::get('/weighing', [WeighingController::class, 'Weighing'])->name('weighing');
Route::get('/weighing/create', [WeighingController::class, 'Create'])->name('create.weighing')->middleware('auth');
Route::post('/weighing/store', [WeighingController::class, 'Store'])->name('store.weighing');
Route::get('/weighing/edit/{weighing}', [WeighingController::class,'Edit'])->name('edit.weighing');
Route::put('/weighing/update/{weighing}', [WeighingController::class,'Update'])->name('update.weighing');
Route::get('/weighing/show/{weighing}', [WeighingController::class,'Show'])->name('show.weighing');
Route::delete('/weighing/destroy/{weighing}', [WeighingController::class,'Destroy'])->name('destroy.weighing');

Route::get('auth/login', [LoginController::class, 'index'])->name('login');
Route::post('logout', [LogoutController::class, 'store'])->name('logout');
Route::post('login', [LoginController::class, 'store'])->name('login.auth');

Route::get('home', [HomeController::class, 'index'])->name('home.index');

Route::resource('user', UserController::class);
Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store']);

Route::get('/registro', [RegisterController::class, 'create'])->name('registro.create');
Route::post('/registro', [RegisterController::class, 'store'])->name('registro.store');
Route::get('/home', [HomeController::class, 'mostrarHTML'])->name('home');