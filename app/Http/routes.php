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

Route::get('/sayhello/{name?}', function ($name = 'Batman') {
    if($name == 'Superman') {
        return redirect('/');
    }
    return 'Hello there ' . $name;
});

Route::get('/uppercase/{word?}', function ($word = 'uppercase') {
    return strtoupper($word);
});

Route::get('/increment/{number?}', function ($number = 0) {
    return ($number += 1);
});

Route::get('/add/{number1?}/{number2?}', function ($number1 = 0, $number2 = 0) {
    return ($number1 + $number2);
});
