<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    // public function handle($request, Closure $next)
    // {
    //     if (auth()->check() && auth()->user()->hasRole('admin')) {
    //         return $next($request);
    //     }

    //     abort(403, 'No tienes permisos para acceder a esta página.');
    // }
}
