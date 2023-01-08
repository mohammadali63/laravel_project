@extends('admin.master')

@section('title')
    Edit Subcategory
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3 my-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Edit Sub Category</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.subcategory')}}" method="post" name="editForm" >
                            @csrf
                            <input type="hidden" value="{{$subcategory->id}}" name="subcategory_id">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="">
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
{{--                                                <option value="{{$category->id}} >{{$category->category_name}}</option>--}}
                                                <option value="{{$category->id}} "  {{$category->id == $subcategory->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <input class="form-control" name="sub_category_name" type="text" value="{{$subcategory->sub_category_name}}"  />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Update</button></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        document.forms['editForm'].elements['category_id']. value ={{$subcategory->category_id}};--}}
{{--    </script>--}}
@endsection
