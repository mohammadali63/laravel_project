@extends('master')

@section('title')
    Manage Blog
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Manage Blog</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped">
                            <tr>
                                <th>sl</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <th>01</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Description</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
