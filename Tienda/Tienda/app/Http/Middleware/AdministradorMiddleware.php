<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdministradorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next) {
        if(auth()->user() != null && in_array(auth()->user()->rol, ['administrador','root'])) {
            return $next($request);
        }
        return redirect('/');
    }

}
