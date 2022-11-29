@extends('crud.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Section Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save.section')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered table-striped table-hover">
                                <div class="mb-3">
                                    <label class="form-label">Section Name</label>
                                    <input type="text" class="form-control" name="section_name" placeholder="Enter Your Section Name.....">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn btn-outline-primary">
                                </div>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
