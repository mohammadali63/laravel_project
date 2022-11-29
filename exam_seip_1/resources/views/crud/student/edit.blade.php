@extends('crud.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h1>Student Add Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$student->id}}" name="student_id">
                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" value="{{$student->student_name}}" class="form-control" name="student_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" value="{{$student->phone_number}}" class="form-control" name="phone_number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" value="{{$student->email}}" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department Code</label>
                                <select name="dept_id" id="" class="form-control">
                                    <option value="{{$getdept->id}}">{{$getdept->dept_name}}</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->dept_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Section ID</label>
                                <select name="section_id"  id="" class="form-control">
                                    <option value="{{$getsection->id}}">{{$getsection->section_name	}}</option>
                                    @foreach($sections as $section)
                                        <option value="{{$section->id }}">{{$section->section_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Addres</label>
                                <textarea class="form-control" name="addres" cols="10" rows="3">{{$student->addres}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control " name="image">
                                <img src="{{asset($student->image)}}" class="img-fluid" alt="">
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="submit" class="form-control btn btn-outline-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

