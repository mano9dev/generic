<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    //
    public function classe()
    {
        return $this->belongsTo('App\Models\Classe');
    }

    public function enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant','ens_id');
    }

    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }

    public function salle()
    {
        return $this->belongsTo('App\Models\Salle');
    }

    public function seances()
    {
        return $this->hasMany('App\Models\Seance');
    }
}
