@extends('crud.master')
@section('title')
    Student Manage
@endsection
@section('cotent')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Student Manage Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>sl</th>
                                <th>Student Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Department Name</th>
                                <th>Department Code</th>
                                <th>Section Name</th>
                                <th>Addres</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->student_name}}</td>
                                <td>{{$student->phone_number}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->department_name}}</td>
                                <td>{{$student->dept_id}}</td>
                                <td>{{$student->section_name}}</td>
                                <td>{{$student->addres}}</td>
                                <td>
                                    <img src="{{asset($student->image)}}" class="img-fluid w-75 h-75"/>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
