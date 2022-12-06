@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <hr/>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.category')}}" method="post" name="editForm">
                        @csrf
                        <div class="border p-4 rounded">
                            <input type="hidden" value="{{$categories->id}}" name="category_id">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Category</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$categories->category}}" class="form-control" name="category" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Status</label>
                                <input type="radio" name="status" value="0" />Unpublished
                                <input type="radio" name="status" value="1" />Published
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editForm'].elements['status'].value ="{{$categories->status}}"
    </script>
@endsection

