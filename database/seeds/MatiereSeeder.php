<?php

use App\Models\Matiere;
use Illuminate\Database\Seeder;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMatieres();
    }

    public function createMatieres(){
        $matieres=array();
        $objects=[
            ['Bases de données','BDD'],
            ['Techniques de compilation','TC'],
            ['Algorithmes ','Algo'],
            ['Structures de données ','SDD'],
            ['Programmation C++','C++'],
            ['Programmation Java','Java'],
            ['Analyse mathématique','AM'],
            ['Algèbre Linéaire','AL'],
            ['Algèbre Approfondie','AA'],
            ['Recherche Operationnelle','RO'],
            ['Mathématique financière','MathFine'],
            ['Mathématique pour Informatique','MPI'],
            ['Topologie','TOPO'],
            ['Méthodes Statistiques','MethStat'],
            ['Techniques de sondage','TDS'],
            ['Analyse Multidimensionnelle','AMultiDim'],
            ['Enquête Statistiques','ES'],
            ['Statistiques sectorielles','StatSec'],
            ['Statistiques inferentielle','StatInf'],
            ['Statistiques Probabilité','StatProba'],
            ['Gestion Budgétaire et Prévisionnelle','GBP'],
            ['Gestion de la Production','GPro'],
            ['Gestion de la Production Logistique','GPL'],
            ['Théorie financière','TF'],
            ['Analyse Financière','AF'],
            ['Comptabilité Générale','ComptaGene'],
            ['Comptabilité des Sociétés','ComptaSoc'],
            ['Comptabilité Analytique de Gestion','CAGE'],
            ['Choix des Investissements en Avenir Incertain','CIAI'],
            ['Finance Internationale','FI'],
            ['Finance d\'Entreprise','FE'],
            ['Droit du Travail et Sécurité Sociale','DRTSS'],
            ['Droits des Tics','DRTTic'],
            ['Droits Communautaire','DRTC'],
            ['Droits des Assurances','DRTASS'],
            ['Droits du Commerce International','DRTCI'],
            ['Introduction au Droits','INTROD'],
            ['Informatique Générale','INFGEN'],
            ['Fiscalité','FIS'],
            ['Transit Douane','TRD'],
            ['Entreprenariat','ENTRE'],
            ['Bureau comptable et Fiscalité','BCF'],
            ['Anglais Appliqué','ENA'],
            ['Anglais','EN'],
            ['Micro Économie','MECO'],
            ['Économie D\'entreprise','ECOEN'],
            ['Économie monétaire','ECOMO'],
            ['Économie Générale','ECOGE'],
            ['Économie International','ECOIN'],
            ['Introduction au Maketing ','INTROMak'],
            ['Maketing ','Mak'],
            ['Management de la qualité','MakQ'],
            ['Marché des Capitaux','MDC'],
            ['Macro Économie','MacroE'],
            ['Micro Économie','MicroE'],
            ['Technique D\'Éxpression Écrite et Orale','TEEO'],
            ['Rédaction administrative','RA'],
            ['Croissance et Développement','CREDEV'],
            ['Finance Publiques','FPUB'],
            ['Bureautique','BUR'],
            ['Initiation à L\'Entreprenariat ','INITENTRE'],

        ];

        foreach ($objects as $object) {

            $matiere=new Matiere;
            $matiere->code=$object[1];
            $matiere->libelle=$object[0];

            $matiere->save();
        }

    }
}
