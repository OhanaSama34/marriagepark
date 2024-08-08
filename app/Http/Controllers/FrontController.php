<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function profiles()
    {
        return view('front.profiles');
    }
    public function coaching()
    {
        return view('front.coaching');
    }
    public function collab()
    {
        return view('front.collab');
    }
    public function events()
    {
        return view('front.events');
    }
    public function blog()
    {
        return view('front.blog');
    }
    
}
