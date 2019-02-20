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
Route::get('/estadisticas', 'SocialPetsController@getEstadisticas')->middleware('admin');
Route::get('/', 'SocialPetsController@getIndex');
Route::post('/contact', 'SocialPetsController@enviarContacto');
//Route::get('/AdminPanel', 'SocialPetsController@getAdminPanel');
Route::get('/panel_administrador', 'SocialPetsController@getAdminPanel')->name('AdminPanel')->middleware('admin')->middleware('auth');
/* Route::get('/noticia', 'SocialPetsController@getNoticia'); */
Route::get('/user', 'SocialPetsController@getUserIndex');

Route::get('/registro', 'SocialPetsController@getRegister')->name('register-view')->middleware('guest');
Route::get('/iniciar_sesion', 'SocialPetsController@getLogin')->name('login-view')->middleware('guest');

Route::group(['middleware' => ['web']], function() {

// Login Routes...
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

Route::get('/step2', 'SocialPetsController@getStep2')->middleware('auth');
Route::post('/register2', 'SocialPetsController@register2');

// rutas para editar usuario
Route::get('/usuario/{id}/edit', 'SocialPetsController@editUser')->middleware('auth')->middleware('admin');
Route::put('/usuario/{id}', 'SocialPetsController@updateUser')->middleware('auth')->middleware('admin');

//rutas para dar de alta al usuario
Route::get('/darAlta', 'SocialPetsController@getDarDeAlta')->name('darAlta')->middleware('auth')->middleware('admin');
Route::post('darAlta', ['as' => 'darAlta.post', 'uses' => 'SocialPetsController@create'])->middleware('auth')->middleware('admin');

Route::get('/profile', 'UserController@getProfile')->name('profile')->middleware('verified');

Route::post('update_avatar', 'SocialPetsController@update_avatar');
Route::get('/mensajes', 'SocialPetsController@getMensajess')->name('mensajes')->middleware('verified');

Route::post('/edituser', 'SocialPetsController@updateUserAdmin' )->name('editarUserAdmin');

/* Route::get('/resetPassword', 'SocialPetsController@resetPassword'); */

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

Route::resource('user', 'UserController')->middleware('auth');


/* Route::resource('socialpets', 'SocialPetsController'); */
Route::resource('friend', 'FriendController')->middleware('auth');


Route::get('estadisticas/{year}', 'ChartController@verEstadistica')->middleware('admin')->middleware('auth');
Route::get('estadisticas/2019', 'ChartController@verEstadistica')->name('estadisticas')->middleware('admin');


// Route::resource('socialpets', 'SocialPetsController');

/* Route::get('/mensajes/ajax', 'Ajax\AjaxController@cargarMensajes'); */

Route::get('/chart_admin/{year}', 'ChartController@verEstadistica')->name('chart_admin')->middleware('admin')->middleware('auth');

/* Route::get('/canvas','SocialPetsController@getCanvas'); */
Route::resource('dog', 'DogController')->middleware('verified')->middleware('auth');


Route::get('/tabla_usuarios', 'SocialPetsController@getTablaAdmin')->middleware('admin')->middleware('auth');
Route::get('/tabla_contacto', 'SocialPetsController@getTablaContacto')->middleware('admin')->middleware('auth');
Route::post('/forcedelete/{id}',['as' => 'forcedelete', 'uses' => 'SocialPetsController@forceDelete' ])->middleware('admin')->middleware('auth');
Route::post('/forcedeleteself/{id}',['as' => 'forcedeleteself', 'uses' => 'SocialPetsController@forceDeleteSelf' ])->middleware('auth');

Route::post('/desbanear/{id}',['as' => 'desbanearUsuario', 'uses' => 'SocialPetsController@desbanearUsuario' ])->middleware('admin')->middleware('auth');

// Prueba chat entre usuarios
Route::get('/chat', 'ChatController@index')->middleware('auth')->name('chat.index')->middleware('verified');

Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show')->middleware('verified');
Route::post('/chat/getChat/{id}', 'ChatController@getChat')->middleware('auth')->middleware('verified');
Route::post('/chat/sendChat', 'ChatController@sendChat')->middleware('auth')->middleware('verified');

//Route::get('/profile_others/{id}', 'SocialPetsController@getProfileOther')->middleware('auth'); 

Route::get('/post', 'PostController@index')->middleware('auth');
Route::post('/post', 'PostController@store')->middleware('auth');

Route::resource('imgur', 'ImgurController')->middleware('auth');
// editar usuario panel admin
Route::post('/editUser/{id}',['as' => 'edituser', 'uses' => 'SocialPetsController@updateUser' ])->middleware('auth');

//prueba

Route::get('/dogsMale', 'SocialPetsController@filterMale')->name('dogsMale')->middleware('auth');
Route::get('/dogsFemale', 'SocialPetsController@filterFemale')->name('dogsFemale')->middleware('auth');

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);
/* Route::get('raza','ChartController@verRazaEdad'); */

Route::get('/friend/add/{id}', ['as' => 'friend.addFriend', 'uses' => 'FriendController@addFriend'])->middleware('auth');
Route::get('/friend/accept/{id}', ['as' => 'friend.acceptFriend', 'uses' => 'FriendController@acceptFriend'])->middleware('auth');
Route::get('/friend/rejectMatch/{id}', ['as' => 'friend.rejectMatch', 'uses' => 'FriendController@rejectMatch'])->middleware('auth');
Route::get('/match', 'ChatController@match')->middleware('auth')->name('chat.match')->middleware('verified');
Route::get('/notifications', 'NotificationController@getNotifications')->name('notifications')->middleware('auth');