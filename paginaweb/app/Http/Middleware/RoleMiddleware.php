<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware

{
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'No tienes permiso para acceder.');
        }

        return $next($request);
    }
}
