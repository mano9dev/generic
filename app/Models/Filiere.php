<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    //
    public function classes()
    {
        return $this->hasMany('App\Models\Classe', 'fil_codeFil', 'codeFil');
    }
}
