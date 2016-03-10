<?php

Route::get('/', 'UseController@index');

Route::get('home', 'UseController@inscritos');

Route::get('cursos', 'UseController@cursos');

Route::get('cursoa', 'UseController@cursoa');
Route::get('curson', 'UseController@curson');
Route::get('cursoc', 'UseController@cursoc');

Route::get('totales', 'UseController@totales');
Route::get('genero', 'UseController@genero');
Route::get('edad', 'UseController@edad');
Route::get('nivel', 'UseController@nivel');
Route::get('geo', 'UseController@geo');
Route::get('desercion', 'UseController@desercion');

################################################

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

#################################################


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
