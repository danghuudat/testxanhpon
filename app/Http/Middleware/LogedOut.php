<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LogedOut
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
        if (Auth::guest()) {
            return redirect('login');
        };
        // if(Auth::user()->level == 0){
        //     return back();
        // }
        return $next($request);
    }
}
