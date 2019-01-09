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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/backoffice/videos', 'api/VideosController@list');

Route::middleware('auth:api')->post('/backoffice/videos', 'api/VideosController@create');

Route::middleware('auth:api')->put('/backoffice/videos', 'api/VideosController@update');

Route::middleware('auth:api')->delete('/backoffice/videos', 'api/VideosController@delete');