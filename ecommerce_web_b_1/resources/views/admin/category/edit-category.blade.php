@extends('admin.master')
@section('title')
    Edit Category
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
                            <form action="{{route('update.category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$categories->id}}" name="cat_id">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class=" mb-3 mb-md-0">
                                            <input class="form-control" value="{{$categories->category_name}}" name="category_name" type="text" placeholder="Enter your Category name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="">
                                            <input class="form-control" name="image" type="file" />
                                            <img src="{{asset($categories->image)}}" alt="" class="h-100 w-50">
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
        </div>


    </main>
@endsection
