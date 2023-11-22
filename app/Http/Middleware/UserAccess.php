<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType): Response
    {
        if (auth()->user()->type == $userType) {
            return $next($request);
        }

        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.dashboard');
        } else if (auth()->user()->type == 'instruktur') {
            return redirect()->route('instruktur.dashboard');
        } else {
            return redirect()->route('dashboard');
        }
        //return response()->json(['You do not have permission to access for this page.']);
        /* return response()->view('errors.check-permission'); */
    }
}
