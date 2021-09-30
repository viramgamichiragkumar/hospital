<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('logged_admin')){

        }
        else{
            return redirect('/login');
        }
        return $next($request);
    }
}
