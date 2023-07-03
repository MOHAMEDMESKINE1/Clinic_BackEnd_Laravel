<?php

namespace App\Http\Controllers\Stripe;

use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
    public function stripePost(Request $request)
    {
        
         $amount  = $request->amount;
         $name  = $request->name;
         $email  = $request->email;
         $address  = $request->address;
        Stripe::setApiKey ( 'sk_test_51NPsXMBvlMexzi6uP0R4wewnpYvFMDsTUC3AzcoFSJFnFOOYZxxBnRRFscYQDPRnpDt3SjEANpIJXTYdm874M3mj00put4je3E' );
	try {
		Charge::create ( array (
				"amount" => $amount *100,
				"currency" => "usd",
				"source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
				"description" => "WeCare Test payment." ,
                'metadata' => [
                    'name' => $name,
                    'email' => $email,
                    'address' => $address,
                   
                ],
		) );
        Session::flash('success', 'Payment successful!');
        
        return Redirect::back ();

	} catch ( \Exception $e ) {
		Session::flash ( 'fail-message', "Error! Please Try again." );
        
		return Redirect::back ();
	}
    }
}
