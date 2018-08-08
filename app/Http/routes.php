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

// view関数
// resources/views直下にあるviewを指定する

// クロージャーを使用した場合
// 即時関数
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('URLがこの時', '使用するコントローラー名@使用するメソッド名');
// Route::get('/', 'WelcomeController@index');
Route::get('contact', 'WelcomeController@contact');
Route::get('joya', 'PagesController@about');

Route::get('/', 'TweetsController@index');
Route::get('tweets/create', 'TweetsController@create');
Route::get('tweets/{id}', 'TweetsController@show');
Route::post('tweets/create', 'TweetsController@store');
Route::get('tweets/{id}/edit', 'TweetsController@edit');
Route::patch('tweets/{id}', 'TweetsController@update');

Route::delete('tweets/{id}', 'TweetsController@destroy');  // 追加











