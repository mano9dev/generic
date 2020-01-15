<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(EnseignantSeeder::class);
        $this->call(MatiereSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(FiliereSeeder::class);
        $this->call(ClasseSeeder::class);
    }
}
