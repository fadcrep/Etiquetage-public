<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{

    public function laboratoire(){
        return $this->belongsTo(Laboratoire::class);
    }

    public function typeproduit(){
        return $this->belongsTo(Typeproduit::class);
    }

    public function amende(){
        return $this->hasOne(Amende::class);
    }
}
