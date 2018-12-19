<?php

namespace App\Http\Controllers;

use App\User;
use App\SocialPets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SocialPetsController extends Controller
{
    public function getIndex(){
    	return view('index');
    }


	public function store(Request $request) {
  		$contact = new SocialPets;

  		$contact->email = Input::get('email');
  		$contact->name = Input::get('name');
  		$contact->doubt = Input::get('doubt');

  		$contact->save();


  		return redirect('/')->with('success-message', 'Mail enviado con exito!');
  		
	}
  
  public function getUserPanel(){
    $usuarios = User::all();

    return view('profile')->with([
      'usuarios'=>$usuarios
    ]);

  }
  public function getAdminPanel(){
    return view('adminPanel');
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
  public function getProfile(){
    return view('profile');
  }
  public function changeProfile(Request $request){
    $user=User::find($equest->input('id'));
    $user->name= $request->input('name');
    $user->save();
    return redirect('/home');
  }

    
}
