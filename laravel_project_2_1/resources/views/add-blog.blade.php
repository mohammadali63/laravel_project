@extends('master')

@section('title')
    Add Blog
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h1>Add Blog Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method=""  >
                            @csrf
                            <div class="mt-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Your Title....."/>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select A Category</option>
                                    <option value="1">Sports</option>
                                    <option value="2">Fashion</option>
                                    <option value="3">Education</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Author</label>
                                <input type="text" name="author" class="form-control" placeholder="Enter Your Title....."/>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" cols="38"  placeholder="Enter Your Title....."></textarea>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" />
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Status</label>
                                <input type="radio" name="status" value="0" />Unpublished
                                <input type="radio" name="status" value="1" />Published
                            </div>
                            <div class="mt-3">
                                <input type="submit" value="submit" class="form-control btn btn-outline-success">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

