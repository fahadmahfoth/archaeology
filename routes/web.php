<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'indexController@index')->name('index');
Route::get('/archaeology', 'indexController@archaeology')->name('archaeology');
Route::get('/governorates', 'indexController@governorates')->name('governorates');
Route::get('/show/{id}', 'indexController@show')->name('show');
Route::get('/search','indexController@search');

Auth::routes();

Route::get('/archaeologyf3xadmin', 'HomeController@index')->name('archaeologyf3xadmin')->middleware('auth');



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


Auth::routes();

Route::get('/archaeologyf3xadmin', 'HomeController@index')->name('home');

Route::resource('archaeologyAdmin', 'AechaeologyController');

Auth::routes();


Route::resource('users', 'UserController');
