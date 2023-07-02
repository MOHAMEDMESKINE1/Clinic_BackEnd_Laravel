<?php

namespace App\Http\Controllers\Stripe;

use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('dashboard.patient.stripe');
    }
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        $amount  = $request->amount;
        Charge::create ([
                "amount" =>   $amount ,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from WeCare." 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}
