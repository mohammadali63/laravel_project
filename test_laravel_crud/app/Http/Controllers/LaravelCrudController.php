<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelCrudController extends Controller
{
    public function index()
    {
        return view('crud.add');
    }
}
