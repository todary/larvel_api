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


Route::resource('makers','MakerController',['except'=>['create','edit']]);
Route::resource('vehicles','VehicleController',['only'=>['index']]);
Route::resource('makers.vehicles','MakerVehiclesController',['except'=>['create','edit']]);

//Route::resource('test','MyController',['except'=>['create','edit']]);
//Route::resource('test','MyController',['only'=>['create','edit']]);
/*
Route::get('/{name?}/[0-9]?', 'MyController@index');
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
*/