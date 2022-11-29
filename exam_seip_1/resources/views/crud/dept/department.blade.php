@extends('crud.master')

@section('title')
    Department
@endsection

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="text-center">Department Add Form</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('save.dept')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label  class="form-label">Dept Name</label>
                                    <input type="text" name="dept_name" class="form-control"  placeholder="Dept Name">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Dept Code</label>
                                    <input type="text" name="dept_code" class="form-control"  placeholder="Dept Code">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" value="submit" class="form-control btn btn-outline-success">
                                </div>
                                <div class="mb-3">
                                    <a href="{{route('manage.dept')}}" class="btn btn-outline-primary form-control">Mannage Department</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
