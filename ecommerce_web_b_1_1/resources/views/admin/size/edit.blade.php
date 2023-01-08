@extends('admin.master')

@section('title')
    Edit Size
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Edit Size</h3>
                        <p class="text-center text-success">{{session('massage')}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.size')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$size->id}}" name="size_id">
                            <div class=" mb-3">
                                <input class="form-control" name="size_name" type="text" value="{{$size->size_name}}" />
                            </div>
                            <div class="mt-2 mb-0 mb-5">
                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" >Submit</button></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

