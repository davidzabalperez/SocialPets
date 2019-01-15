<?php
use App\Notifications\Notificacion_Like;
use App\Notifications\Bienvenida;
use App\Ajax\AjaxController;
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
Route::get('/admin', 'SocialPetsController@getAdminPanel')->name('AdminPanel')->middleware('admin');
Route::get('/user', 'SocialPetsController@getUserIndex');
Route::get('/noticia', 'SocialPetsController@getNoticia');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registro', 'SocialPetsController@getRegister')->name('register-view');
Route::get('/iniciar_sesion', 'SocialPetsController@getLogin')->name('login-view');

Route::group(['middleware' => ['web']], function() {

// Login Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'UserController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register.post', 'uses' => 'UserController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/step2', 'SocialPetsController@getStep2');
Route::post('/register2', 'SocialPetsController@registerStep2');

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

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('send-notification', function(){
	auth()->user()->notify(new Notificacion_Like);
});
Route::resource('user', 'UserController');
// Route::resource('socialpets', 'SocialPetsController');
/*
Obtiene los usuarios por AJAX (ADAPTAR A LOS MENSAJES)
*/
Route::get('/mensajes/ajax', 'Ajax\AjaxController@cargarMensajes');
