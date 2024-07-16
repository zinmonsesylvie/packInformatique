<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LogicielController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\TypeDeMaterielController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('dashboard');
})->name('home');


Route::middleware(['auth'])->group(function(){
    //route pour les structures
    Route::get('structure', [StructureController::class, 'create'])->name('structure');
    Route::get('afficherStructure', [StructureController::class, 'index'])->name('afficherStructure');
    Route::post('structure', [StructureController::class, 'store']);
    Route::get('editStructure/{id}', [StructureController::class, 'edit'])->name('editStructure');
    Route::put('updateStructure/{id}', [StructureController::class, 'update'])->name('updateStructure');
    Route::delete('destroyStructure', [StructureController::class, 'destroy'])->name('destroyStructure');

    //route pour les services
    Route::get('service', [ServiceController::class, 'create'])->name('service');
    Route::get('afficherService', [ServiceController::class, 'index'])->name('afficherService');
    Route::get('service', [ServiceController::class, 'showRegistrationForm'])->name('service');
    Route::get('service', [ServiceController::class, 'showRegistration'])->name('service');
    Route::post('service', [ServiceController::class, 'store']);
    Route::get('editService/{id}', [ServiceController::class, 'edit'])->name('editService');
    Route::put('/service/update/{id}', [ServiceController::class, 'update'])->name('updateService');
    Route::delete('destroyService', [ServiceController::class, 'destroy'])->name('destroyService');

    //route pour les materiels
    Route::get('materiel', [MaterielController::class, 'create'])->name('materiel');
    Route::get('afficherMateriel', [MaterielController::class, 'index'])->name('afficherMateriel');
    Route::get('materiel', [MaterielController::class, 'showRegistrationForm'])->name('materiel');
    Route::post('materiel', [MaterielController::class, 'store']);
    Route::put('editMateriel', [MaterielController::class, 'edit'])->name('editMateriel');
    Route::delete('destroyMateriel', [MaterielController::class, 'destroy'])->name('destroyMateriel');

    //route agent
    Route::get('agent', [AgentController::class, 'create'])->name('agent');
    Route::get('afficherAgent', [AgentController::class, 'index'])->name('afficherAgent');
    Route::get('agent', [AgentController::class, 'showRegistrationForm'])->name('agent');
    Route::post('agent', [AgentController::class, 'store']);
    Route::get('editAgent/{id}', [AgentController::class, 'edit'])->name('editAgent');
    Route::put('updateAgent/{id}', [AgentController::class, 'update'])->name('updateAgent');
    Route::delete('destroyAgent', [AgentController::class, 'destroy'])->name('destroyAgent');
    
    //route logiciel
    Route::get('logiciel', [LogicielController::class, 'create'])->name('logiciel');
    Route::get('afficherLogiciel', [LogicielController::class, 'index'])->name('afficherLogiciel');
    Route::post('logiciel', [LogicielController::class, 'store']);
    Route::get('editLogiciel/{id}', [LogicielController::class, 'edit'])->name('editLogiciel');
    Route::put('updateLogiciel/{id}', [LogicielController::class, 'update'])->name('updateLogiciel');


    //route maintenance
    Route::get('maintenance', [MaintenanceController::class, 'create'])->name('maintenance');
    Route::get('maintenance', [MaintenanceController::class, 'showRegistrationForm'])->name('maintenance');


    //route profile
    Route::get('profile', [UserController::class, 'showProfile'])->name('profile');
    Route::get('userconnecter', [UserController::class, 'userconnecter'])->name('userconnecter');
    //route déconnexion
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

//route inscription
Route::get('register', [UserController::class, 'create'])->name('register');
Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [UserController::class, 'store']);

//route connexion
Route::get('login', [UserController::class, 'createlogin'])->name('login');
Route::post('login', [UserController::class, 'login']);

Route::get('changement', [MaterielController::class, 'changement'])->name('changement');



