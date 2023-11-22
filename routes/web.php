<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;


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
    return view('welcome');
});

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

//candidat
Route::get('list/candidat', [CandidatController::class, 'index'])->name('list');
Route::get('add/candidat', [CandidatController::class, 'create'])->name('add');
Route::post('add/candidat', [CandidatController::class, 'store'])->name('ajout.candidat');
Route::get('delete-candidat/{id}', [CandidatController::class, 'delete'])->name('delete.candidat');
Route::get('edit-candidat/{id}', [CandidatController::class, 'edit'])->name('edit.candidat');
Route::post('update-candidat/{id}', [CandidatController::class, 'update'])->name('update.candidat');
Route::get('candidat/candidatPDF', [CandidatController::class, 'candidatPDF'])->name('candidat.candidatPDF');

//electeur
Route::get('electeur/list', [ElecteurController::class, 'index'])->name('electeur.list');
Route::get('electeur/add', [ElecteurController::class, 'create'])->name('electeur.add');
Route::post('electeur/add', [ElecteurController::class, 'store'])->name('electeur.ajout');
Route::get('electeur-delete/{id}', [ElecteurController::class, 'delete'])->name('electeur.delete');
Route::get('electeur-edit/{id}', [ElecteurController::class, 'edit'])->name('electeur.edit');
Route::post('electeur-update/{id}', [ElecteurController::class, 'update'])->name('electeur.update');
Route::get('electeur-delete/{id}', [ElecteurController::class, 'delete'])->name('electeur.delete');

//Formation SAFED
Route::get('formation/list', [FormationController::class, 'index'])->name('formation.list');
Route::get('formation/add', [FormationController::class, 'create'])->name('formation.ajout');
Route::post('formation/add', [FormationController::class, 'store'])->name('formation.add');
Route::get('formation/edit-candidat/{id}', [FormationController::class, 'edit'])->name('formation.edit');
Route::post('formation/update-candidat/{id}', [FormationController::class, 'update'])->name('formation.update');
Route::get('formation/delete-candidat/{id}', [FormationController::class, 'delete'])->name('formation.delete');
Route::get('formation/listPDF', [FormationController::class, 'listPDF'])->name('formation.listPDF');