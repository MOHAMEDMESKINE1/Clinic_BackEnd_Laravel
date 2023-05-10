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
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
          
           
        // }
        
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Get the user's role
                $user = Auth::guard($guard)->user();
                $role = $user->role;
    
                // Redirect based on the user's role
                switch ($role) {
                    case 'admin':
                        return redirect('/admin/dashboard');
                        break;
                    case 'doctor':
                        return redirect('/doctor/dashboard');
                        break;
                    case 'patient':
                    default:
                        return redirect('/patient/dashboard');
                        break;
                }
            }
        }
    
        return $next($request);
    }
}
