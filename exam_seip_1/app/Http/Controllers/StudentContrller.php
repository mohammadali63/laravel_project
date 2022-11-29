<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\department;
use App\Models\section;

class StudentContrller extends Controller
{
    public $student,$image,$imageNewName,$imageUrl,$drive;
    public function index()
    {
        return view('crud.student.add',[
            'sections' => section::all()
        ],
            [
                'departments' => department::all()
            ]);
    }
    public function manage()
    {
        return view('crud.student.manage',[
    'getStudentData' =>DB::table('students')
                ->join('departments','students.dept_id','=','departments.id')
                ->join('sections', 'students.section_id', '=', 'sections.id')
                ->select('students.*', 'departments.dept_name','sections.section_name')
                ->get()
        ]);
    }

    public function save(Request $request)
    {
        $this->student = new student();
        $this->student->student_name = $request->student_name;
        $this->student->phone_number = $request->phone_number;
        $this->student->email = $request->email;
        $this->student->dept_id = $request->dept_id;
        $this->student->section_id = $request->section_id;
        $this->student->addres = $request->addres;
        $this->student->image = $this->getImage($request);
        $this->student->save();
        return back();

    }

    public function getImage($request)
    {
        $this->image = $request->file('image');
        $this->imageNewName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->drive ='asset/image/';
        $this->imageUrl= $this->drive.$this->imageNewName;
        $this->image->move($this->drive,$this->imageNewName);
        return $this->imageUrl;

    }
    public function delete(Request $request)
    {
        $this->student = student::find($request->name_ids);
        $this->student->delete();
        return redirect(route('manage.info'));
    }
    public function edit($id)
    {
        $this->student = student::find($id);
        $this->studenta = $this->student->dept_id;
        $this->studentb = department::find($this->studenta);
        $this->sectiona = $this->student->section_id;
        $this->sectionb = section::find($this->sectiona);


        return view('crud.student.edit',[
            'student' => $this->student,
            'departments' => department::all(),
            'getdept'=> $this->studentb,
            'sections' => section::all(),
            'getsection'=> $this->sectionb,

        ]);
    }
    public function updateStudent(Request $request)
    {
        $this->student =student::find($request->student_id);
        $this->student->student_name = $request->student_name;
        $this->student->phone_number = $request->phone_number;
        $this->student->email = $request->email;
        $this->student->dept_id = $request->dept_id;
        $this->student->section_id = $request->section_id;
        $this->student->addres = $request->addres;
        if ($request->file('image'))
        {
            if ($this->student->image != null)
            {
                unlink($this->student->image);
            }
            $this->student->image= $this->getImage($request);
        }
        $this->student->save();
        return redirect(route('manage.infos'));
    }
}
