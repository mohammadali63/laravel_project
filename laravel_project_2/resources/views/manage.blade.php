@extends('master')

@section('title')
    Manage Blog
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Manage Blog</h3>
                        <h3 class="text-center text-success">{{session('massage')}}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped">
                            <tr>
                                <th>sl</th>
                                <th>Title</th>
                                <th>Category_id</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog['id'] }}</td>
                                <td>{{$blog['title']}}</td>
                                <td>{{$blog['category_id']}}</td>
                                <td>{{$blog['author']}}</td>
                                <td>{{$blog['description']}}</td>
                                <td>
                                    <img src="{{asset($blog->image)}}" alt="" class="img-fluid h-100 w-100">
                                </td>
                                <td>
                                   {{ $blog['status'] == 1 ? 'Published' : 'Unpublished' }}
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    @if($blog->status == 1)
                                        <a href="{{ route('status', ['id'=>$blog->id])}}" class="btn btn-success">Published</a>
                                    @else
                                        <a href="{{ route('status', ['id'=>$blog->id])}}" class="btn btn-warning">Unpublished</a>
                                    @endif
                                    <form action="{{route('delete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="name_id" value="{{$blog->id}}">
                                        <button type="submit" onclick="return confirm('Are you sure delete this.......')" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
