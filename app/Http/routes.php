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


Route::group(['prefix' => 'admin'], function()
{

    Route::get('/','Admin\AdminController@index');
    Route::get('/edit/{id}','Admin\AdminController@edit');
    Route::post('/delete','Admin\AdminController@deleteA');
    Route::post('/update','Admin\AdminController@updateA');

    Route::get('/login', 'Admin\AuthController@getLogin');
    Route::post('/login', 'Admin\AuthController@postLogin');
    Route::get('/register', 'Admin\AuthController@getRegister');
    Route::post('/register', 'Admin\AuthController@postRegister');
});



Route::group(['prefix' => 'activity', 'namespace' => 'Activity','middleware' => 'auth'], function()
{
    Route::get('/{type}', 'ActivityController@index');
    Route::post('/participate', 'ActivityController@participate');
    Route::get('/detail/{id}', 'ActivityController@detail');
    Route::get('/new', 'ActivityController@newActivity');
    Route::post('/create', 'ActivityController@createActivity');
    Route::get('/edit/{id}', 'ActivityController@editActivity');
});

Route::group(['prefix' => 'health', 'namespace' => 'Health','middleware' => 'auth'], function()
{
    Route::get('/', 'HealthController@index');
    Route::get('/getData', 'HealthController@getData');
    Route::get('/sports', 'HealthController@sports');
    Route::get('/sports/{date}', 'HealthController@sportsData');
    Route::get('/sleep', 'HealthController@sleeps');
    Route::get('/sleep/{date}', 'HealthController@sleepData');
});


Route::group(['prefix' => 'moments','middleware' => 'auth'], function()
{
    Route::get('/','PagesController@moments');
    Route::post('/new','PagesController@newMoment');
    Route::get('/get','PagesController@que');
});



Route::group(['prefix' => 'user', 'namespace' => 'User','middleware' => 'auth'], function()
{
    Route::get('/', 'UserController@index');
    Route::post('/reviseInfo', 'UserController@reviseInfo');
    Route::get('/revisePW', 'UserController@revisePW');
    Route::get('/friends', 'FriendController@index');
    Route::get('/friends/apply', 'FriendController@applies');
    Route::post('/friends/deleteFriend', 'FriendController@deleteFriend');
    Route::post('/friends/agree', 'FriendController@agree');
    Route::post('/friends/disagree', 'FriendController@disagree');
});

