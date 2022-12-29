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
                            <form action="{{route('update.subcategory')}}" name="editForm" method="post" >
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
                                            <input class="form-control"  name="sub_category_name" type="text" value="{{$subcategories->sub_category_name}}" />
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
        </div>


    </main>

    <script >
        document.forms['editForm'].elements['category_id'].value ={{$subcategories->category_id}};
    </script>
@endsection

