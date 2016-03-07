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

Route::get('/', 'UseController@index');

Route::get('home', 'HomeController@index');
Route::get('cursos', 'HomeController@cursos');


Route::get('cursoa', 'HomeController@cursoa');
Route::get('curson', 'HomeController@curson');
Route::get('cursoc', 'HomeController@cursoc');

################################################

##Ruta para prueba copia de Route::get('home', 'HomeController@index'); ###

Route::get('totales', 'UseController@totales');
Route::get('genero', 'UseController@genero');
Route::get('edad', 'UseController@edad');
Route::get('nivel', 'UseController@nivel');
Route::get('geo', 'UseController@geo');

################################################


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
