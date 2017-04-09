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

Route::get('salut', function(){

	return 'Salut les gens!';
});


Route::get('salut/{name}', function($name){

	return "Salut $name";

});

Route::get('hello','IndexController@sayhello');

Route::get('/', function () {
    return view('welcome');
});

Route::get('store','IndexController@displayStore');
