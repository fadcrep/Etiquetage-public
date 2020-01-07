<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Importation extends Model
{
    protected $fillable = ['date','importateur','description','quantite','nserie',
    'provenance','volume','classe','resultats','certificat','modele','echantiollonnage'];
}
