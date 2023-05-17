<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(Request $request)
    {
        # code...

        return view('dashboard.home');
    }

    public function members(Request $request)
    {
        # code...

        return view('dashboard.members');
    }

    public function donations(Request $request)
    {
        # code...

        return view('dashboard.donations');
    }
}
