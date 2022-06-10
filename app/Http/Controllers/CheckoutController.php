<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $order = Order::orderBy('created_at', 'desc')->first();
        $total = $order['total_price'];

        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51L8iyqJtHFYmGwezjEbVAp83vQMMMp7mRbrAZy7iOERejvIJ9HsHtFfRZr7zkhk5vJMoKnQCsL4FZLFURKTrOXjF00bYb4xsLs');
        		
		$amount = $total;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'EUR',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent'));

    }

    public function afterPayment()
    {  
        
        $order = Order::orderBy('created_at', 'desc')->first();
        $order['payment_state'] = true;
        
        $order->save();
        
        echo 'Payment Has been Received';

        return redirect('/payments/succesfull');
    }
}