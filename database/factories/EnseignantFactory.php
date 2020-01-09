<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Enseignant::class, function (Faker $faker) {
    return [
        'nom' =>$faker->lastName,
        'prenoms' =>$faker->firstName(),
        'adresse' =>$faker->address,
	    'telephone' =>$faker->phoneNumber,
        'email' =>$faker->unique()->email
	];
});
