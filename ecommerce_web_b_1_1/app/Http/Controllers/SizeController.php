<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        return view('admin.size.size',[
            'sizes'=>Size::all()
        ]);
    }
    public function saveSize(Request $request)
    {
        $this->size = new Size();
        $this->size->size_name = $request->size_name;
        $this->size->save();
        return back()->with('massage','New Size create Success');
    }
    public function deleteSize(Request $request)
    {
        $this->size = Size::find($request->size_id);
        $this->size->delete();
        return back()->with('massage','Delete Success');
    }
    public function updateStatus($id)
    {
        $this->size = Size::find($id);
        if ($this->size->status == 1)
        {
            $this->size->status = 0;
        }
        else{
            $this->size->status = 1;
        }
        $this->size->save();
        return back()->with('massage','Your Status Update Success');
    }

    public function edit($id)
    {
        return view('admin.size.edit',[
            'size'=>Size::find($id)
        ]);
    }

    public function update(Request $request)
    {
        $this->size = Size::find($request->size_id);
        $this->size->size_name = $request->size_name;
        $this->size->save();
        return redirect(route('size'))->with('massage','Update Success');
    }
}
