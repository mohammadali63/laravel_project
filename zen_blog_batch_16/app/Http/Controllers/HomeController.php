<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use DB;
use mysql_xdevapi\Table;

class HomeController extends Controller
{
    public function index(){
        $blogs=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->select('blogs.*','categories.category')
            ->where('blogs.status',1)
            ->where('blog_type','populer')
            ->orderby('blogs.id','asc')
            ->take(1)
            ->get();
//            return $blogs;



        return view('frontEnd.home.home',[
            'blogs'=>blog::all()
        ]);
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
