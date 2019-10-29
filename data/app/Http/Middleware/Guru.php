<?php

namespace App\Http\Middleware;

use Closure;

class Guru
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
       if(\Auth::check() && \Auth::user()->level == 'guru' ) {        
            return $next($request);
        }
        return response('Unauthorized', 401);
    }
}
