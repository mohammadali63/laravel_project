@extends('crud.master')
@section('title')
    Student Manage
@endsection
@section('content')
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
{{--                                <th>Department Name</th>--}}
                                <th>Department Name</th>
{{--                                <th>Section Name</th>--}}
                                <th>Section ID</th>
                                <th>Addres</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            @foreach($getStudentData as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->student_name}}</td>
                                <td>{{$student->phone_number}}</td>
                                <td>{{$student->email}}</td>
{{--                                <td>{{$student->department_name}}</td>--}}
                                <td>{{$student->dept_name}}</td>
                                <td>{{$student->section_name}}</td>
{{--                                <td>{{$student->section_name}}</td>--}}
                                <td>{{$student->addres}}</td>
                                <td>
                                    <img src="{{asset($student->image)}}" class="img-fluid w-75 h-75"/>
                                </td>
                                <td>
                                    <a href="{{route('edit',['id'=>$student->id])}}" class="btn btn-outline-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('delete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="name_ids" value="{{$student->id}}">
                                        <button type="submit" onclick="return confirm('Are you sure delete this.......')" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
