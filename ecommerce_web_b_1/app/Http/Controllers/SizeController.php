<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        return view('admin.size.size',[
            'allsize'=>Size::all()
        ]);
    }
    public function saveSize(Request $request)
    {
        Size::saveSize($request);
        return back()->with('massage','Info Save Successfully');
    }
    public function status($id)
    {
        Size::status($id);
        return back()->with('massage','status info update');
    }
    public function sizeDelete(Request $request)
    {
        Size::sizeDelete($request);
        return back()->with('massage','info delete successful');

    }
    public function editSize($id)
    {
        return view('admin.size.edit-size',[
            'size'=>Size::find($id)
        ]);
    }
    public function updateSize(Request $request)
    {
        Size::saveSize($request);
        return redirect(route('size'));
    }
}
