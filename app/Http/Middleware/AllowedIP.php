<?php

namespace App\Http\Middleware;

use Closure;

class AllowedIP
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
        if($request->IP()!=env('ALLOWED_IP')){
            abort(401);
        }
        return $next($request);
    }
}
