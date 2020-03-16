<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        if ($request->getMethod() === "OPTIONS") {
            return response('');
        }

        return $next($request)
            ->header("Access-Control-Expose-Headers", "Access-Control-*")
            ->header("Access-Control-Allow-Headers", "Access-Control-*, Origin, Authorization, X-Auth-Token, X-Requested-With, Content-Type, Accept")
            ->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE, OPTIONS, HEAD')
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Allow', 'GET, POST, PATCH, PUT, DELETE, OPTIONS, HEAD');
    }
}

