<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RecruiterMiddleware
{
    // public function handle($request, Closure $next)
    // {
    //     if (auth()->check() && auth()->user()->hasRole('recruiter')) {
    //         return $next($request);
    //     }

    //     abort(403, 'No tienes permisos para acceder a esta página.');
    // }
}
