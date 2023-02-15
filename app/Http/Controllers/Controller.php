<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function accueil()
    {
        return view('accueil');
    }
    public function connexion()
    {
        return view('connexion');
    }

    public function partenaires()
    {
        return view('partenaires');
    }
/*
    // Fonction pour l'authentification
    public function authentification(Request $request)
    {
        $unUtilisateur = Utilisateur::where('courriel', $request->courriel)->first();

        if ($unUtilisateur && Hash::check($request->mdp, $unUtilisateur->mdp))
        {
            $request->session()->put('courriel', $unUtilisateur);
            $request->session()->put('role', $unUtilisateur->role);
            return redirect()->route('partenaires');
        }*/
    }
