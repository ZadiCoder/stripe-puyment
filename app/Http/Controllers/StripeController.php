<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function form(){
        return view('stripe.form');
    }
    public function makePayment(Request $request){

        \Stripe\Stripe::setApiKey('sk_test_51LOORaF2LLDWlIIZN2v7GlE2v2eDF2Lw4jf0akkvwziugt8ice7HfEF8B167Lu1x1exdyaQ3UyXUwVU85hU8eHNt00FNqL85e4');
        $charge = \Stripe\Charge::create([
            'source' => $_POST['stripeToken'],
            'description' => "10 cucumbers from Roger's Farm",
            'amount' => 1000,
            'currency' => 'usd',
            
          ]);
          //dd($charge);
          if($charge->status == 'succeeded'){
            return redirect()->route('form.payment')->with('message','Payment Successfully Done');
          }
    }
}
