<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Dog;
use App\Mensaje;
use App\SocialPets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use App\Http\Request\RegistrarUsuarioRequest;

class SocialPetsController extends Controller
{
  public function getIndex()
  {
    return view('index');
  }

  public function getEstadisticas()
  {
    return view('dashboard');
  }


  public function enviarContacto(Request $request)
  {
    $contact = new SocialPets;

    $contact->email = Input::get('email');
    $contact->name = Input::get('name');
    $contact->doubt = Input::get('doubt');

    $contact->save();


    return redirect('/')->with('success-message', 'Mail enviado con exito!');

  }
  public function store(RegistrarUsuarioRequest $request)
  {

    return view('login-view');
  }

  public function getInicio()
  {
    $usuarios = User::all();

    return view('feed')->with([
      'usuarios' => $usuarios
    ]);

  }

  public function getAdminPanel()
  {
    $usuarios = User::all();

    return view('panel_administrador');
  }
  public function getNoticia()
  {
    return view('noticia');
  }
  public function getRegister()
  {
    return view('register-view');
  }
  public function getLogin()
  {
    return view('login-view');
  }
  public function getStep2()
  {
    return view('register_step2');
  }
  public function getDarDeAlta()
  {
    return view('darAltaUsuarios');
  }
  public function register2(Request $request)
  {
    $request->validate([
      'name'=>'required',
      'age'=>'required',
      'gender' => 'required',
      'race' => 'required',
    ]);
    $dog = new Dog();
    $dog->id_user = $request->input('id');
    $dog->name = $request->input('name');
    $dog->age = $request->input('age');
    $dog->gender = $request->input('gender');
    $dog->race = $request->input('race');
    $dog->save();
    return redirect('/profile');
  }
  public function getProfile()
  {
    $user = Auth::user();
    return view('profile', compact('user', $user));
  }

  public function resetPassword()
  {
    return view('resetPasswordbtn btn-light');
  }

  public function changeProfile(Request $request)
  {
    $user = User::find($request->input('id'));
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->save();
    return redirect('/profile');
  }
  public function getMensajess()
  {
    $users = User::all();
    $mensajes = Mensaje::where('id_receiver', Auth::user()->id)->limit(5)->get();
    return view('mensajes')->with([
      'mensajes' => $mensajes,
      'users' => $users
    ]);
  }

  public function update_avatar(Request $request)
  {
    $request->validate([
      'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();
    $foto = $request->file('avatar');
    $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();
    Storage::disk('public')->put($avatarName, File::get($foto));
    /* $request->avatar->storeAs('avatars',$avatarName); */

    $user->avatar = $avatarName;
    $user->save();

    return back()
      ->with('success', 'La imagen se ha subido correctamente.');

  }
  public function register(Request $request)
  {



    request()->validate([
      'name' => 'required|min:2|max:50',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed|min:8',
      'password_confirmation' => 'required|same:password',

    ], [
      'name.required' => 'Nombre es un campo requerido',
      'name.min' => 'Nombre tiene que tener dos o mas caracteres',
      'name.max' => 'Nombre no puede tener mas de 50 caracteres',
      'email.required' => 'Email es un campo requerido',
      'email.email' => 'Introduce un email valido',
      'email.unique' => 'El email ya esta registrado',
      'password.required' => 'Contraseña es un campo requerido',
      'password.min' => 'La contraseña tiene que tener 8 o mas caracteres',
      'password_confirmation.required' => 'Contraseña es un campo requerido',
      'password_confirmation.same' => 'Las contraseñas no coinciden',



    ]);

    $input = request()->except('password', 'confirm_password');
    $user = new User($input);
    $user->password = bcrypt(request()->password);
    $user->save();
    {

    }
    return view('profile');
  }
  public function changeRol(Request $request, $id)
  {
    $user = User::find($id);
    $user->role = $request->input('inputRol');
    $user->save();
    return view('profile');
  }

  public function editUser($id)
  {
    $user = User::find($id);
    return view('editUser', compact('user'));
  }

  public function updateUser(Request $request, $id)
  {
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->age = $request->input('age');
    $user->gender = $request->get('gender');
    $user->race = $request->input('race');
    $user->role = $request->get('role');
    $user->update();
    return redirect('/admin')->with('success', 'Usuario editado con exito');
  }
  public function create(Request $request)
  {
    $user = [
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'age' => $request->age,
      'gender' => $request->gender,
      'race' => $request->race,
      'role' => $request->role,
    ];
    $save = User::insert($user);
    if ($save) {
      return redirect('admin');
      session()->flash('notif', 'succes to create user');
    }
  }

  public function getTablaAdmin()
  {
    $usuarios = User::all();
    $usuariosBaneados = User::onlyTrashed()->get();
    return view('panel_administrador.tabla_usuarios')->with([
      'usuarios' => $usuarios, 'usuariosBaneados' => $usuariosBaneados
    ]);
  }

  public function desbanearUsuario($id)
  {
    $user = User::onlyTrashed()->find($id)->restore();
    return redirect('tabla_usuarios');
  }

  public function forceDelete($id)
  {
    $user = User::onlyTrashed()->find($id)->restore();
    $user = User::find($id)->forceDelete();
    return redirect('tabla_usuarios');

  }
}