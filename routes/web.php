<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\StructureController;
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


Route::middleware('auth')->group(function () {
    //route pour les structures
    Route::get('structure', [StructureController::class, 'create'])->name('structure');
    Route::post('structure', [StructureController::class, 'store']);

    //route pour les services
    Route::get('service', [ServiceController::class, 'create'])->name('service');
    Route::get('service', [ServiceController::class, 'showRegistrationForm'])->name('service');
    Route::post('service', [ServiceController::class, 'store']);

    //route pour les materiels
    Route::get('materiel', [MaterielController::class, 'create'])->name('materiel');
    Route::get('materiel', [MaterielController::class, 'showRegistrationForm'])->name('materiel');
    Route::post('materiel', [MaterielController::class, 'store']);
});



Route::get('register', [UserController::class, 'create'])->name('register');
Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [UserController::class, 'store']);


Route::get('login', [UserController::class, 'createlogin'])->name('login');
Route::post('login', [UserController::class, 'login']);

Route::get('changement', [MaterielController::class, 'changement'])->name('changement');



