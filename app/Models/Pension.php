<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    protected $fillable = ['matricule', 'num_affiliation', 'type_pension', 'nom', 'prenom', 'date_effet', 'mois_envoi'];
}

