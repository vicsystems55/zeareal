<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Paystack;

class DonationController extends Controller
{
    //
    public function store(Request $request)
    {
        # code...

        $donation = Donation::create([
            'donation_programme_id' => $request->donation_programme_id,
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
        ]);


        $data = array(
            "amount" => $donation->amount * 100,
            "reference" => Str::random(8),
            "email" => $donation->email,
            "currency" => "NGN",
            "orderID" => rand(100, 3000),
            "callback_url" => config('app.url').'success?donationId='.$donation->id
        );



    return Paystack::getAuthorizationUrl($data)->redirectNow();
    }
}
