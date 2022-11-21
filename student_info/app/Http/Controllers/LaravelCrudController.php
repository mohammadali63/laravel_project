<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class LaravelCrudController extends Controller
{
    public $info;

    public function index()
    {
        return view('crud.add');
    }

    public function save(Request $request)
    {
       $this->info = new student();
       $this->info->name= $request->name;
       $this->info->email= $request->email;
       $this->info->phone= $request->phone;
       $this->info->department= $request->department;
       $this->info->addres= $request->addres;

       $this->info->save();
       return 'ok';
    }


}
