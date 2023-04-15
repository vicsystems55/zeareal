<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
        
        return view('home');
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

  
}
