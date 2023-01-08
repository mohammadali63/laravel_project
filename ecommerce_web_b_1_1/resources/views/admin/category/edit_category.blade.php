@extends('admin.master')

@section('title')
    Edit Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Edit Category</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" name="cat_id" type="hidden" value="{{$category->id}}" />

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <input class="form-control" name="category_name" type="text" value="{{$category->category_name}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="image" type="file" />
                                        </div>
                                        <div class="col-md-3">
                                            <img src="{{asset($category->image)}}" alt="" height="40" width="40">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Submit</button></div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
