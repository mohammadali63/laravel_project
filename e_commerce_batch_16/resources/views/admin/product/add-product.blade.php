@extends('admin.master')
@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                <div class="card-body">
                                    <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="name"  type="text" placeholder="Product Name" />
                                            <label >Product Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="price"  type="text" placeholder="Product Price" />
                                            <label >Product Price</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="category_name"  type="text" placeholder="Category Name" />
                                                    <label >Category Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="barand_name" type="text" placeholder="Brand Name" />
                                                    <label >Brand Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea name="description" class="form-control" placeholder="Brand Name"></textarea>
                                            <label >Description</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" name="image" class="form-control" />
                                        </div>

                                        <div class="mt-3">
                                            <input type="submit" value="submit" class="form-control btn btn-outline-success">
                                        </div>

                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
