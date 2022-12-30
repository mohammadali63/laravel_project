@extends('admin.master')
@section('title')
    Color
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Color</h3>
                            <p class="text-danger">{{@session('massage')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('save.color')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12 py-3 ">
                                        <div class=" mb-3 mb-md-0">
                                            <input class="form-control shadow-lg" name="color_name" type="text" placeholder="Enter your color_name" />
                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class=" mb-3 mb-md-0">
                                            <input class="form-control shadow-lg" name="color_code" type="text" placeholder="Enter your color_code " />
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
                            <h3 class="text-center font-weight-light my-4">Manage All Color</h3>
                        </div>
                        <div class="card-body">
                            <table class="table  table-bordered table-hover table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Color Name</th>
                                    <th>Color Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($allcolor as $color)
                                    <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$color->color_name}}</td>
                                        <td>{{$color->color_code}}</td>
                                        <td>{{$color->status == 1 ? 'Active' : 'inActive'}}</td>
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



