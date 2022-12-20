<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add-product');
    }
    public function manageProduct()
    {
        return view('admin.product.manage-product',[
            'Products'=>Product::all()
        ]);
    }
    public function saveProduct(Request $request)
    {
        Product::saveProduct($request);
        return redirect(route('add.product'));

    }
    public function editProduct($id)
    {
        return view('admin.product.edit-product',[
            'products'=>Product::find($id)
        ]);


    }
    public function StatusProduct($id)
    {
        Product::statusProduct($id);
        return back();
    }
    public function updateProduct(Request $request)
    {
        Product::saveProduct($request);
        return redirect(route('manage.product'));
    }
    public function deleteProduct(Request $request)
    {
        Product::ProductDelete($request);
        return redirect(route('manage.product'));
    }
}
