<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

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

Route::get('/list', [EtudiantController::class, 'list_etudiant']);
Route::get('/create', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/create/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/update/{id}', [EtudiantController::class, 'update_etudiant']);
Route::get('/delete/{id}', [EtudiantController::class, 'delete_etudiant']);
