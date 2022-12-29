<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use DB;

class SubcategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.sub-category',[
            'categories'=>Category::all(),
            'subCategory'=>DB::table('subcategories')
            ->join('categories','subcategories.category_id','categories.id')
            ->select('subcategories.*','categories.category_name')
            ->get()
        ]);
    }
    public function saveSubCategory(Request $request)
    {
        Subcategory::saveSubCategory($request);
        return back()->with('massage','Subcategory Save');
    }
}
