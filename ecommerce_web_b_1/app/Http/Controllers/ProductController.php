<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index',[
            'categories'=> Category::where('status',1)->get(),
            'subcategories'=> Subcategory::where('status',1)->get(),
            'barnds'=> Brand::where('status',1)->get(),
        ]);
    }
    public function create(Request $request)
    {
        return $request->all();
    }
    public function manage()
    {
        return view('admin.product.manage');
    }
    public function edit($id)
    {
        return view('admin.product.edit');
    }
    public function update(Request $request,$id)
    {
        return view('admin.product.manage');
    }

}
