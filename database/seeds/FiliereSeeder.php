<?php

use App\Models\Filiere;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $filieres= [
            ['Informatique de Gestion','IG'],
    		// ['Statistique','STAT'],
    		['Gestion Transport Logistique','GTL'],
    		// ['Banque et Finance','BF'],
    		['Gestion Finance et Comptabilité','GFC'],
    		['Gestion Banque et Assurance','GBA'],
    		['Gestion des Ressources Humaines','GRH'],
    		['Marketing et Action Commerciale','MAC'],
            ['Gestion Comptabilité','GC'],
    		['Planification','PLAN'],
        ];

        foreach ($filieres as $key => $filiere) {
            
            Filiere::create(['codeFil' => $filiere[1], 'libelleFil' =>$filiere[0] ]);
        }
    }
}
