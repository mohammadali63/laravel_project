<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\blog;
use App\Models\category;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public $blog ,$image,$imageNewname,$imageUrl,$directory;
    public function index()
    {
        return view('admin.blog.blog',[
            'categories'=>category::all(),
            'authors'=>author::all()
        ]);
    }
    public function saveBlog(Request $request)
    {

        $this->blog = new blog();
        $this->blog->category_id = $request->category_id;
        $this->blog->author_id = $request->author_id;
        $this->blog->title = $request->title;
        $this->blog->slug = $this->makeSlag($request);
        $this->blog->description = $request->description;
        $this->blog->image = $this->saveImage($request);
        $this->blog->date = $request->date;
        $this->blog->blog_type = $request->blog_type;
        $this->blog->status = $request->status;
        $this->blog->save();
        return back();

    }
    public function saveImage($request)
    {
        $this->image = $request->file('image');
        $this->imageNewname =rand().'.'.$this->image ->getClientOriginalExtension();
        $this->directory ='admin/upload-image/blog-image/';
        $this->imageUrl = $this->directory.$this->imageNewname;
        $this->image->move($this->directory,$this->imageNewname);
        return $this->imageUrl;
    }
    public function makeSlag($request){
        if ($request->slug){
            $str = $request->slug;
            return preg_replace('/\s+/u','-',trim($str));
        }
        $str = $request->title;
        return preg_replace('/\s+/u','-',trim($str));
    }

    public function manageBlog()
    {
        return view('admin.blog.manage',[
            'blogs'=>DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->join('authors','blogs.author_id','=','authors.id')
            ->select('blogs.*','categories.category','authors.author_name')
            ->get()
        ]);
    }
    public function satatus($id)
    {
        $this->blog = blog::find($id);
        if ($this->blog->status == 1)
        {
            $this->blog->status = 2;
            $this->blog->save();
        }
        else
        {
            $this->blog->status = 1;
            $this->blog->save();
        }
        return back();
    }
}
