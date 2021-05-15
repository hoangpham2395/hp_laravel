<?php

namespace App\Http\Middleware;

use Closure;

class BackendAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (!backendGuard()->check()) {
            return redirect()->route('backend.login');
        }

        return $next($request);
    }
}
