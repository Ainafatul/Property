<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AuthController;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Role extends Middleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        $flag = false;
        if (!Auth::check()) return redirect()->route('SignIn');
        foreach ($roles as $role) if (Auth::user()->role == $role) $flag = true;
        if($flag){
            view()->share('auth', AuthController::getData());
            return $next($request);
        }else{
            return redirect()->route('SignIn');
        }
    }
}
