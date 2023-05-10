<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    protected function redirectTo()
    {
    if (auth()->user()->role === 'admin') {
        
        return redirect('/admin/dashboard');

    } elseif (auth()->user()->role === 'doctor') {

        return redirect('/doctor/dashboard');

    } elseif (auth()->user()->role === 'patient') {

        return redirect('/patient/dashboard');
    }

    return redirect('/dashboard');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return view('website.thankyou');
        // return redirect()->intended(RouteServiceProvider::HOME);
        return redirect()->intended($this->redirectTo());

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
  

}
