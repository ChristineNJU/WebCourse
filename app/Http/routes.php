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

Route::auth();

Route::get('/', 'HomeController@index');

Route::get('pages/{id}', 'PagesController@show');

Route::post('comment/store','CommentsController@store');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function()
{

    Route::get('/', 'AdminHomeController@index');
    Route::resource('pages', 'PagesController');
    Route::resource('comments', 'CommentsController');
});

Route::get('admin','admin\AdminController@index');

Route::group(['prefix' => 'activity', 'namespace' => 'Activity'], function()
{
    Route::get('/', 'ActivityController@index');
    Route::get('/detail/{id}', 'ActivityController@sport');
});

Route::group(['prefix' => 'health', 'namespace' => 'Health'], function()
{
    Route::get('/', 'HealthController@index');
    Route::get('/sport', 'HealthController@sports');
    Route::get('/sleep', 'HealthController@sleeps');
});

Route::get('moments','MomentsController@index');

Route::group(['prefix' => 'user', 'namespace' => 'User'], function()
{
    Route::get('/', 'UserController@index');
    Route::get('/revisePW', 'UserController@revisePW');
    Route::get('/friends', 'FriendController@index');
    Route::get('/friends/apply', 'FriendController@applies');
});