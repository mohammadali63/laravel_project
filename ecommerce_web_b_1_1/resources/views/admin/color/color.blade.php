@extends('admin.master')

@section('title')
    Color
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Create Color</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.color')}}" method="post" >
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <input class="form-control" name="color_name" type="text" placeholder="Color Name"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <input class="form-control" name="color_code" type="text" placeholder="Color Code"  />                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Submit</button></div>
                            </div>
                        </form>


                        <div class="card mb-4 mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Color Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Color Name</th>
                                        <th>Color Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($colors as $color)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$color->color_name}}</td>
                                            <td>{{$color->color_code}}</td>
                                            <td>{{($color->status == 1 ? 'Active' : 'Inactive')}}</td>
                                            <td >
                                                <div class="d-flex">
                                                    <a href="{{route('edit.color',['id'=>$color->id])}}" class="btn btn-info btn-sm me-2">Edit</a>
                                                    <a href="{{route('color.status',[$color->id])}}" class="btn btn-sm {{$color->status == 1 ? 'btn-warning' : 'btn-success'}} me-2">
                                                        {{$color->status == 1 ? 'Inactive' : 'Active'}}
                                                    </a>
                                                    <form action="{{route('color.delete')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="color_id" value="{{$color->id}}">
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
