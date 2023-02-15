<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Modèle pour un Fichier
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    protected $table = 'dossiers';
    protected $fillable = ['nom', 'description', 'type', 'taille', 'id_dossier', 'id_utilisateur']; // Champs modifiables
    public $timestamps = true;  // Utilisation de created_at et updated_at
    use HasFactory;
}
