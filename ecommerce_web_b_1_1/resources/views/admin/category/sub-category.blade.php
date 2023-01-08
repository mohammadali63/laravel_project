@extends('admin.master')

@section('title')
    Subcategory
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Create Subcategory</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('sub.category')}}" method="post" >
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="">
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <input class="form-control" name="sub_category_name" type="text" placeholder="Sub Category Name"  />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Submit</button></div>
                            </div>
                        </form>


                        <div class="card mb-4 mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Category Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subCategory as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->category_name}}</td>
                                            <td>{{$category->sub_category_name}}</td>
                                            <td>{{($category->status == 1 ? 'Active' : 'Inactive')}}</td>
                                            <td >
                                                <div class="d-flex">
                                                    <a href="{{route('edit.subcategory',['id'=>$category->id])}}" class="btn btn-info btn-sm me-2">Edit</a>
                                                    <a href="{{route('sub.Status',[$category->id])}}" class="btn btn-sm {{$category->status == 1 ? 'btn-warning' : 'btn-success'}} me-2">
                                                        {{$category->status == 1 ? 'Inactive' : 'Active'}}
                                                    </a>
                                                    <form action="{{route('sub.delete')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="cat_id" value="{{$category->id}}">
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
