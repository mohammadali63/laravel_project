<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product, $other_image;

    public  function index()
    {
        return view('admin.product.index',[
            'categories'=> Category::all(),
            'subCategories'=> SubCategory::all(),
            'brands'=> Brand::all()
        ]);
    }

    public function create(Request $request)
    {
       $this->product = Product::addNewProduct($request);
        OtherImage::newOtherImage($request, $this->product->id);
        return back()->with('massage','Product info saved Successfully');
    }

    public function manage()
    {
        return view('admin.product.manage',[
            'products'=> Product::all()
        ]);
    }

    public function detail($id)
    {
        return view('admin.product.detail',[
            'product'=> Product::find($id)
        ]);
    }


    public function edit($id)
    {
        return view('admin.product.edit',[
            'product'=> Product::find($id),
            'categories'=> Category::all(),
            'sub_categories'=> SubCategory::all(),
            'brands'=> Brand::all(),
            'other_images'=> OtherImage::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProductInfo($request ,$id);
        if ($request->file('other_image')){
            OtherImage::updateOtherImage($request,$id);
        }
        return redirect('/product/manage')->with('message','Product info update successfully');
    }


    public function delete($id)
    {
        Product::deleteProduct($id);
        OtherImage::deleteOtherImage($id);
        return back()->with('message','Product info Delete successfully');
    }
}
