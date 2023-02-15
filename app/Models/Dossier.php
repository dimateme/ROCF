<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Modèle pour un Dossier
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $table = 'dossiers';
    protected $fillable = ['nom', 'id_direction']; // Champs modifiables
    public $timestamps = true;  // Utilisation de created_at et updated_at
    use HasFactory;
}
