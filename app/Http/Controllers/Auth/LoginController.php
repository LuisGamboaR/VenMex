<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Redirect;
use Illuminate\Support\MessageBag;


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

    public function login() {

        return view('auth/login');
      }


    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }else{
            $errors = new MessageBag; // initiate MessageBag

            $credentials = [
              'email'     => Input::get('email'),
              'password'  => Input::get('password')    
            ];

            $errors = new MessageBag(['password' => ['El correo y/o la contraseña no son correctos.']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.

            return view('auth/login')->withErrors($errors)->withInput(Input::except('password')); 
        
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return view('auth/login');
      }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
