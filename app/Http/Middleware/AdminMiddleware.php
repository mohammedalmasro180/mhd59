<?php
use Auth;

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        

        if(\Auth::user() && \Auth::check())
        {
            if(\Auth::user() && \Auth::user()->role_as == '1')
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Access Denied! as you are not as admin');
            }
        }
        else
        {
            return redirect('/home')->with('status','Please Login First');
        }
    }
    }
