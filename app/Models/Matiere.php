<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    //
    public function enseignants()
    {
        return $this->belongsToMany('App\Models\Matiere', 'enseigner', 'matiere_id','ens_id')
                    ->using('App\Models\Enseigner')->withTimestamps();
    }

    public function classes()
    {
        return $this->belongsToMany('App\Models\Classe','classe_matiere','matiere_id','classe_id')
                    ->using('App\Models\ClasseMatiere')
                    ->withPivot(['semestre','masse_horaire','fil_codeFil','promo_id','programmer'])
                    ->withTimestamps();;
    }

    public function cours()
    {
        return $this->hasMany('App\Models\Cours');
    }

    
}
