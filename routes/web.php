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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('1', function() { return 'Je suis la page 1 !'; });
// Route::get('2', function() { return 'Je suis la page 2 !'; });
// Route::get('3', function() { return 'Je suis la page 3 !'; });

// Route::get('{n}', function($n) {
// 	return 'Je suis la page ' . $n . ' !'; 
// });


Route::get('{n}', function($n) { 
    return response('Je suis la page ' . $n . ' !', 200); 
})->where('n', '[1-3]');

Route::get('/vue1', function()
{
    return view('view1');
});


Route::get('article/{n}', function($n) { 
    return view('article')->with('numero', $n); 
})->where('n', '[0-9]+');