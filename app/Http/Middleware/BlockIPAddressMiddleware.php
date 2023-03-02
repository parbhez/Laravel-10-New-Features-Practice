<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockIPAddressMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public $blacklistIps = [
        '192.168.0.5',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        if(in_array($request->getClientIp(), $this->blacklistIps)){
            abort(403, 'You are restricted to access the site.');
        }

        return $next($request);
    }
}
