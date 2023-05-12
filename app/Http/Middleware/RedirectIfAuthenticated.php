<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guards = null): Response
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
          
           
        // }
        if (Auth::guard($guards)->check()) {
            if ($guards == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($guards == 'doctor') {
                return redirect()->route('doctor.dashboard');
            } elseif ($guards == 'patient') {
                return redirect()->route('patient.dashboard');
            }
        }

        return $next($request);
    }
}
