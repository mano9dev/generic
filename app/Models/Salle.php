<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    //

    public function cours()
    {
        return $this->hasMany('App\Models\Cours')   ;
    }
    
}
