<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class Admin
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
        if ( Auth::check() && ((Auth::user()->role()=="Admin"||Auth::user()->role()=="President")||Auth::user()->role()=="VicePresident"||Auth::user()->role()=="Secretary"||Auth::user()->role()=="Treasurer"))
        {
            return $next($request);
        }

        return redirect('/home');

    }
}
