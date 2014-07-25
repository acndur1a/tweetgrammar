<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','MainController@index');

Route::get('user','MainController@user');

Route::get('login','MainController@login');

Route::get('twittercallback', 'MainController@twittercallback');

Route::get('tweets','MainController@tweets');

Route::get('test','MainController@test');

Route::get('test2','MainController@testLit');
