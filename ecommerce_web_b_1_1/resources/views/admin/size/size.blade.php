@extends('admin.master')

@section('title')
    Size
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Create Size</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.size')}}" method="post">
                            @csrf
                            <div class=" mb-3">
                                    <input class="form-control" name="size_name" type="text" placeholder="Size Name"  />
                            </div>
                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Submit</button></div>
                            </div>
                        </form>


                        <div class="card mb-4 mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Size Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Size Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sizes as $size)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$size->size_name}}</td>
                                            <td>{{($size->status == 1 ? 'Active' : 'Inactive')}}</td>
                                            <td >
                                                <div class="d-flex">
                                                    <a href="{{route('edit.size',['id'=>$size->id])}}" class="btn btn-info btn-sm me-2">Edit</a>
                                                    <a href="{{route('size.status',[$size->id])}}" class="btn btn-sm {{$size->status == 1 ? 'btn-warning' : 'btn-success'}} me-2">
                                                        {{$size->status == 1 ? 'Inactive' : 'Active'}}
                                                    </a>
                                                    <form action="{{route('size.delete')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="size_id" value="{{$size->id}}">
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure this delete!')">Delete</button>
                                                    </form>
                                                </div>
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
        </div>
    </div>
@endsection
