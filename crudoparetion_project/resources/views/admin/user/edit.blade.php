@extends('admin.master')

@section('title')
    User Edit
@endsection

@section('content')
    <main class="page-content">
        <div class="card">
            <div class="card-title">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">User Edit Form</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-control">
                                <div class="col-md-4">
                                    <h3>Name</h3>
                                </div>
                                <div class="col-md-8 form-control">
                                    <input type="text" name="name" value="{{$editinfos->name}}" placeholder="Enter Your Name....."/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-control">
                                <div class="col-md-4">
                                    <h3>Email</h3>
                                </div>
                                <div class="col-md-8 form-control">
                                    <input type="email" value="{{$editinfos->email}}" name="email" placeholder="Enter Your email....."/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-control">
                                <div class="col-md-4">
                                    <h3>Image</h3>
                                </div>
                                <div class="col-md-8 form-control">
                                    <input type="file" name="image" placeholder="Enter Your image....."/>
                                    <img src="{{$editinfos->name}}" class="form-control" height="50" width="50"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-control">
                                <div class="col-md-12 center">
                                    <input type="submit" class="btn btn-outline-warning form-control" value="Submit"/>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>





    </main>
@endsection


