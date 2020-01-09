<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere', 'fil_codeFil', 'codeFil');
    }

    public function matieres()
    {
        return $this->belongsToMany('App\Models\Matiere', 'classe_matiere', 'classe_id', 'matiere_id')
                    ->using('App\Models\ClasseMatiere')
                    ->withPivot(['semestre','masse_horaire','fil_codeFil','promo_id','programmer'])
                    ->withTimestamps();
    }

    public function cours()
    {
        return $this->hasMany('App\Models\Cours');
    }
}
