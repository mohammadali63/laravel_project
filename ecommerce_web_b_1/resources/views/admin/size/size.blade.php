@extends('admin.master')
@section('title')
    Size
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Size</h3>
                            <p class="text-danger">{{@session('massage')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('save.size')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class=" mb-3 mb-md-0">
                                            <input class="form-control" name="size_name" type="text" placeholder="Enter your Size name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" class="btn btn-outline-warning btn-block">Submit</button></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Manage All Size</h3>
                        </div>
                        <div class="card-body">
                            <table class="table  table-bordered table-hover table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Size Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($allsize as $size)
                                    <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$size->size_name}}</td>
                                        <td>{{$size->status == 1 ? 'Active' : 'inActive'}}</td>
                                        <td>
                                            <a href="{{route('size.edit',['id'=>$size->id])}}" class="btn btn-outline-success">Edit</a>
                                            @if($size->status == 1)
                                                <a href="{{route('status',['id'=>$size->id])}}" class="btn btn-outline-secondary">Inactive</a>
                                            @else
                                                <a href="{{route('status',['id'=>$size->id])}}" class="btn btn-outline-warning">Active</a>
                                            @endif
                                            <form action="{{route('delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$size->id}}" name="size_id"/>
                                                <button class="btn btn-outline-danger" onclick="return confirm('are you sure delete This')" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection


