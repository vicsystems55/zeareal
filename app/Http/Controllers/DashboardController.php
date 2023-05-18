<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Membership;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(Request $request)
    {
        # code...

        $members = Membership::latest()->get();

        $donations = Donation::latest()->get();

        return view('dashboard.home', compact('members', 'donations'));
    }

    public function members(Request $request)
    {
        # code...

        $members = Membership::latest()->get();


        return view('dashboard.members', compact('members'));
    }

    public function donations(Request $request)
    {
        # code...

        $donations = Donation::latest()->get();


        return view('dashboard.donations', compact('donations'));
    }
}
