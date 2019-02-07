<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\SocialPets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/step2';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|min:2|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|same:password',
      
          ], [
            'name.required' => 'Nombre es un campo requerido',
            'name.min' => 'Nombre tiene que tener dos o mas caracteres',
            'name.max' => 'Nombre no puede tener mas de 15 caracteres',
            'email.required' => 'Email es un campo requerido',
            'email.email' => 'Introduce un email valido',
            'email.unique' => 'El email ya esta registrado',
            'password.required' => 'Contraseña es un campo requerido',
            'password.min' => 'La contraseña tiene que tener 8 o mas caracteres',
            'password_confirmation.required' => 'Contraseña es un campo requerido',
            'password_confirmation.same' => 'Las contraseñas no coinciden',
          ]);
    }

       protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


