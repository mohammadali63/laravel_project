<?php

namespace App\Http\Controllers;

use App\Models\section;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student,$image,$imageNewName,$imageUrl,$drive;
    public function index()
    {
        return view('crud.student.add',[
            'sections' => section::all()
        ]);
    }
    public function manage()
    {
        return view('crud.student.manage',[
            'students' => student::all()
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
}
