@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Student Manage</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>sl</th>
                                <th>Student Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Dept Name</th>
                                <th>Dept Code</th>
                                <th>Image</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
{{--                            @foreach($students as $student)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $student->id }}</td>--}}
{{--                                    <td>{{ $student->student_name }}</td>--}}
{{--                                    <td>{{ $student->student_phone }}</td>--}}
{{--                                    <td>{{ $student->student_email }}</td>--}}
{{--                                    <td>{{ $student->dept_name }}</td>--}}
{{--                                    <td>{{ $student->dept_code }}</td>--}}
{{--                                    <td>{{ $student->image }}</td>--}}
{{--                                    <td>{{ $student->address }}</td>--}}
{{--                                    <td>Action</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}

                            <tr>
                                <th>1</th>
                                <th>Student Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Dept Name</th>
                                <th>Dept Code</th>
                                <th>Image</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


