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

Route::get('/', 'SocialPetsController@getIndex');
Route::post('/contact', 'SocialPetsController@store');
Route::get('/UserPanel', 'SocialPetsController@getUserPanel')->middleware('auth');
//Route::get('/AdminPanel', 'SocialPetsController@getAdminPanel');
Route::get('/admin', 'SocialPetsController@getAdminPanel');
Route::get('/user', 'SocialPetsController@getUserIndex');
Route::get('/noticia', 'SocialPetsController@getNoticia');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registro', 'SocialPetsController@getRegister')->name('register-view');
Route::get('/iniciar_sesion', 'SocialPetsController@getLogin')->name('login-view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'SocialPetsController@getProfile')->name('profile')->middleware('auth');

Route::get('/changeProfile', 'SocialPetsController@changeProfile');
Route::get('/resetPassword', 'SocialPetsController@resetPassword');
