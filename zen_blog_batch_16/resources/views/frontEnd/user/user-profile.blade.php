@extends('frontEnd.master')

@section('title')
    User Profile
@endsection

@section('content')
    <section>
        <div class="container" >
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="card ">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-5">
                                <img src="{{asset('frontEndasset')}}/assets/img/author.png" alt="" class="h-50 w-25  ">
                            </div>
                            <div class="mb-5 text-center">
                                <h3>{{$user->name}}</h3>
                                <p>User Id:- 00{{$user->id}}</p>
                                <p>Email:- {{$user->email}}</p>
                                <p>Phone:- {{$user->phone}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Chang Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class=" text-center">
                                <form action="{{route('update.user')}}" method="post">
                                    @csrf
                                    <input type="text" name="user_id" class="form-control mb-3" value="{{$user->id}}"  readonly="readonly">
                                    <input type="text" name="name" class="form-control mb-3" placeholder="New Name">
                                    <input type="email" name="email" class="form-control mb-3" placeholder="New Email">
                                    <input type="text" name="phone" class="form-control mb-3" placeholder="New Phone">
                                    <input type="password" name="oldPass" class="form-control mb-3" placeholder="Old Password">
                                    <p class="text-danger">{{session('massage')}}</p>
                                    <input type="password" name="newPass" class="form-control mb-3" placeholder="New Password">
                                    <input type="submit" value="Submit" class="btn btn-info">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



