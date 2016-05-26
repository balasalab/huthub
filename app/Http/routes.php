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

Route::get('/', function()
{
    return View::make('pages.home');
});

// route to show the login form
Route::get('login', array('uses' => 'UserController@showLogin'));
// route to process the form
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('logout', array('uses' => 'UserController@doLogout'));


Route::get('/signup/', function()
{
    return View::make('themeone.signup');
});
Route::get('/listing/', 'PropertyController@listView');
// Route::get('listing/', array('as' => 'form', 'uses'=>'PropertyController@get'));

Route::get('register', function()
{
    return View::make('pages.register');
});
Route::get('explore', function()
{
    return View::make('pages.explore');
});
Route::get('/academy/{id}', 'UserController@view');

Route::group(["prefix"=>"api"], function(){
	Route::post('/signup', 'UserController@signup');
	Route::post('/add/property/', 'PropertyController@add');
	Route::post('/add/property/room', 'PropertyController@addRoom');
	Route::get('/get/property/', 'PropertyController@listApi');

	Route::get('/get', 'UserController@get');
	Route::get('/get/map/json', 'UserController@getMapJson');

	Route::get('/users', 'UserController@get');
	Route::post('/ride/give', 'JournerController@create');
	Route::post('/ride/take', 'JoinerController@create');
});

Route::group(['middleware' => 'auth'], function() {
    // Only authenticated users may enter...
    Route::get('/dashboard/', function(){
        return View::make('themeone.dashboard.home');
    });
    Route::get('/dashboard/properties/', 'PropertyController@adminProperties');
    Route::get('/register/property/', function(){
        return View::make('themeone.dashboard.registerProperty');
    });
    Route::get('/add/property/room', 'PropertyController@showAddRoom');
    Route::post('/add/property/room', 'PropertyController@addRoom');
});
Route::get('/redis', 'RedisController@test');
