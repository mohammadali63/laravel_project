@extends('admin.master')

@section('title')
    Brand
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Create Barnd</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new.brand')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <input class="form-control" name="brand_name" type="text" placeholder="Brand Name"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <input class="form-control" name="image" type="file" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Create New Brand</button></div>
                            </div>
                        </form>


                        <div class="card mb-4 mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Brand Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Brand Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brands as $brand)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$brand->brand_name}}</td>
                                            <td><img src="{{$brand->image}}" alt="" height="40" width="40"></td>
                                            <td>{{($brand->status == 1 ? 'Active' : 'Inactive')}}</td>
                                            <td >
                                                <div class="d-flex">
                                                    <a href="{{route('edit.brand',['id'=>$brand->id])}}" class="btn btn-info btn-sm me-2">Edit</a>
                                                    <a href="{{route('brand.status',[$brand->id])}}" class="btn btn-sm {{$brand->status == 1 ? 'btn-warning' : 'btn-success'}} me-2">
                                                        {{$brand->status == 1 ? 'Inactive' : 'Active'}}
                                                    </a>
                                                    <form action="{{route('brand.delete')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="brand_id" value="{{$brand->id}}">
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
