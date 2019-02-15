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

        Route::middleware(['auth:api'])->group(function () {

            Route::get('/details', 'AuthController@details');

            Route::get('/logout', 'AuthController@logout');

            // Email Verification Routes...
            Route::post('/email/verify/{id}', 'VerificationController@verify')->name('verification.verify');

            Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

        });

    });

    Route::group(['prefix' => 'video', 'middleware' => 'auth:api'], function () {

        Route::get('/list', 'VideosController@list');

        Route::pattern('id', '[0-9]+');

        Route::get('/{id}', 'VideosController@getVideoById');

        Route::post('/create', 'VideosController@create');

        Route::put('/update', 'VideosController@update');

        Route::delete('/delete', 'VideosController@delete');

        Route::get('/cloud', 'VideosController@getCloudinaryInformation');

        Route::get('/category', 'VideoCategoriesController@list');
    });

    Route::group(['prefix' => 'story', 'middleware' => 'auth:api'], function () {

        Route::get('/list', 'StoriesController@list');

        Route::pattern('id', '[0-9]+');

        Route::get('/{id}', 'StoriesController@getStoryById');

        Route::post('/create', 'StoriesController@create');

        Route::put('/update', 'StoriesController@update');

        Route::delete('/delete', 'StoriesController@delete');

    });

    Route::group(['prefix' => 'story', 'middleware' => 'auth:api'], function () {

        Route::get('/list', 'StoryPageTemplatesController@list');

        Route::pattern('id', '[0-9]+');

        Route::get('/{id}', 'StoryPageTemplatesController@getStoryPageTemplateById');

    });

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth:api', 'role:admin']], function () {

        /* Users Management */
        Route::get('/list-users', 'UsersController@list');

        Route::put('/update-user', 'UsersController@update');

        Route::delete('/delete-user', 'UsersController@delete');

        /* Roles Management */
        Route::get('/list-roles', 'RolesController@list');

        /* StoryPageTemplates Management*/
        Route::post('/create-page-template', 'StoryPageTemplatesController@create');

        Route::put('/update-page-template', 'StoryPageTemplatesController@update');

        Route::delete('/delete-pate-template', 'StoryPageTemplatesController@delete');
    });
});

