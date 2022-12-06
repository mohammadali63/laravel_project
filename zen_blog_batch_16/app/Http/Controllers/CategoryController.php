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
}
