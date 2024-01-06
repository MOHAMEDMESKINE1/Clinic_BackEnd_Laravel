<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        return redirect('/dashboard');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return view('website.thankyou');
         return redirect()->intended(RouteServiceProvider::HOME);
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
