<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.sub-category',[
           'categories'=> Category::all() ,
            'subCategory'=> DB::table('sub_categories')
                            ->join('categories','sub_categories.category_id','categories.id')
                            ->select('sub_categories.*','categories.category_name')
                            ->get()
        ]);
    }

    public function saveSubCategory(Request $request)
    {
        SubCategory::saveSubCategory($request);
        return back()->with('massage','New Sub Category Save');
    }
    public function subStatus($id)
    {
        $this->massage = SubCategory::updateSubStatus($id);
        return redirect(route('sub.category'))->with('massage', $this->massage);
    }

    public function subCategoryDelete(Request $request)
    {
        SubCategory::SubCategoryDelete($request);
        return redirect(route('sub.category'))->with('massage','Category Delete Success');
    }
    public function edit($id)
    {

        return view('admin.category.edit-subcategory',[
            'subcategory'   =>SubCategory::find($id),
            'categories'    =>Category::all(),

        ]);
    }
    public function update(Request $request)
    {
        SubCategory::saveSubCategory($request);
        return redirect(route('sub.category'))->with('massage','Update Success');
    }
}
