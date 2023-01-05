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
        return view('admin.product.manage',[
            'products' => Product::all()
        ]);
    }
    public function detail($id)
    {
        return view('admin.product.detail',['product'=>Product::find($id)]);
    }
    public function editProduct($id)
    {
        return view('admin.product.edit',[
            'product'=>Product::find($id),
            'categories'=>Category::all(),
            'subcategories'=>Subcategory::all(),
            'brands'=>Brand::all(),
        ]);
    }
    public function updateProduct(Request $request,$id)
    {
        Product::updateProductInfo($request,$id);
        if ($request->file('other_image'))
        {
            OtherImage::updateOtherImage($request,$id);
        }
        return redirect('/product/manage')->with('massage','Product Info Update Successfully');
    }
    public function productDelete($id)
    {
        Product::deleteProduct($id);
        OtherImage::deleteOtherImage($id);
        return redirect(route('product.manage'));
    }

}


