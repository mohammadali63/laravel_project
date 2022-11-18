<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home');
    }
    public function singlePost()
    {
        return view('frontEnd.singlepost.singlepostblog');
    }
}
