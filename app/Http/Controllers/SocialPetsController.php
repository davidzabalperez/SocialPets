<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialPets;
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


  		return redirect('index')->with('success-message', 'Mail enviado con exito!');
  		
	}
  
  public function getUserPanel(){
    return view('userPanel');

  }



    
}
