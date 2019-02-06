<?php

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
        if( !$request->user() || ($request->user() && $request->user()->type != 'A')){
            return response()->json([
                'data' => 'unauthorized',
                'role' => 'ADMIN',
            ]);
        }
        return $next($request);
    }
}
