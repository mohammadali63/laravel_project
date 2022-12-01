<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('add-blog');
    }
    public function saveBlog(Request $request)
    {
        blog::newBlog($request);
        return back();

    }
}
