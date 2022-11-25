@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Student Add Form</h3>
                        <h6 class="text-danger">{{ session('message') }}</h6>
                    </div>

                    <div class="card-body">
                        <form action="" method="">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Student Name</label>
                                <input type="text" name="student_name" class="form-control"  placeholder="Student Name">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Phone</label>
                                <input type="text" name="student_phone" class="form-control"  placeholder="Student Phone">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Email</label>
                                <input type="email" name="student_email" class="form-control"  placeholder="Student Email">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Department</label>
                                <select name="dept_id" id="" class="form-control">
                                        <option value=""></option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Address</label>
                                <textarea class="form-control" name="address" rows="3"></textarea>
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
