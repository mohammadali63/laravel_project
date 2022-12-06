<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public $author;
    public function author()
    {
        return view('admin.author.author',[
            'authors'=>author::all()
        ]);
    }
    public function authorSave(Request $request)
    {
        author::saveNewAuthor($request);
        return back();
    }
    public function editAuthor($id)
    {
        return view('admin.author.edit-author',[
            'authors'=>author::find($id)
        ]);
    }
    public function updateAuthor(Request $request)
    {
        author::updateNewAuthor($request);
        return redirect(route('author'))->with('massage','Update Successfully');
    }
    public function deleteAuthor(Request $request)
    {
        $this->author = author::find($request->namedelete_id);
        $this->author->delete();
        return back()->with('massage','delete Successfully');

    }
}
