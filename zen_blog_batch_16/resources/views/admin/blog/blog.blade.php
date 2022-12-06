{{--@extends('admin.master')--}}
{{--@section('content')--}}
{{--    <div class="row">--}}
{{--        <div class="col-xl-9 mx-auto">--}}
{{--            <hr/>--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{route('new.blog')}}" method="post" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="border p-4 rounded">--}}
{{--                            <div class="card-title d-flex align-items-center">--}}
{{--                                <h5 class="mb-0">Category Form</h5>--}}
{{--                            </div>--}}
{{--                            <hr/>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <select name="category_id" class="form-control">--}}
{{--                                        @foreach($categories as $category)--}}
{{--                                        <option value="{{$category->id}}">{{$category->category}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Author</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <select name="author_id" class="form-control">--}}
{{--                                        @foreach($authors as $author)--}}
{{--                                        <option value="{{$author->id}}">{{$author->author_name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Title</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="text" class="form-control" name="title" id="inputEnterYourName" placeholder="Enter Your Name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Slug</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="text" class="form-control" name="slug" id="inputEnterYourName" placeholder="Enter Your Name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Description</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <textarea class="form-control" name="description" placeholder="description"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Image</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="file" class="form-control" name="image" id="inputEnterYourName" placeholder="Enter Your Name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Date</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="date" class="form-control" name="date" >--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Blog Type</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <select  class="form-control" name="blog_type" id="" >--}}
{{--                                        <option value="populer">Populer</option>--}}
{{--                                        <option value="trending">Trending</option>--}}
{{--                                        <option value="letest">Letest</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-3">--}}
{{--                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status</label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="radio" value="1"  name="status">Pulish &nbsp;--}}
{{--                                    <input type="radio" value="2" name="status">Unpublish--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <label class="col-sm-3 col-form-label"></label>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <button type="submit" class="btn btn-primary px-5">Submit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="col-xl-9 mx-auto">--}}
{{--            <hr/>--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <table class="table table-striped table-bordered table-hover">--}}
{{--                        <tr>--}}
{{--                            <th>SL</th>--}}
{{--                            <th>Author Name</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        @php $i=1 @endphp--}}
{{--                        @foreach($authors as $author)--}}
{{--                            <tr>--}}
{{--                                <td>{{$i++}}</td>--}}
{{--                                <td>{{$author->author_name}}</td>--}}
{{--                                <td class="d-flex">--}}
{{--                                    <a href="{{route('edit.author',['id'=>$author->id])}}" class="btn btn-outline-primary"><i class="bi bi-pencil-fill"></i></a>--}}

{{--                                    <form action="{{route('delete.author')}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <input type="hidden" name="namedelete_id" value="{{$author->id}}">--}}
{{--                                        <button type="submit" onclick="return confirm('Are you sure delete this.......')" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}

{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
