<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


/*
|--------------------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------------------
|
| Handle login request
|
*/
Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin')); //show login main
Route::post('login', array('as' => 'login', 'uses' => 'AuthController@handleLogin')); //hanlde login process

/*
|--------------------------------------------------------------------------
| Pages Routes
|--------------------------------------------------------------------------
| The following functions are used to
| Render Pages
*/

Route::get('main', 'HomeController@showMainPage');
Route::get('timeline', 'HomeController@showTimelinePage');
Route::get('log', 'HomeController@showLogDetailPage');
Route::get('create', 'HomeController@showCreatePage');

Route::get('upload', 'HomeController@showUploadPage'); //for test
Route::post('savelog', 'FileController@saveFile'); //for test