<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function dashboard(){
        return view('user.Dashboard',['data'=>AuthController::getData()]);
    }


}
