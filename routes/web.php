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
Route::get('/estadisticas', 'SocialPetsController@getEstadisticas');
Route::get('/', 'SocialPetsController@getIndex');
Route::post('/contact', 'SocialPetsController@enviarContacto');
Route::get('/inicio', 'SocialPetsController@getInicio')->name('Inicio')->middleware('verified');
//Route::get('/AdminPanel', 'SocialPetsController@getAdminPanel');
Route::get('/panel_administrador', 'SocialPetsController@getAdminPanel')->name('AdminPanel')->middleware('admin');
Route::get('/user', 'SocialPetsController@getUserIndex');
Route::get('/noticia', 'SocialPetsController@getNoticia');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registro', 'SocialPetsController@getRegister')->name('register-view');
Route::get('/iniciar_sesion', 'SocialPetsController@getLogin')->name('login-view');

Route::group(['middleware' => ['web']], function() {

// Login Routes...
    //Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
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
Route::post('/register2', 'SocialPetsController@register2');

// rutas para editar usuario
Route::get('/usuario/{id}/edit', 'SocialPetsController@editUser');
Route::put('/usuario/{id}', 'SocialPetsController@updateUser');

//rutas para dar de alta al usuario
Route::get('/darAlta', 'SocialPetsController@getDarDeAlta')->name('darAlta');
Route::post('darAlta', ['as' => 'darAlta.post', 'uses' => 'SocialPetsController@create']);

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


Route::resource('socialpets', 'SocialPetsController');


Route::get('estadisticas/{year}', 'ChartController@verEstadistica');
Route::get('estadisticas/2019', 'ChartController@verEstadistica')->name('estadisticas')->middleware('admin');


// Route::resource('socialpets', 'SocialPetsController');

Route::get('/mensajes/ajax', 'Ajax\AjaxController@cargarMensajes');

Route::get('/chart_admin/{year}', 'ChartController@verEstadistica')->name('chart_admin')->middleware('admin');

Route::get('/canvas','SocialPetsController@getCanvas');
Route::resource('dog', 'DogController');

Route::get('/tabla_usuarios', 'SocialPetsController@getTablaAdmin');
Route::post('/forcedelete/{id}',['as' => 'eliminarUsuario', 'uses' => 'SocialPetsController@forceDelete' ]);

Route::post('/desbanear/{id}',['as' => 'desbanearUsuario', 'uses' => 'SocialPetsController@desbanearUsuario' ]);



