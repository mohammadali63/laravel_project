<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\BlogUser;
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
            ->where('blog_type','trending')
//            ->take(1)
            ->get();
//            return $blogs;



        return view('frontEnd.home.home',[
            'blogs'=>$blogs
        ]);
    }
    public function BlogDetails($slug)
    {
        $blog=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category','authors.author_name')
            ->where('slug',$slug)
            ->first();

        $catId = $blog->category_id;
        $categoryWiseBlog=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category','authors.author_name')
            ->where('blogs.category_id',$catId)
            ->get();


        return view('frontEnd.blog.blog-details',[
            'blog'=>$blog,
            'categoryWiseBlog'=>$categoryWiseBlog

        ]);
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
    public function userRegister()
    {
        return view('frontEnd.user.user-register');
    }
    public function saveUser(Request $request)
    {
        BlogUser::saveUser($request);
        return back();
    }
}
