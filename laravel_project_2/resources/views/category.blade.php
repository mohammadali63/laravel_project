@extends('master')

@section('title')
    Category
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Category Add Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="" >
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control"  placeholder="Dept Name">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Category ID</label>
                                <input type="text" name="category_id" class="form-control"  placeholder="Dept Code">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="submit" class="form-control btn btn-outline-success">
                            </div>
                            <div class="mb-3">
                                <a href="" class="btn btn-outline-primary form-control">Mannage Category</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

