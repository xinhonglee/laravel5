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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['namespace' => 'API'], function () {

    Route::group(['prefix' => 'user'], function () {

        Route::post('/login', 'UserController@login');

        Route::post('/register', 'UserController@register');

        Route::get('/details', ['uses' => 'UserController@details', 'middleware' => 'auth:api']);

        Route::get('/logout', ['uses' => 'UserController@logout', 'middleware' => 'auth:api']);

    });

    Route::group(['prefix' => 'videos', 'middleware' => 'auth:api'], function () {

        Route::get('/list', 'VideosController@list');

        Route::post('/create', 'VideosController@create');

        Route::put('/update', 'VideosController@update');

        Route::delete('/delete', 'VideosController@delete');
    });

    Route::group(['prefix' => 'admin', 'middleware' => ['auth:api', 'role:admin']], function () {

        Route::get('/list-users', 'AdminController@listUsers');

        Route::put('/update-user', 'AdminController@updateUser');

        Route::delete('/delete-user', 'AdminController@deleteUser');

        Route::get('/list-roles', 'AdminController@listRoles');

    });
});

