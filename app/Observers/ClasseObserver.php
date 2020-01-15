<?php

namespace App\Observers;

use App\Models\Classe;

class ClasseObserver
{
    public function creating(Classe $classe)
    {
        $codeClasse=$classe->fil_codeFil.'-'.$classe->niveau;
        if (isset($classe->specialite)) {
            $codeClasse.='-'.$classe->specialite;
        }
        if (isset($classe->groupe)) {
            $codeClasse.='-'.$classe->groupe;
        }
        
        $classe->codeClasse=$codeClasse;
        $classe->libelleClasse=$classe->fil_codeFil;
    }
    
    /**
     * Handle the classe "created" event.
     *
     * @param  \App\Models\Classe  $classe
     * @return void
     */
    public function created(Classe $classe)
    {
        //
    }

    /**
     * Handle the classe "updated" event.
     *
     * @param  \App\Models\Classe  $classe
     * @return void
     */
    public function updated(Classe $classe)
    {
        //
    }

    /**
     * Handle the classe "deleted" event.
     *
     * @param  \App\Models\Classe  $classe
     * @return void
     */
    public function deleted(Classe $classe)
    {
        //
    }

    /**
     * Handle the classe "restored" event.
     *
     * @param  \App\Models\Classe  $classe
     * @return void
     */
    public function restored(Classe $classe)
    {
        //
    }

    /**
     * Handle the classe "force deleted" event.
     *
     * @param  \App\Models\Classe  $classe
     * @return void
     */
    public function forceDeleted(Classe $classe)
    {
        //
    }
}
