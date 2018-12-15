<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  Route::get('/', 'FrontController@index');

  Route::get('/page/{page}', 'FrontController@index');

  Route::get('/video/{slug}', 'FrontController@player')->name('player');

  Route::get('/getvideo/{slug}', 'FrontController@getVideo')->name('getVideo');

  Route::get('api/videowall', 'FrontController@getVideoWall');

  Route::get('/backoffice', 'VideoController@list');

  Route::post('/backoffice/video', 'VideoController@create');

  Route::delete('/backoffice/video/{video}', 'VideoController@delete');

  Route::view('/corporate', 'corporate', ['css' => 'corporate']);

  Route::view('/mentions-legales', 'mentions', ['css' => 'legal']);
