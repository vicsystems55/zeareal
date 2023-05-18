<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    //

    public function store(Request $request)
    {
        # code...


        // return $request->all();

        if ($request->type == 'partner') {
            Membership::create([
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'address' => $request->address,
                'phone' => $request->phone,
                'membership_type' => $request->membership_type,
                'donation_frequency_ndays' => $request->donation_frequency_ndays,
                'donation_frequency_amount' => $request->donation_frequency_amount,
            ]);

        }else{

            Membership::create([
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'address' => $request->address,
                'phone' => $request->phone,
                'membership_type' => $request->membership_type,

            ]);

        }


        return back()->with('message', 'Registration Successful');
    }
}
