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

Route::get('/sayhello/{name?}', function ($name = 'Batman') {
    if($name == 'Superman') {
        return redirect('/');
    }
    //Cameron's prefered way of passing data to the view
    $name = 'Cameron';
    $data['name'] = $name;
    return view('sayhello')->with($data);
    return 'Hello there ' . $name;
});

Route::get('/uppercase/{word?}', function ($word = 'uppercase') {
    $data['word'] = $word;
    $upperCasedWord = strtoupper($word);
    $data['upperCasedWord'] = $upperCasedWord;
    return view('uppercase')->with($data);
});

Route::get('/increment/{number?}', function ($number = 0) {
    $data['number'] = $number;
    $incrementedNumber = ($number += 1);
    $data['incrementedNumber'] = $incrementedNumber;
    return view('increment')->with($data);
});

Route::get('/add/{number1?}/{number2?}', function ($number1 = 0, $number2 = 0) {
    return ($number1 + $number2);
});

Route::get('/rolldice/{guess}', function ($guess = null) {
    for ($i = 1; $i <= 6; $i++) {
        $diceRollArray [] = mt_rand(1, 6);
    }
    $data['dice_rolls'] = $diceRollArray;
    $data['guess'] = $guess;
    // foreach ($data['dice_rolls'] as $dice_roll) {
    //     $data['correct'] = ($dice_roll == $data['guess']);
    //     // var_dump ($data['correct']);
    // }
    return view('roll-dice')->with($data);
});
