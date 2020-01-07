<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    //

    protected $table = 'laboratoires';
    protected $fillable = ['name','description'];

    /*public function typeproduit(){
        return $this->belongsTo(Typeproduit::class);
    }*/

    public function typeproduits(){
        return $this->belongsToMany(Typeproduit::class);
    }

}
