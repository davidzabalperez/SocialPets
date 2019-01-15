<?php

namespace App\Http\Controllers;

use App\User;
use App\Mensaje;
use App\SocialPets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Request\RegistrarUsuarioRequest;


class SocialPetsController extends Controller
{
    public function getIndex(){
    	return view('index');
    }


	public function enviarContacto(Request $request) {
  		$contact = new SocialPets;

  		$contact->email = Input::get('email');
  		$contact->name = Input::get('name');
  		$contact->doubt = Input::get('doubt');

  		$contact->save();


  		return redirect('/')->with('success-message', 'Mail enviado con exito!');
  		
	}
  public function store(RegistrarUsuarioRequest $request){

      return view('login-view');
  }
  
  public function getUserPanel(){
    $usuarios = User::all();

    return view('userPanel')->with([
      'usuarios'=>$usuarios
    ]);

  }
  public function getAdminPanel(){
    $usuarios = User::all();
    
    return view('adminPanel')->with([
      'usuarios'=>$usuarios
    ]);
  }
  public function getNoticia(){
    return view('noticia');
  }
  public function getRegister(){
    return view('register-view');
  }
  public function getLogin(){
    return view('login-view');
  }
  public function getStep2(){
    return view('register_step2');
  }
  public function getDarDeAlta(){
    return view('darAltaUsuarios');
  }
  public function getCanvas(){
    return view('canvas');
  }
  public function registerStep2(Request $request){

        $user=User::find($request->input('id'));
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->race = $request->input('race');
        $user->save();
        return redirect('/profile');
  }
  public function getProfile(){
   $user = Auth::user();
    return view('profile',compact('user',$user));
  }

  public function resetPassword(){
    return view('resetPasswordbtn btn-light');
  }

  public function changeProfile(Request $request){
    
    $user=User::find($request->input('id'));
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->save();
    return redirect('/profile');
  }
  public function getMensajess(){
    $users = User::all();
    $mensajes = Mensaje::where('id_receiver',Auth::user()->id)->get();
    return view('mensajes')->with([
      'mensajes'=> $mensajes,
      'users'=> $users
    ]);
  }
  public function update_avatar(Request $request){
    $request->validate([
      'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();

    $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

    $request->avatar->storeAs('avatars',$avatarName);

    $user->avatar = $avatarName;
    $user->save();

    return back()
        ->with('success','La imagen se ha subido correctamente.');

    }
        public function register(Request $request)
    {



        request()->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|same:password',

        ],[
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

        $input = request()->except('password','confirm_password');
        $user = new User($input);
        $user->password=bcrypt(request()->password);
        $user->save();
{

}
        return view('profile');
    }

}
