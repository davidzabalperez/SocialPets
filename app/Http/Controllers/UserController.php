<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Mensaje;




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
    public function store(Request $request)
    {
        $request->validate([
            'receiver'=>'required',
            'text' => 'required'
          ]);
        $mensaje = new Mensaje();
        $mensaje->id_sender = Auth::user()->id;
        $mensaje->id_receiver = $request->input('receiver');
        $mensaje->text = $request->input('text');
        $mensaje->save();
        return redirect('/mensajes'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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

        request()->validate([
        'email'           => 'required|max:255|email',
        'password'           => 'required|confirmed',
        ],
        [
            'email.required' => 'Email es un campo requerido',
            'email.email' => 'Introduce un email valido',
            'password.required' => 'Introduce una contraseña',
            'password.confirmed' => 'Contraseña o Email incorrecto',

        ]);
         $email = $request->input('email_login');
        $password = $request->input('password_login');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
        // Success
            return redirect()->intended(route('Inicio'));
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


    public function show($id)
    {
        $perro = Dog::find($id);

        return view('/dog/dog_profile', compact('perro'));
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
        request()->validate([
            'name'=>'string|max:15|min:4',
            'email'=>'email',
        ],[
            'name.string' => 'introduce un texto',
            'name.min' => 'minimo 4 caracteres',
            'name.max' => 'maximo 15 caracteres',
            'email.email' => 'introduce un email valido',

        ]);
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
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'Usuario eliminado correctamente');
    }

    public function getProfile()
    {
    $user = Auth::user();
    return view('profile', compact('user'));
    }


}
