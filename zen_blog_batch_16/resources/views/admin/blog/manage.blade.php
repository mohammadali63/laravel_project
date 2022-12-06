@extends('admin.master')

@section('content')
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="text-center">Manage Blog</h1>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
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
                            </tr>
                            @php $i=1 @endphp
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$blog->category_id}}</td>
                                    <td>{{$blog->author_id}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->slug}}</td>
                                    <td>{{substr($blog->description,0,100)}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" width="100" alt="">
                                    </td>
                                    <td>{{$blog->date}}</td>
                                    <td>{{$blog->blog_type}}</td>
                                    <td>{{$blog->status ==1 ? 'published' : 'unpublished'}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
