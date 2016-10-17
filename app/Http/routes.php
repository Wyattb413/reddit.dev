<?php

use App\Models\Post;

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

//GETS

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name?}', 'HomeController@sayHello');

Route::get('/uppercase/{word?}', 'HomeController@upperCase');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::get('/add/{number1?}/{number2?}', 'HomeController@add');

Route::get('/rolldice/{guess}', 'HomeController@rolldice');

//RESOURCES

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController', ['except' => ['create', 'store']]);

Route::get('orm-test', function ()
{
    $post = new Post();
    $post->created_by = '1';
    $post->title = 'title';
    $post->url = 'url';
    $post->content = 'content';
    $post->save();

    $post2 = new Post();
    $post2->created_by = '1';
    $post2->title = 'title';
    $post2->url = 'url';
    $post2->content = 'content';
    $post2->save();
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
