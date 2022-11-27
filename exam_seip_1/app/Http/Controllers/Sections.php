<?php

namespace App\Http\Controllers;

use App\Models\section;
use Illuminate\Http\Request;

class Sections extends Controller
{
    public $sections;
    public function section()
    {
        return view('crud.section.section');
    }
    public function saveSection(Request $request)
    {
        $this->sections = new section();
        $this->sections->section_name = $request->section_name;
        $this->sections->save();
        return redirect(route('section'));

    }
}
