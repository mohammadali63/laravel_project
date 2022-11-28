<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public $departments;
    public function department()
    {
        return view('crud.dept.department');
    }
    public function Savedept(Request $request)
    {
        $this->departments = new department();
        $this->departments->dept_name = $request->dept_name;
        $this->departments->dept_code = $request->dept_code;
        $this->departments->save();
        return redirect(route('department'));
    }
}
