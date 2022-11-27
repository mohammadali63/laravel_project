@extends('crud.master')

@section('cotent')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h1>Student Add Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save.info')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" class="form-control" name="student_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department ID</label>
                                <select name="dept_id" id="" class="form-control">
                                    <option>department id</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Section ID</label>
                                <select name="section_id" id="" class="form-control">
                                    <option>section id</option>
                                    @foreach($sections as $section)
                                        <option value="{{$section->id }}">{{$section->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Addres</label>
                                <textarea class="form-control" name="addres" cols="10" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
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
