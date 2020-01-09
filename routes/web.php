<?php

use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{any}', function (Request $request) {
    if (!$request->ajax()) {
        # code...
        return view('index');
    }
})->where('any', '.*');
// Route::get('/',function(){

//     return view('index');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
