<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/dog';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function store(Request $request) {
        $user = new SocialPets;

        $user->email = Input::get('email_login');
        $user->password = Input::get('password_login');

        $user->save();
    }
    public function redirectTo()
    {
        if (auth()->user()->role == 'admin') {
            return '/panel_administrador';
        }else {
            return '/dog';
        }
    }
    /*public function showLoginForm()
    {
        return view('login-view');
    }*/
}
