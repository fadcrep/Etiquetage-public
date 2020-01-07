<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typeproduit extends Model
{
    protected $fillable = ['name','description'];

    public function laboratoires(){
        return $this->belongsToMany(Laboratoire::class);
    }

}
