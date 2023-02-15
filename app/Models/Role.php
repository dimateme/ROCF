<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Modèle pour un Role
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['role']; // Champs modifiables
    public $timestamps = true;  // Utilisation de created_at et updated_at
    use HasFactory;
}
