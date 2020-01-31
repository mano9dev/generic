<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// header('Access-Control-Allow-Origin: http://localhost:4200');
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

  Route::namespace('Api')->group(function(){
    // Route::post('login','LoginController@login');
    Route::apiResource('structure/matiere', 'MatiereController');

    Route::apiResource('structure/enseignant', 'EnseignantController');

    Route::apiResource('structure/filiere', 'FiliereController');

    Route::apiResource('structure/classe', 'ClasseController');
    
    Route::post('login', 'UserController@login');
  });
