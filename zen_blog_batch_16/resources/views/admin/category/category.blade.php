@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <hr/>
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('category.create')}}" id="catForm" method="post">
                        @csrf
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Category</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category" id="categoryName" placeholder="Enter Your Name">
                                    <span id="errorMessage" class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button id="catBtn" type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <hr/>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->category}}</td>
                                <td>
                                    {{$category->status ==1 ? 'published' : 'unpublished'}}
                                </td>
                                <td>
                                    <a href="{{route('edit.category',['id'=>$category->id])}}" class="btn btn-outline-primary"><i class="bi bi-pencil-fill"></i></a>

                                    <form action="{{route('delete.category')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="namedelete_id" value="{{$category->id}}">
                                        <button type="submit" onclick="return confirm('Are you sure delete this.......')" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

