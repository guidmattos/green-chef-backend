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

// Teste fofo da aula de apresentacao do Chaim!

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function() {
    Route::post('auth/signin', 'Auth\AuthController@signIn');
});

Route::post('api/v1/push', 'UserController@push');
