<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blog;

    public function addBlog()
    {
        return view('add-blog');
    }

    public function manage()
    {
        return view('manage',[
            'blogs'=> Blog::all()
        ]);
    }

    public function save(Request $request)
    {
       Blog::newBlog($request);

        return back();

    }
    public function status($id)
    {
        $this->blog = Blog::find($id);

        if ($this->blog->status == 1)
        {
            $this->blog->status = 0;
            $this->blog->save();
        }
        else
        {
            $this->blog->status = 1;
            $this->blog->save();

        }
        return back()->with('massage','Change Successfully');
    }
    public function delete(Request $request)
    {
        $this->blog = Blog::find($request->name_id);
        $this->blog->delete();
        return back()->with('massage','delete Successfully');
    }
    public function edit($id)
    {
        return view('edit',[
            'blogs'=>Blog::find($id),
        ]);
    }
    public function updateBlog(Request $request)
    {
        Blog::updateBlog($request);
        return redirect(route('manage.blog'))->with('massage','Update Successfully');

    }
}
