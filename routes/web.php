<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NiveauScolaireController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name("home");

Route::get('/etudiant', [EtudiantController::class, "index"])->name("etudiant.index");
Route::get('/etudiant/create', [EtudiantController::class, "create"])->name("etudiant.create");

Route::get('/niveauscolaire', [NiveauScolaireController::class, "index"])->name("niveauscolaire.index");
Route::post('/niveauscolaire', [NiveauScolaireController::class, "store"])->name("niveauscolaire.store");
