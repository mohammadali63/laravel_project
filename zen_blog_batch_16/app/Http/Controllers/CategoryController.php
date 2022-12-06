<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category;
   public function index()
   {
       return view('admin.category.category',[
           'categories'=>category::all()
       ]);
   }
   public function save(Request $request)
   {
       category::saveCategory($request);
       return back();

   }
   public function editCategory($id)
   {
       return view('admin.category.edit-category',[
           'categories'=>category::find($id)
       ]);
   }
   public function updateCategory(Request $request)
   {
       category::updateCategories($request);
       return redirect(route('category'))->with('massage','Update Successfully');
   }

   public function deleteCategory(Request $request)
   {
       $this->category = category::find($request->namedelete_id);
       $this->category->delete();
       return back()->with('massage','delete Successfully');
   }
}
