<?php
use App\Notifications\Notificacion_Like;
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
Route::post('/contact', 'SocialPetsController@enviarContacto');
Route::get('/UserPanel', 'SocialPetsController@getUserPanel')->name('UserPanel')->middleware('verified');
//Route::get('/AdminPanel', 'SocialPetsController@getAdminPanel');
Route::get('/admin', 'SocialPetsController@getAdminPanel');
Route::get('/user', 'SocialPetsController@getUserIndex');
Route::get('/noticia', 'SocialPetsController@getNoticia');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registro', 'SocialPetsController@getRegister')->name('register-view');
Route::get('/iniciar_sesion', 'SocialPetsController@getLogin')->name('login-view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'SocialPetsController@getProfile')->name('profile')->middleware('verified');

Route::post('profile', 'SocialPetsController@update_avatar');
Route::get('/mensajes', 'SocialPetsController@getMensajess')->name('mensajes')->middleware('verified');


Route::get('/resetPassword', 'SocialPetsController@resetPassword');

Route::post('/changeProfile', [
    'as'=>'changeProfile',
    'uses'=>'SocialPetsController@changeProfile'
]);
Route::post('/changePassword', [
    'as'=>'changePassword',
    'uses'=>'HomeController@changePassword'
]);

Route::get('auth/login',function () {

    return redirect('/')->with('loginError',true);

});

Auth::routes(['verify' => true]);

Route::get('send-notification', function(){
	auth()->user()->notify(new Notificacion_Like);
});

