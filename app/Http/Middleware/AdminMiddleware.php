<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
           // Check if the user is authenticated and is an admin
           if (Auth::check() ) {
            return $next($request);
        }

        // Redirect to home or another page if not an admin
        return redirect('/home')->with('error', 'You do not have admin access.');
    }
}