<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public  function index()
    {
        return view('admin.brand.brand',[
            'brands'=> Brand::all()
        ]);
    }

    public function saveBrand(Request $request)
    {
        Brand::newBrand($request);
        return back()->with('massage','new brand create success');
    }
    public function updateStatus($id)
    {
        $this->brand = Brand::find($id);
        if ($this->brand->status == 1)
        {
            $this->brand->status = 0;
        }
        else{
            $this->brand->status = 1;
        }
        $this->brand->save();
        return back()->with('massage','Your Status Update Success');
    }
    public function delete(Request $request)
    {
        $this->brand = Brand::find($request->brand_id);
        if(file_exists($this->brand->image))
        {
            unlink($this->brand->image);
        }
        $this->brand->delete();
        return back()->with('massage','Delete Success');
    }
    public  function edit($id)
    {
        return view('admin.brand.edit',[
            'brand'=>Brand::find($id)
        ]);
    }

    public function update(Request $request)
    {
       Brand::newBrand($request);
        return redirect(route('brand'))->with('Update Success');
    }
}
