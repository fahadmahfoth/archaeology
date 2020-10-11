<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'indexController@index')->name('index');
Route::get('/archaeology', 'indexController@archaeology')->name('archaeology');
Route::get('/archaeologybycity/{id}', 'indexController@archaeologybycity')->name('archaeology');
Route::get('/governorates', 'indexController@governorates')->name('governorates');
Route::get('/show/{id}', 'indexController@show')->name('show');
Route::get('/search','indexController@search');




Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::resource('archaeologyAdmin', 'AechaeologyController');
Route::resource('cityAdmin', 'GovernorateController');
Route::resource('users', 'UserController');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


Auth::routes();
Route::get('/archaeologyf3xadmin', 'HomeController@index')->name('home');

