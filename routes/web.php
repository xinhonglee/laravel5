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

Route::get('/', 'FrontController@index')->name('home');

Route::get('/video/{slug}', 'FrontController@player')->name('player');

Route::get('/getvideo/{slug}', 'FrontController@getVideo')->name('getVideo');

Route::get('api/videowall', 'FrontController@getVideoWall');

Route::get('/backoffice/{vue_capture?}', ['as' => 'backoffice', 'uses' => 'BackController@index'])
    ->where('vue_capture', '[\/\w\.-]*');

Route::get('/auth/{vue_capture?}', ['as' => 'auth', 'uses' => 'BackController@index'])
    ->where('vue_capture', '[\/\w\.-]*');

Route::view('/corporate', 'corporate', ['css' => 'corporate']);

Route::get('/videos', 'FrontController@getVideos');
Route::get('/videos/page/{page}', 'FrontController@getVideosPerPage')->where('page', '[0-9]+');
Route::get('/videos/{category}', 'FrontController@getVideosPerCategory')->where('category', '[A-Za-z]+');
Route::get('/videos/{category}/page/{page}', 'FrontController@getVideosPerCategoryAndPage')->where(['category' => '[A-Za-z]+', 'page' => '[0-9]+']);

Route::get('/{category}', 'FrontController@getCategory')->where('category', '[A-Za-z]+');

Route::post('/subscribe', 'NewsletterController@subscribe');

Route::get('/mentions-legales', 'mentions', ['css' => 'corporate']);
