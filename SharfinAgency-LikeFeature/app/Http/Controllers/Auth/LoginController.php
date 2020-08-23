<?php

namespace App\Http\Controllers\Auth;

use App\Agent;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/';

    function index()
    {
        return view('public.Login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function onLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = AuthController::user();
            if (Auth::user()->role == 'Agent') {
                if ($user->approve == null) {
                    Auth::logout();
                    return redirect()->back()->withErrors(['Agent Not Approve']);
                } else  return redirect(route('Dashboard'));
            } if(Auth::user()->role == 'Admin') {
                return redirect(route('Dashboard'));
            }else  return redirect()->route('Landing');
        }
        return redirect()->back()->withErrors(['Kata Sandi atau Password Salah']);
    }

    function logout()
    {
        Auth::logout();
        return redirect('SignIn');
    }

}
