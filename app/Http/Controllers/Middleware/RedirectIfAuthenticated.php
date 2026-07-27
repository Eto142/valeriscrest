<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null): Response
    {
        // If ADMIN is logged in, redirect them to admin dashboard
        if ($guard === 'admin' && Auth::guard('admin')->check()) {
            return redirect('/admin/dashboard');
        }

        // If USER is logged in, redirect them to user homepage
        if ($guard === 'web' && Auth::guard('web')->check()) {
            return redirect('/user/home');
        }

        return $next($request);
    }
}
