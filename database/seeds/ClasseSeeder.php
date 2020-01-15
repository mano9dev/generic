<?php

use App\Models\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $classes=collect([]);
        
        $classes->push(['fil_codeFil' => 'IG','niveau' => 1,'effectif' =>108 ,'promo_id' =>1]);
        $classes->push(['fil_codeFil' => 'IG','niveau' => 2,'specialite' =>'AIP' ,'effectif' =>84 ,'promo_id' =>1]);
        $classes->push(['fil_codeFil' => 'GFC','niveau' => 1 ,'groupe' =>'A','effectif'=>96,'promo_id' =>1]);
        $classes->push(['fil_codeFil' => 'GFC','niveau' => 1 ,'groupe' =>'B','effectif'=>90,'promo_id' =>1]);

        foreach ($classes as $key => $classe) {
            Classe::create($classe);
        }
    }
}
