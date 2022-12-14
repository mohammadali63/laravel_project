@extends('admin.master')
@section('title')
    Category
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Category</h3>
                            <p class="text-danger">{{@session('massage')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class=" mb-3 mb-md-0">
                                            <input class="form-control" name="category_name" type="text" placeholder="Enter your Category name" />
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
                            <h3 class="text-center font-weight-light my-4">All Category</h3>
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
                                @foreach($categories as $category)
                                <tbody>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        <img src="{{asset($category->image)}}" alt="" class="h-100 w-50">
                                    </td>
                                    <td>{{$category->status == 1 ? 'Active' : 'inActive'}}</td>
                                    <td><a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-outline-success">Edit</a>
                                    @if($category->status == 1)
                                    <a href="{{route('cat.status',['id'=>$category->id])}}" class="btn btn-outline-secondary">Inactive</a>
                                    @else
                                    <a href="{{route('cat.status',['id'=>$category->id])}}" class="btn btn-outline-warning">Active</a>
                                    @endif
                                        <form action="{{route('cat.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$category->id}}" name="cat_delete"/>
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
