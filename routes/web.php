<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Routes de l'application ROCF assurant la gestion vers les controleurs
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\FichierController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UtilisateurController;

// Routes pour les pages principales
Route::get('/',                 [Controller::class, 'accueil'])->name('accueil');
Route::get('/accueil',          [Controller::class, 'accueil'])->name('accueil');
Route::get('/partenaires',      [Controller::class, 'partenaires'])->name('partenaires');


// Routes pour la gestion des session
//Route::post('/authentification',    [Controller::class, 'authentification'])->name('authentification');
Route::get('/connecter',            [Controller::class, 'connexion'])->name('connecter');

//Admin routes
Route::get('/gestion',                [UtilisateurController::class, 'admin'])->name('gestion');
Route::get('/utilisateur',                [UtilisateurController::class, 'vue_utilisateur']);
Route::post('/ajouter_utilisateur',                [UtilisateurController::class, 'ajouter_utilisateur']);
Route::get('partenaire',                [UtilisateurController::class, 'partenaire'])->name('partenaire');
Route::post('ajouter_partenaire',                [UtilisateurController::class, 'ajouter_partenaire']);
//utilisateur routes
Route::post('/connecter',                [UtilisateurController::class, 'connecter']);
Route::get('/accueil',                [UtilisateurController::class, 'deconnecter'])->name('deconnecter');
Route::get('/membre',                [UtilisateurController::class, 'index']);
