<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Auth;
use KetoBootstrap\User;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        switch ($request->product) {
            case 'general':
                $amount = 47;
                break;
            default:
                $amount = 47;
                break;
        }
        try {
            $charge = Stripe::charges()->create([
                'currency' => 'USD',
                'amount' => $amount, // change affiliate total as well
                'source' => $request->stripeToken,
                'description' => '28-Day Weight Loss Challenge',
                'capture' => true,
                'receipt_email' => $request->email,
            ]);
        } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
            $message = $e->getMessage();
            dd($message);
            //return redirect()->back()->with('message', $message);
        }

    	$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'join_price' => $amount,
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        	return redirect()->intended('welcome');
        }
    }
}
