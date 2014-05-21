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


Route::get('/', 'FacebookBirthday\\Controllers\\Home@showWelcome');


Route::get('/test', 'HomeController@test');


/* API */

Route::get('/api/me', 'FacebookBirthday\\Controllers\\Api\\Me@getProfile');

Route::get('/api/test', 'FacebookBirthday\\Controllers\\Api\\Auth@getByFacebookId');