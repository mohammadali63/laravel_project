@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h1 class="text-center">Manage Blog</h1>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>category_id</th>
                                <th>author_id</th>
                                <th>title</th>
                                <th>slug</th>
                                <th>description</th>
                                <th>image</th>
                                <th>date</th>
                                <th>blog_type</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$blog->category_id}}</td>
                                    <td>{{$blog->author_id}}</td>
                                    <td>{{substr($blog->title,0,15)}}</td>
                                    <td>{{substr($blog->slug,0,10)}}</td>
                                    <td>{{substr($blog->description,0,10)}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" width="100" alt="">
                                    </td>
                                    <td>{{$blog->date}}</td>
                                    <td>{{$blog->blog_type}}</td>
                                    <td>{{$blog->status ==1 ? 'published' : 'unpublished'}}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-success">Edit</a>

                                        @if($blog->status == 1)
                                        <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-outline-success">Published</a>
                                        @else
                                        <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-outline-info">Unpublished</a>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
