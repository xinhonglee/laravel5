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

  Route::get('/video/{slug}', 'FrontController@player')->name('player');

  Route::get('/getvideo/{slug}', 'FrontController@getVideo')->name('getVideo');

  Route::get('/backoffice', 'VideoController@list');

  Route::post('/backoffice/video', 'VideoController@create');

  Route::delete('/backoffice/video/{video}', 'VideoController@delete');
