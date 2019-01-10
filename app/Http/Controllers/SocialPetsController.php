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
  public function registerStep2(Request $request, $id){

        $user=User::find($id);
        $user->name = $request->input('age');
        $user->email = $request->input('gender');
        $user->email = $request->input('race');
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
    /* where user id, coge desde el auth auth::id */
    $mensajes = Mensaje::all();
    return view('mensajes')->with([
      'mensajes'=> $mensajes
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

}
