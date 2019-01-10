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

Route::group(['namespace' => 'API'], function(){

    Route::post('/user/login', 'UserController@login');

    Route::post('/user/register', 'UserController@register');

});

Route::group(['namespace' => 'API', 'middleware' => 'auth:api'], function(){

    Route::post('/user/details', 'UserController@details');

    Route::get('/videos/list', 'VideosController@list');

    Route::post('/videos/create', 'VideosController@create');

    Route::put('/videos/update', 'VideosController@update');

    Route::delete('/videos/delete', 'VideosController@delete');
});