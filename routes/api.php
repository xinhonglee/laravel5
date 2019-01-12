<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'API'], function () {

    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {

        Route::post('/login', 'AuthController@login');

        Route::post('/register', 'AuthController@register');

        Route::get('/details', ['uses' => 'AuthController@details', 'middleware' => 'auth:api']);

        Route::get('/logout', ['uses' => 'AuthController@logout', 'middleware' => 'auth:api']);

    });

    Route::group(['prefix' => 'videos', 'middleware' => 'auth:api'], function () {

        Route::get('/list', 'VideosController@list');

        Route::post('/create', 'VideosController@create');

        Route::put('/update', 'VideosController@update');

        Route::delete('/delete', 'VideosController@delete');

        Route::get('/category', 'VideoCategoriesController@list');
    });

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth:api', 'role:admin']], function () {

        Route::get('/list-users', 'UsersController@list');

        Route::put('/update-user', 'UsersController@update');

        Route::delete('/delete-user', 'UsersController@delete');

        Route::get('/list-roles', 'RolesController@list');
    });
});

