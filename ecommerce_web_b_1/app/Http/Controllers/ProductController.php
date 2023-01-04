<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    private $product;
    public function index()
    {
        return view('admin.product.index',[
            'categories'=> Category::where('status',1)->get(),
            'subcategories'=> Subcategory::where('status',1)->get(),
            'barnds'=> Brand::where('status',1)->get(),
        ]);
    }
    public function createProduct(Request $request)
    {
        $this->product = Product::newProduct($request);
        OtherImage::newOtherImage($request,$this->product->id);
        return back()->with('massage','save product');
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
