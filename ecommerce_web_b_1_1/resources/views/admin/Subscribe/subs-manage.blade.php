@extends('admin.master')

@section('title')
    Subscribe
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-body">
                        <div class="card mb-4 mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Subscribe Manage Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple " class="table table-dark table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Subscriber Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subscribes as $subscribe)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$subscribe->subsemail}}</td>
                                            <td>{{($subscribe->status == 1 ? 'Active' : 'Inactive')}}</td>
                                            <td >
                                                <div class="d-flex">
                                                    <a href="" class="btn btn-info btn-sm me-2">Edit</a>
                                                    <form action="" method="post">
                                                        @csrf
                                                        <input type="hidden" name="promo_id" value="{{$subscribe->id}}">
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


