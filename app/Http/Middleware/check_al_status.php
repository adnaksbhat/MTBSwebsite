<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class check_al_status
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
        if(Session::get('admin_login_status')==true)
             return $next($request);
        // abort(403,'Unauthorised Acess');
         return redirect('admin_login')->with('status','Unauthorised Access!!Please Log in First');
    }
}