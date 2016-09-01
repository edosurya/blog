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

Route::get('/', function () {return redirect('/auth/login');});

// Routes Login And Register
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    'logout' => 'Auth\AuthController'
]);





Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function() {
    Route::pattern('id', '[0-9]+');
    Route::pattern('id2', '[0-9]+');

    # User
	Route::get('user', 'UsersController@index');
	Route::get('user/delete/{id}', 'UsersController@destroy');
    Route::get('users/{id}/edit', 'UsersController@edit');
    Route::post('users/{id}/edit', 'UsersController@update');

    # articles category
    Route::get('category', 'CategoriesController@index');
    Route::get('category/create', 'CategoriesController@create');
    Route::post('category/create', 'CategoriesController@store');
    Route::get('category/{id}/edit', 'CategoriesController@edit');
    Route::post('category/{id}/edit', 'CategoriesController@update');
    Route::get('category/{id}/delete', 'CategoriesController@destroy');

    # articles
    Route::get('articles', 'ArticlesController@index');
    Route::get('articles/create', 'ArticlesController@create');
    Route::post('articles/create', 'ArticlesController@store');
    Route::get('articles/{id}/edit', 'ArticlesController@edit');
    Route::post('articles/{id}/edit', 'ArticlesController@update');
    Route::get('articles/{id}/delete', 'ArticlesController@destroy');
    Route::get('articles/{id}/detail', 'ArticlesController@show');

});





