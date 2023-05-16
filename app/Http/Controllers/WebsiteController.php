<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    
    public function StoreContact(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Contact::create($request->all());

        return redirect('/');
    }
    public function team(){
        return view ('website.team');
    }
    public function contact(){
        return view ('website.contact');
    }
    public function about(){
        return view ('website.about');
    }
    public function services(){
        return view ('website.services');
    }
    public function appointement(){
        return view ('website.appointement');
    }
    public function thankyou(){
        return view ('website.thankyou');
    }
}
