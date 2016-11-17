<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
/*
    // use this to force users to authenticate before visiting the page
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function show() {
        return view('home');
    }
}
