@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Department Manage</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>sl</th>
                                <th>Dept Name</th>
                                <th>Dept Code</th>
                                <th>Action</th>
                            </tr>
{{--                            @foreach($dept as $dept)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$dept->id}}</td>--}}
{{--                                    <td>{{$dept->dept_name}}</td>--}}
{{--                                    <td>{{$dept->dept_code}}</td>--}}
{{--                                    <td>Action</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}

                            <tr>
                                <th>1</th>
                                <th>Dept Name</th>
                                <th>Dept Code</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

