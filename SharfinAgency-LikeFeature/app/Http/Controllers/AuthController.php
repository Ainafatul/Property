<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Agent;
use App\User;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    static function user()
    {
        $user = Auth::user();
        if ($user->role == 'User') return User::find($user->id);
        if ($user->role == 'Agent') return Agent::find($user->id);
        if ($user->role == 'Admin') return Admin::find($user->id);
        return null;
    }

    static function getData()
    {
        $data = new stdClass();
        $data->account = Auth::user();
        $data->user = AuthController::user();
        return $data;
    }

    function dashboard()
    {
        $role = Auth::user()->role;
//        if ($role == 'User') return redirect()->route('Landing');
        if ($role == 'User') return (new UserController())->dashboard();
        if ($role == 'Agent') return (new AgentController())->dashboard();
        if ($role == 'Admin') return (new AdminController())->dashboard();
        return null;
    }
}
