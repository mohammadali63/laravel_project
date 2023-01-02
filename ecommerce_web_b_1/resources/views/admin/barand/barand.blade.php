@extends('admin.master')
@section('title')
    Brands
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Brands</h3>
                            <p class="text-danger">{{@session('massage')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('brand')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class=" mb-3 mb-md-0">
                                            <input class="form-control" name="barand_name" type="text" placeholder="Enter your barand name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="">
                                            <input class="form-control" name="image" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Submit</button></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">All Barand</h3>
                        </div>
                        <div class="card-body">
                            <table class="table  table-bordered table-hover table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($barands as $brand)
                                    <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$brand->barand_name}}</td>
                                        <td>
                                            <img src="{{asset($brand->image)}}" alt="" class="h-100 w-50">
                                        </td>
                                        <td>{{$brand->status == 1 ? 'Active' : 'inActive'}}</td>
                                        <td><a href="{{route('edit.brand',['id'=>$brand->id])}}" class="btn btn-outline-success">Edit</a>
                                            @if($brand->status == 1)
                                                <a href="{{route('brand.status',['id'=>$brand->id])}}" class="btn btn-outline-secondary">Inactive</a>
                                            @else
                                                <a href="{{route('brand.status',['id'=>$brand->id])}}" class="btn btn-outline-warning">Active</a>
                                            @endif
                                            <form action="{{route('brand.delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$brand->id}}" name="brand_id"/>
                                                <button class="btn btn-outline-danger" onclick="return confirm('are you sure delete This')" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection

