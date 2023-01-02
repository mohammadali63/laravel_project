<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.category',[
            'categories'=>Category::all()
        ]);
    }
    public function SaveCategory(Request $request)
    {
        Category::saveCategory($request);
        return back()->with('massage','Info Save Successfully');
    }
    public function catStatus($id)
    {
        Category::status($id);
        return back()->with('massage','status info update');
    }

    public function categoryDelete(Request $request)
    {
        Category::categoryDelete($request);
        return back()->with('massage','info delete successful');

    }

    public function categoryEdit($id)
    {
        return view('admin.category.edit-category',[
            'categories'=>Category::find($id),
            ]);
    }

    public function updateCategory(Request $request)
    {
        Category::saveCategory($request);
        return redirect(route('category'));
    }
}
