<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.barand.barand',[
            'barands'=>Brand::all()
        ]);
    }
    public function Savebrand(Request $request)
    {
        Brand::Savebrand($request);
        return back()->with('massage','Info Save Successfully');
    }

    public function brandStatus($id)
    {
        Brand::brandStatus($id);
        return back()->with('massage','status info update');

    }

    public function deleteBrand(Request $request)
    {
        Brand::brandDelete($request);
        return back()->with('massage','info delete successful');
    }
    public function editBrand($id)
    {

        return view('admin.barand.edit-brand',[
            'brands'=>Brand::find($id)
        ]);
    }
    public function updateBrand(Request $request)
    {
        Brand::Savebrand($request);
        return redirect(route('barand'));
    }
}
