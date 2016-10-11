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
//
// Route::get('/sayHello/{name}', 'HomeController@showWelcome');
//
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name?}', 'HomeController@sayHello');

Route::get('/uppercase/{word?}', 'HomeController@upperCase');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::get('/add/{number1?}/{number2?}', 'HomeController@add');

Route::get('/rolldice/{guess}', 'HomeController@rolldice');
