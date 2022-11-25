<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function deptAdd()
    {
        return view('crud.dept.add');
    }
    public function deptManage()
    {
        return view('crud.dept.manage');
    }
}
