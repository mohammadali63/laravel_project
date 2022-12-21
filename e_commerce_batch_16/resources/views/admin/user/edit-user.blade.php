@extends('admin.master')

@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update User</h3></div>
                                <div class="card-body">
                                    <form action="{{route('update.user')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="{{$users->name}}" name="name"  type="text" placeholder="Name"/>
                                            <input value="{{$users->id}}" name="user_id"  type="hidden" />
                                            <label >User Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="{{$users->email}}" name="email"  type="email" readonly  />
                                            <label >email</label>
                                        </div>
                                        @if(Auth::user()->id == $users->id )
                                        <div class="form-floating mb-3">
                                            <input class="form-control"  name="password"  type="password" placeholder="password" />
                                            <label >Password</label>
                                        </div>
                                        @endif
                                        <div class="mt-3">
                                            <input type="submit" value="submit" class="form-control btn btn-outline-success">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection


