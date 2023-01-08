<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        return view('admin.color.color',[
            'colors'=>Color::all()
        ]);
    }
    public function saveColor(Request $request)
    {
        $this->color = new Color();
        $this->color->color_name = $request->color_name;
        $this->color->color_code = $request->color_code;
        $this->color->save();
        return back()->with('massage','New Color create Success');
    }
    public function deleteColor(Request $request)
    {
        $this->color = Color::find($request->color_id);
        $this->color->delete();
        return back()->with('massage','Delete Success');
    }
    public function updateStatus($id)
    {
        $this->color = Color::find($id);
        if ($this->color->status == 1)
        {
            $this->color->status = 0;
        }
        else{
            $this->color->status = 1;
        }
        $this->color->save();
        return back()->with('massage','Your Status Update Success');
    }
    public function edit($id)
    {
        return view('admin.color.edit',[
            'color'=>Color::find($id),
        ]);
    }
    public function update(Request $request)
    {
        $this->color = Color::find($request->color_id);
        $this->color->color_name =  $request->color_name;
        $this->color->color_code =  $request->color_code;
        $this->color->save();
        return redirect(route('color'))->with('massage','Update Success');
    }
}
