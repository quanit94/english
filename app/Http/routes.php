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
    return view('index');
});

Route::post('/searchWord', 'IndexController@postSearchWord');

Route::get('/getFirst', 'IndexController@getFirst');

Route::get('/getOther', 'IndexController@getOther');

Route::get('/getFinal', 'IndexController@getFinal');

Route::get('/getFinalRecord', 'IndexController@getFinalData');

Route::get('/getAll', 'IndexController@getAll');

Route::get('/getAllRecord', 'IndexController@getAllData');