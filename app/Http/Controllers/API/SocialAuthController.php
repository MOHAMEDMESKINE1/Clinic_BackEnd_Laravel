<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Exceptions\Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    public function HandleCallback()
    {
        try {
            
        
            $user = Socialite::driver('google')->user();
            $existUser = User::where('email',$user->email)->first();
            

            if($existUser) {
                Auth::loginUsingId($existUser->id);
                // Auth::login($existUser,true);
            }
            else {
                $newUser = User::create([
                    "name"=>$user->name,
                    "email"=>$user->email,
                    // "google_id"=>$user->google_id,
                    "password"=>Hash::make($user->password),

                ]);
                Auth::loginUsingId($user->id);
                // Auth::login($existUser,true);

            }
            return redirect()->to('/home');
           
        } 
       
        catch (Exception $e) {
            return redirect('/login');
        }
           
        
      
    }
}
