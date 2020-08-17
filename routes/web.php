<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('facture/{n}', function($n) { 
    return view('facture')->withNumero($n); 
})->where('n', '[0-9]+');

Route::get('/', 'WelcomeController@index');
//Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);
Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');
