<?php

namespace App\Http\Controllers;

use App\Models\DonationProgramme;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {

        $causes = DonationProgramme::get();

        return view('home', compact('causes'));
    }

    public function about()
    {

        return view('about');
    }

    public function contact()
    {

        return view('contact');
    }

    public function projects()
    {

        return view('projects');
    }

    public function blog()
    {

        return view('blog');
    }

    public function post()
    {

        return view('post');
    }

    public function shop()
    {

        return view('shop');
    }

    public function programArea()
    {

        return view('program_area');
    }

    public function donation(Request $request)
    {

        $cause = DonationProgramme::where('slug', $request->slug)->firstOrFail();

        return view('donation', compact('cause'));
    }

    public function registration()
    {

        return view('registration');
    }

    public function success()
    {

        return view('success');
    }

    public function log_out()
    {

        return view('success');
    }


}
