<?php

namespace App\Http\Controllers\Auth;
// use Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {

      return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        // $remember = $request->has('remember') ? true : false;
        $credentials = $request->only('email', 'password');
        $remember = $request->input('remember');
        if (Auth::attempt($credentials,$remember)) {
          // $remember = Input::get('remember');
          // if(!empty($remember))
          // {
          //   Auth::login(Auth::user()->id,true);
          // }
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }

    public function home()
    {

      return view('home');
    }
}
