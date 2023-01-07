<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home',[
            'latestproducts'    => Product::where('status',1)->orderBy('id','desc')->take(10)->get(),

            'brands'            => Brand::all(),
            'home_categories'   => Category::where('home_status',1)->get(),
        ]);
    }
    public function shop($id)
    {
        return view('frontEnd.shop.shop',[
            'products' => Product::where('category_id',$id)->orderBy('id','desc')->get()
        ]);
    }
    public function productDetails($id)
    {
        return view('frontEnd.shop.product-detail',[
            'product' => Product::find($id),
        ]);
    }
    public function cart()
    {
        return view('frontEnd.cart.add-cart');
    }
    public function checkout()
    {
        return view('frontEnd.checkout.checkout');
    }
}
