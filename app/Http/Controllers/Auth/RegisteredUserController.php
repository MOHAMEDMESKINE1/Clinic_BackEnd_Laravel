<?php

namespace App\Http\Controllers\Auth;

use Vonage\Client;
use App\Models\User;
use Illuminate\View\View;
use Vonage\SMS\Message\SMS;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\Vonage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Vonage\Client\Credentials\Basic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Biscolab\ReCaptcha\Facades\ReCaptcha;
use App\Notifications\SuccessfulRegistration;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
    
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));
        // $user = User::findOrFail( $user->id);

        // notify
        // $user->notify(new SuccessfulRegistration($user->name));
        // $basic  = new Basic("b05fff58", "39vWH4Ij3bTKB5hp");
        // $client = new Client($basic);
        // $response = $client->sms()->send(
        //     new SMS("212704282927", 'WeCare', 'Welcome To WeCare Hospital Website ! Mr '.$user->name)
        // );
        
        // $message = $response->current();
        
        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }
    
        
        
        Auth::login($user);

         return redirect(RouteServiceProvider::HOME);
        
    }
}
