<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Agent;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Account;
use App\User;
use Carbon\Carbon;
use Facade\FlareClient\Time\Time;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }

    function formUser()
    {
        return view('public.RegisterUser');
    }

    function formAgent()
    {
        return view('public.RegisterAgent');
    }


    protected function validatorUserRegister($data)
    {
        return Validator::make($data->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:11', 'max:12'],
            'name' => ['required'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
        ]);
    }

    function onUserRegister(Request $request)
    {
        $data = [
            'email' => $request['email'],
            'role' => 'User',
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'name' => $request['name'],
            'birth_date' => $request['birth_date'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'picture' => $request['picture'],
        ];
        $validator = $this->validatorUserRegister($request);
        if (!$validator->fails()) {
            Account::create($data);
            $data['id'] = Account::latest()->first()->id;
            $path = $request->file('picture')->storeAs('public/image/users', Carbon::now()->timestamp . '.' . $request->file('picture')->extension());
            $data['picture'] = str_replace('public','storage',$path);
            User::create($data);
            return redirect(route('SignIn'));
        } else {
            return redirect(route('UserRegister'))->withErrors($validator);
        }
    }

    protected function validatorAgentRegister($data)
    {
        return Validator::make($data->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:11', 'max:12'],
            'agency' => ['required'],
            'name' => ['required'],
            'job' => ['required'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
        ]);
    }

    function onAgentRegister(Request $request)
    {
        $data = [
            'email' => $request['email'],
            'role' => 'Agent',
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'name' => $request['name'],
            'agency' => $request['agency'],
            'job' => $request['job'],
            'birth_date' => $request['birth_date'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'picture' => $request['picture'],
        ];
        $validator = $this->validatorUserRegister($request);
        if (!$validator->fails()) {
            Account::create($data);
            $data['id'] = Account::latest()->first()->id;
            $path = $request->file('picture')->storeAs('public/image/users', Carbon::now()->timestamp . '.' . $request->file('picture')->extension());
            $data['picture'] = str_replace('public','storage',$path);
            Agent::create($data);
            return redirect(route('SignIn'));
        } else {
            return redirect(route('AgentRegister'))->withErrors($validator);
        }
    }


}
