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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route pour exporter le pdf
Route::get('agents/export-pdf', [AgentController::class, 'exportPDF'])->name('agents.export-pdf');

Route::middleware(['auth'])->group(function(){
    //route pour les structures
    Route::get('structure', [StructureController::class, 'create'])->name('structure');
    Route::get('afficherStructure', [StructureController::class, 'index'])->name('afficherStructure');
    Route::post('structure', [StructureController::class, 'store']);
    Route::get('/structure/edit/{structure}', [StructureController::class, 'edit'])->name('editStructure');
    Route::put('/structure/update/{structure}', [StructureController::class, 'update'])->name('updateStructure');
    Route::get('/structure/delete/{structure}',[StructureController::class, 'delete'])->name('structure.delete');

    //route pour les services
    Route::get('service', [ServiceController::class, 'create'])->name('service');
    Route::get('afficherService', [ServiceController::class, 'index'])->name('afficherService');
    Route::post('service', [ServiceController::class, 'store']);
    Route::get('/service/edit/{service}', [ServiceController::class, 'edit'])->name('editService');
    Route::put('/service/update/{service}', [ServiceController::class, 'update'])->name('updateService');
    Route::get('/service/delete/{service}',[ServiceController::class, 'delete'])->name('service.delete');

    //route pour les materiels
    Route::get('materiel', [MaterielController::class, 'create'])->name('materiel');
    Route::get('afficherMateriel', [MaterielController::class, 'index'])->name('afficherMateriel');
    Route::get('ordinateurp', [MaterielController::class, 'listeordinateurp'])->name('ordinateurp');
    Route::get('ordinateurb', [MaterielController::class, 'listeordinateurb'])->name('ordinateurb');
    Route::get('imprimante', [MaterielController::class, 'listeimprimante'])->name('imprimante');
    Route::get('listestructure', [MaterielController::class, 'materielstructure'])->name('listestructure');
    Route::get('scanner', [MaterielController::class, 'listescanner'])->name('scanner');
    Route::post('materiel', [MaterielController::class, 'store']);
    Route::put('editMateriel', [MaterielController::class, 'edit'])->name('editMateriel');
    Route::delete('destroyMateriel', [MaterielController::class, 'destroy'])->name('destroyMateriel');

    //route agent
    Route::get('agent', [AgentController::class, 'create'])->name('agent');
    Route::get('afficherAgent', [AgentController::class, 'index'])->name('afficherAgent');
    Route::post('agent', [AgentController::class, 'store']);
    Route::get('agent/edit/{agent}', [AgentController::class, 'edit'])->name('editAgent');
    Route::put('agent/update/{agent}', [AgentController::class, 'update'])->name('updateAgent');
    Route::get('agent/delete/{agent}',[AgentController::class, 'delete'])->name('destroyAgent');
    
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



