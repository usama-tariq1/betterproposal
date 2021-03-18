<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()){
            if(Auth::user()->role == 1){
                // return redirect('/admin/dashboard');
            }
            else{
                if(Auth::user()->role != 2){
                    return redirect('/login');
                }
            }
            if(Auth::user()->first_login == 1){
                return redirect('/firstlogin');

            }
        }

        if(!Auth::user()){
            return redirect('/login');
        }

        return $next($request);
    }
}
