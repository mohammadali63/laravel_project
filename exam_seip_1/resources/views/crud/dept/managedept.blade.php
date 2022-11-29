@extends('crud.master')

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
                                <th>Dept Name</th>
                                <th>Dept Code</th>
                                <th>Action</th>
                            </tr>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$department->id}}</td>
                                    <td>{{$department->dept_name}}</td>
                                    <td>{{$department->dept_code}}</td>
                                    <td>
                                        <form action="{{route('delete.dept')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="dept_delete" value="{{$department->id}}">
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
