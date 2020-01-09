<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'fullname' => 'John Doe',
        'email' => 'johndoe@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('John-19'),
        'remember_token' => Str::random(10),
        'api_token' => Str::random(60),
    	]);

    	User::create([
        'fullname' => 'Jane Doe',
        'email' => 'janedoe@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('Jane-19'),
        'remember_token' => Str::random(10),
        'api_token' => Str::random(60),
    	]);
    }
}
