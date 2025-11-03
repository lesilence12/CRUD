<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

// lister
Route::get('/',[EtudiantController::class, 'liste_etudiant']);

// ajouter
Route::prefix('/ajouter')->group(function(){
    Route::get('/',[EtudiantController::class, 'ajouter_etudiant']);
    Route::post('/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']);
});

// modifier
Route::prefix('/modifier')->group(function(){
    Route::get('/{id}',[EtudiantController::class, 'modifier_etudiant']);
    Route::post('/traitement',[EtudiantController::class, 'modifier_etudiant_traitement']);
});

//supprimer
Route::get('/supprimer/{id}',[EtudiantController::class, 'supprimer_etudiant']);
