<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function sayHello($name = 'Batman')
    {
        if($name == 'Superman') {
            return redirect('/');
        }
        $data['name'] = $name;
        return view('sayhello')->with($data);
        return 'Hello there ' . $name;
    }

    public function upperCase($word = 'Butts')
    {
        $data['word'] = $word;
        $upperCasedWord = strtoupper($word);
        $data['upperCasedWord'] = $upperCasedWord;
        return view('uppercase')->with($data);
    }

    public function increment($number = 0)
    {
        $data['number'] = $number;
        $incrementedNumber = ($number += 1);
        $data['incrementedNumber'] = $incrementedNumber;
        return view('increment')->with($data);
    }

    public function add($number1 = 0, $number2 = 0)
    {
        return ($number1 + $number2);
    }

    public function rolldice($guess = null)
    {
        for ($i = 1; $i <= 6; $i++) {
            $diceRollArray [] = mt_rand(1, 6);
        }
        $data['dice_rolls'] = $diceRollArray;
        $data['guess'] = $guess;
        return view('roll-dice')->with($data);
    }
}
