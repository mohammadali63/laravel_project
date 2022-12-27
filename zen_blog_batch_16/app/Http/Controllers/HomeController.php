<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\BlogUser;
use App\Models\category;
use Illuminate\Http\Request;
use DB;
use Session;
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

        $comments =DB::table('comments')
            ->join('blog_users','comments.user_id','blog_users.id')
            ->select('comments.*','blog_users.name')
            ->where('comments.blog_id',$blog->id)
            ->get();


        return view('frontEnd.blog.blog-details',[
            'blog'=>$blog,
            'categoryWiseBlog'=>$categoryWiseBlog,
            'comments'=>$comments,


        ]);
    }

    public function categories($id)
    {

        $category = category::where('id',$id)->first();
        $blogs=DB::table('blogs')
        ->join('categories','blogs.category_id','categories.id')
        ->join('authors','blogs.author_id','authors.id')
        ->select('blogs.*','categories.category','authors.author_name')
        ->where('blogs.category_id',$id)
        ->get();

        return view('frontEnd.category.categories',[
            'blogs'=>$blogs,
            'category'=>$category
        ]);
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
    public function userLogin()
    {
        return view('frontEnd.user.user-login');
    }
    public function loginCheck(Request $request)
    {
        $userInfo=BlogUser::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();
        if ($userInfo){
            $exPassword=$userInfo->password;
            if (password_verify($request->password,$exPassword)){
                Session::put('userId',$userInfo->id);
                Session::put('userName',$userInfo->name);
                return redirect('/');
            }
            else{
                return back()->with('massage','please use valid password');
            }

        }
        else{
            return back()->with('massage','please use valid email or phone number');
        }

    }
    public function Logout()
    {
        Session::forget('userId');
        Session::forget('userName');
        return back();


    }
    public function userProfile($id)
    {
        if ($id==Session::get('userId'))
        {
            return view('frontEnd.user.user-profile',[
                'user' => BlogUser::find($id)
            ]);
        }
        else
        {
            return redirect('/');
        }

    }

    public function updateUser(Request $request)
    {
        $user=BlogUser::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if (password_verify($request->oldPass,$user->password))
        {
            $user->password =bcrypt($request->newPass);
        }
        else
        {
            return back()->with('massage',('Your Old Password Incorrect'));
        }
        $user->save();
        return redirect('/');
    }
}
