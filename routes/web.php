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

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');
});

// Route Logout
Route::get('/logout','UserController@logout');

// Route Password
Route::group(['middleware' => ['auth']],function(){	
	Route::get('/settings','UserController@settings');
	Route::get('/changepassword','UserController@changeassword')->name('changePassword');
	Route::post('/changepassword','UserController@changePassword')->name('changePassword');
});

//Route Channels
Route::group(['middleware' => ['auth']],function(){	
	Route::get('/channel','ChannelController@index')->name('channel.index');
	Route::get('/channel/create','ChannelController@create')->name('channel.create');
	Route::post('/channel/create','ChannelController@store')->name('channel.store');
	Route::get('/channel/{id}/edit','ChannelController@edit')->name('channel.edit');
	Route::post('/channel/{id}/update','ChannelController@update')->name('channel.update');
	Route::get('/channel/{id}/delete','ChannelController@delete')->name('channel.delete');
});

//Route Fields
Route::group(['middleware' => ['auth']],function(){	
	Route::get('/channel/{id}/field','FieldController@create')->name('field.create');
	Route::post('/channel/field','FieldController@store')->name('field.store');
	//Route::get('/field/{id}/edit','FieldController@edit')->name('field.edit');
	Route::post('/field/{id}/update','FieldController@update')->name('field.update');
	Route::get('/field/{id}/delete','FieldController@delete')->name('field.delete');
});

// Route Untuk Edit Profile User
//Route::group(['middleware' => 'auth'], function () {
	//Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	//Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	//Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
//});