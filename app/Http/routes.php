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
Route::get('admin/edit/{id}','admin\AdminController@edit');
Route::post('admin/delete','admin\AdminController@deleteA');
Route::post('admin/update','admin\AdminController@updateA');

Route::group(['prefix' => 'activity', 'namespace' => 'Activity'], function()
{
    Route::get('/{type}', 'ActivityController@index');
    Route::post('/participate', 'ActivityController@participate');
    Route::get('/detail/{id}', 'ActivityController@detail');
    Route::get('/new', 'ActivityController@newActivity');
    Route::post('/create', 'ActivityController@createActivity');
    Route::get('/edit/{id}', 'ActivityController@editActivity');
});

Route::group(['prefix' => 'health', 'namespace' => 'Health'], function()
{
    Route::get('/', 'HealthController@index');
    Route::get('/getData', 'HealthController@getData');
    Route::get('/sports', 'HealthController@sports');
    Route::get('/sports/{date}', 'HealthController@sportsData');
    Route::get('/sleep', 'HealthController@sleeps');
    Route::get('/sleep/{date}', 'HealthController@sleepData');
});

Route::get('moments','PagesController@moments');
Route::post('moments/new','PagesController@newMoment');
Route::get('moments/get','PagesController@que');

Route::group(['prefix' => 'user', 'namespace' => 'User'], function()
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
Route::auth();

Route::get('/home', 'HomeController@index');
