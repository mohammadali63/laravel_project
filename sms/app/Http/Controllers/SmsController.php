<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index()
    {
        return view('crud.info.student-add');
    }

    public function manage()
    {
        return view('crud.info.student-manage');
    }
}
