<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    

    public function login(Request $request){

        $this->validate($request, [
        'email_login'           => 'required|max:255|email',
        'password_login'           => 'required|confirmed',
        ],
        [
            'email_login.required' => 'Email es un campo requerido',
            'email_login.email' => 'Introduce un email valido',
            'password_login.required' => 'Introduce una contraseña',
            'password_login.confirmed' => 'Contraseña o Email incorrecto',

        ]);
        if (Auth::attempt(['email_login' => $email, 'password_login' => $password])) {
        // Success
            return redirect()->intended('/UserPanel');
        } else {
        // Go back on error (or do what you want)
            return redirect()->back();

    }

    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getProfile(){
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/profile')->with('success', 'Usuario editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/')->with('succes','Usuario eliminado correctamente');
    }
}
