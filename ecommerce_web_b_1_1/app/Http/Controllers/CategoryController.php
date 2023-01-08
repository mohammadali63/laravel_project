<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories,$category, $massage;

    public function index()
    {
        $this->categories = Category::all();
        return view('admin.category.category',[
            'categories'=> $this->categories,
        ]);
    }
    public function saveCategory(Request $request)
    {
        Category::saveCategory($request);

        return redirect(route('category'))->with('massage','New Category Create Success');
    }

    public function status($id)
    {
       $this->massage = Category::updateStatus($id);
        return redirect(route('category'))->with('massage', $this->massage);
    }
    public function categoryDelete(Request $request)
    {
        Category::categoryDelete($request);
        return redirect(route('category'))->with('massage','Category Delete Success');
    }

    public function editCategory($id)
    {
        return view('admin.category.edit_category',[
            'category'=>Category::find($id)
        ]);
    }
}
