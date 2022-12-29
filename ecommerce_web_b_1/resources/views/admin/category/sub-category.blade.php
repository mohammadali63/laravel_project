@extends('admin.master')
@section('title')
    SubCategory
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create SubCategory</h3>
                            <p class="text-danger">{{@session('massage')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('sub.category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class=" mb-3 mb-md-0">
                                            <select class="form-control" name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)

                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" mb-3 mb-md-0">
                                            <input class="form-control"  name="sub_category_name" type="text" placeholder="Enter your SubCategory name" />
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
                            <h3 class="text-center font-weight-light my-4">All SubCategory</h3>
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
                                @foreach($subCategory as $category)
                                    <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>{{$category->sub_category_name}}</td>
{{--                                        <td>{{$category->status == 1 ? 'Active' : 'inActive'}}</td>--}}
{{--                                        <td><a href="{{route('sub-edit',['id'=>$category->id])}}" class="btn btn-outline-success">Edit</a>--}}
{{--                                            @if($category->status == 1)--}}
{{--                                                <a href="{{route('sub-status',['id'=>$category->id])}}" class="btn btn-outline-success">Inactive</a>--}}
{{--                                            @else--}}
{{--                                                <a href="{{route('sub-status',['id'=>$category->id])}}" class="btn btn-outline-success">Active</a>--}}
{{--                                            @endif--}}
{{--                                            <form action="{{route('subCategory-delete')}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                <input type="hidden" value="{{$category->id}}" name="cat_id"/>--}}
{{--                                                <button class="btn btn-outline-danger" onclick="return confirm('are you sure delete This')" type="submit">Delete</button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
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

