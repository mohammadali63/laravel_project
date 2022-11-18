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
    public function categories()
    {
        return view('frontEnd.categories.category');
    }
    public function about()
    {
        return view('frontEnd.about.about');
    }

}
