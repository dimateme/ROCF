<?php

namespace App\Http\Controllers;

use App\Models\Concertation;
use App\Models\Direction;
use App\Models\Partenaire;
use App\Models\Role;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
  public function connecter(Request $request){
      $request->validate([
          'courriel' => ['required', 'string', 'min:5', 'max:35' ],
          'mdp' => [
              'required',
              'string',
              'min:8',             // doit avoir au moins 8 caractères
              'regex:/[a-z]/',      // doit contenir au moins une lettre minuscule
              'regex:/[A-Z]/',      // doit contenir au moins une lettre majuscule
              'regex:/[0-9]/',      // doit contenir au moins un chiffre
              'regex:/[@$!%*#?&]/', // doit contenir au moins un caractère spécial

          ],

      ]);
      //get input values
        $unCourriel = request('courriel');
        $mdp = request('mdp');
        //get user from database by email
        $unUtilisateur = Utilisateur::where('courriel', $unCourriel)->first();
        if($unUtilisateur) {

            //check if password is correct
            $request->session()->put('courriel', $unUtilisateur);
            $request->session()->put('role', $unUtilisateur->role);
            if ((Hash::check(request('mdp'), $unUtilisateur->mdp) && $unUtilisateur->id_role == 1)) {
                $courriel = $unUtilisateur->courriel;
                //dd($unCourriel);
                return redirect('/gestion')->with('courriel', $courriel);
            } else if ((Hash::check(request('mdp'), $unUtilisateur->mdp) && $unUtilisateur->id_role == 2)) {
                //if password is incorrect, redirect to login page
                return redirect('/membre');
                //return redirect()->route('connexion')->with('erreur', 'Mot de passe incorrect');
            }else{
                return redirect('/connexion');
            }
        }else{
            //dd('erreur');
            return redirect('/connecter')->with('erreur', 'Mot de passe incorrect');
        }
  }
  public function index(){
      return view('membre.utilisateur');
  }
    //Authentification
    /*public function authentification(Request $request)
    {
        //Validation des données
        $request->validate([
            'courriel' => ['required', 'string', 'min:5', 'max:35' ],
            'mdp' => ['required', 'string', 'min:8', 'max:35' ],
        ]);
        //Recuperation des données
        $courriel = $request->input('courriel');
        $mdp = $request->input('mdp');
        //Recherche dans la BD
        $utilisateur = Utilisateur::where('courriel', $courriel)->first();
        //Si l'utilisateur existe
        if($utilisateur)
        {
            //Si le mot de passe est correct
            if(Hash::check($mdp, $utilisateur->mdp))
            {
                //Ajout des données dans la session
                $request->session()->put('utilisateur', $utilisateur);
                //Redirection vers la page d'accueil
                return redirect()->route('accueil');
            }
            else
            {
                //Redirection vers la page de connexion
                return redirect()->route('connexion')->with('erreur', 'Mot de passe incorrect');
            }
        }
        else
        {
            //Redirection vers la page de connexion
            return redirect()->route('connexion')->with('erreur', 'Utilisateur inexistant');
        }
    }*/
    //Admin
    public function admin()
    {
        return view('admin.admin_gestion');
    }
    public function vue_utilisateur()
    {
        //les directions
        $lesDirections = Direction::all();
        //les roles
        $lesRoles = Role::all();
        $lesUtilisateurs = Utilisateur::with('direction')->get();
        $directions = Direction::with('utilisateurs')->get();
        return view('admin.utilisateur')->with('lesDirections', $lesDirections)->with('lesRoles', $lesRoles)
            ->with('lesUtilisateurs', $lesUtilisateurs)->with('directions', $directions);
    }
    public function ajouter_utilisateur(Request $request)
    {
        //Validation des données

        $request->validate([
            'courriel' => ['required', 'string', 'min:5', 'max:35' ],
            'nom' => ['required', 'string',  'min:3', 'max:10'],
            'prenom' => ['required', 'string',  'min:3', 'max:10'],
            'code_postal' => ['required', 'string',  'min:7', 'max:7'],
            'mdp' => [
                   'required',
                    'string',
                    'min:8',             // doit avoir au moins 8 caractères
                    'regex:/[a-z]/',      // doit contenir au moins une lettre minuscule
                    'regex:/[A-Z]/',      // doit contenir au moins une lettre majuscule
                    'regex:/[0-9]/',      // doit contenir au moins un chiffre
                    'regex:/[@$!%*#?&]/', // doit contenir au moins un caractère spécial

            ],
            'telephone' => ['required', 'string',  'min:10', 'max:14'],
            'role' => ['required', 'integer'],
            'direction' => ['required', 'integer']
        ]);

        //Recuperation des données et ajout dans la BD
        $utilisateur = new Utilisateur();
        $utilisateur->courriel = $request->input('courriel');
        $utilisateur->nom = $request->input('nom');
        $utilisateur->prenom = $request->input('prenom');
        $utilisateur->code_postal = $request->input('code_postal');
        //hashage du mot de passe
        $utilisateur->mdp = Hash::make($request->input('mdp'));
        $utilisateur->telephone = $request->input('telephone');
        $utilisateur->id_role = $request->input('role');
        $utilisateur->id_direction = $request->input('direction');
        $utilisateur->save();
        return redirect()->back();

    }
    // Methode qui permet de se deconnecter
    public function deconnecter()
    {
        //Suppression des données de la session
        session()->flush();
        //Redirection vers la page de connexion
        return redirect()->route('accueil');
    }
    public function  partenaire(){
        return view('admin.partenaire');
    }
    public function ajouter_partenaire(Request $request){
        $request->validate([
            'partenaire' => ['required', 'string', 'min:5', 'max:35' ]
        ]);
        $partenaire = new Partenaire();
        $partenaire->partenaire = $request->input('partenaire');
        $partenaire->save();
        return redirect()->back();
    }
    public function concertation(){
        return view('admin.concertation');
    }
    public function ajouter_concertation(Request $request){
        $request->validate([
            'concertation' => ['required', 'string', 'min:5', 'max:35' ]
        ]);
        $concertation = new Concertation();
        $concertation->concertation = $request->input('concertation');
        $concertation->save();
        return redirect()->back()->with('message', 'La concertation a été crée avec succès');;
    }
}
