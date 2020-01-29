<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    //
    protected $fillable=['nom','prenoms','email','telephone','adresse'];
    public function matiere()
    {
        return $this->belongsToMany('App\Models\Matiere', 'enseigner', 'ens_id', 'matiere_id')
                    ->using('App\Models\Enseigner')->withTimestamps();
    }

    public function cours()
    {
        return $this->hasMany('App\Models\Cours', 'ens_id');
    }
}
