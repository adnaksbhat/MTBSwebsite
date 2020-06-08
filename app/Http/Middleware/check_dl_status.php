<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class check_dl_status
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
        if(Session::get('id'))
        return $next($request);
        return redirect('/')->with('status','Unauthorised access!!Please Log in First');
    }
}