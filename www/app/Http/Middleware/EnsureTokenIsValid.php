<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // http://localhost/api/authenticate/login/password
        if (hash('sha256', $request->password) !== '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8') // hash -> password
        {
            return redirect('/api/authenticate');
        }
        return $next($request);
    }
}
