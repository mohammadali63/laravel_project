@extends('admin.master')
@section('title')
    Manage User
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h1 class="text-center">Manage User</h1>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @php $i=1  @endphp
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{route('edit.user',['id'=>$user->id])}}" class="btn btn-outline-success btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

