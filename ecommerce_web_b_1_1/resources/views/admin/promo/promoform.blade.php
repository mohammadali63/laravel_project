@extends('admin.master')

@section('title')
    Promo
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Create Promo</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save.promo')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <input class="form-control" name="icontag" type="text" placeholder="promo Icon class name....."  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <input class="form-control" name="text" type="text" placeholder="Pragraph Text....."  />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Submit</button></div>
                            </div>
                        </form>

                        <div class="card mb-4 mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Promo Manage Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple " class="table table-dark table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>I tag Class</th>
                                        <th>Text</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($managePromos as $promo)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$promo->icontag}}</td>
                                            <td>{{$promo->text}}</td>
                                            <td>{{($promo->status == 1 ? 'Active' : 'Inactive')}}</td>
                                            <td >
                                                <div class="d-flex">
                                                    <a href="" class="btn btn-info btn-sm me-2">Edit</a>
                                                        <form action="{{route('promo.delete')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="promo_id" value="{{$promo->id}}">
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure this delete!')">Delete</button>
                                                        </form>
                                                </div>
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
        </div>
    </div>

@endsection

