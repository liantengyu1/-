<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});



Route::get('show', function () {

    return view('show/show');

});


Route::get('login/login','LoginController@login');

<<<<<<< HEAD
=======
});

Route::get('index', function () {

    return view('index/index');

});

Route::get('index', 'IndexController@index');
>>>>>>> 858bef804ab34b51ea944707a6ab200ee50ba49e
