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
    public function events()
    {
        return view('front.events');
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function bookYourSession()
    {
        return view('front.booksession');
    }
    public function community()
    {
        return view('front.community');
    }
    
}
