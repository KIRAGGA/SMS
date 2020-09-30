<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class StudentLogin
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
        if(empty(Session::has('studentSession'))){ //checking if the session is not empty
            return redirect('/student');
        } // is session name is studentSession is okay 
        return $next($request);
    }
}
