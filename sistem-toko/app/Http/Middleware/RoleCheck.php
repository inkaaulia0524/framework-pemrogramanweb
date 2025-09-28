<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // kalau user login DAN rolenya ada di daftar roles
        if (Auth::check() && in_array(Auth::user()->role, $roles)) {
            return $next($request);
        }

        // kalau tidak sesuai role
        Auth::logout();
        return redirect('/dashboard')->with('status', 'Anda tidak punya akses ke halaman ini');

    }
}
