<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        return view('admin.color.color',[
            'allcolor'=>Color::all()
        ]);
    }
    public function saveColor(Request $request)
    {
        Color::saveColor($request);
        return back()->with('massage','Info Save Successfully');
    }

}
