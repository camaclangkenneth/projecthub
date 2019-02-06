<?php

namespace App\Http\Middleware;

use Closure;

class HRAdminMiddleware
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
        if( !$request->user() || ($request->user() && $request->user()->type != 'HR')){
            return response()->json([
                'data' => 'unauthorized',
                'role' => 'HR_ADMIN',
            ]);
        }
        return $next($request);
    }
}
