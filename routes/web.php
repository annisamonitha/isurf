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


//Route Channel
	Route::match(['get','post'],'/channels/add-channels','ChannelController@addChannel');
	Route::match(['get','post'],'/channels/edit-channel/{channel_id}','ChannelController@editChannel');
	Route::match(['get','post'],'/channels/delete-channel/{channel_id}','ChannelController@deleteChannel');
	Route::get('/channels/view-channel','ChannelController@viewChannel');

//Route Field
	Route::match(['get','post'],'/channels/add-field','FieldController@addField');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
