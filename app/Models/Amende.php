<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amende extends Model
{
    //

    public function demande(){
        $this->belongsTo(Demande::class);
    }
}
