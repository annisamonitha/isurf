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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

// Route Login and Logout
Route::match(['get', 'post'], '/login','UserController@login');
Route::get('/logout','UserController@logout');

// Route Password
Route::group(['middleware' => ['auth']],function(){	
	Route::get('/settings','UserController@settings');
	Route::get('/check-pwd','UserController@chkPassword');
	Route::match(['get','post'],'/update-pwd','UserController@updatePassword');
});

// Route Dashboard
Route::group(['middleware' => ['auth']],function(){
	Route::get('/dashboard','UserController@dashboard');
});





