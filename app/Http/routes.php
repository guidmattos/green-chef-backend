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

use App\Recipe;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function() {

	// Auth
    Route::post('auth/signin', 'Auth\AuthController@signIn');

    // Recipe
    Route::get('recipes/list', 'RecipeController@listRecipes');
    Route::get('recipes/{id}', function($id){
    	return Recipe::where('id', $id)->first();
	});

    // ExcludedIngredient
    Route::get('users/ingredients/list', 'UserController@listExcludedIngredients');
	Route::post('users/ingredients/create', 'UserController@excludeIngredient');
	
	// Order
	Route::post('orders/create', 'OrderController@create');
});
