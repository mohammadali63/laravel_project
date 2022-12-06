<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function BlogDetails()
    {
        return view('frontEnd.blog.blog-details');
    }

    public function categories()
    {
        return view('frontEnd.category.categories');
    }
    public function about()
    {
        return view('frontEnd.about.about');
    }
    public function contact()
    {
        return view('frontEnd.contact.contact');
    }
}
