<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Modèle pour un Utilisateur
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateurs';
    protected $fillable = ['courriel', 'mdp', 'prenom', 'nom', 'id_role', 'id_direction', 'telephone', 'code_postal']; // Champs modifiables
    public $timestamps = false;  // Utilisation de created_at et updated_at
    use HasFactory;

    //Relation avec la table directions
    public function direction()
    {
        return $this->belongsTo(Direction::class,'id_direction','id');
    }
}
