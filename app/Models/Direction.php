<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Modèle pour une Direction
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilisateur;

class Direction extends Model
{
    protected $table = 'directions';
    protected $fillable = ['direction', 'lien_site', 'courriel', 'adresse', 'code_postal']; // Champs modifiables
    public $timestamps = true;  // Utilisation de created_at et updated_at
    use HasFactory;
    //Relation avec la table utilisateurs
    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class,'id_direction','id');
    }
}
