@extends('admin.master')
@section('title')
    Add Product
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card m-3">
                        <div class="card-header">
                            Add Product Form
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success py-3">{{session('massage')}}</p>

                            <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="category_id" required>
                                            <option value="" disabled selected>----select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Sub Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" required name="sub_category_id">
                                            <option value="" disabled selected>----select Sub Category</option>
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->sub_category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" required name="brand_id">
                                            <option value="" disabled selected>----select product brand</option>
                                            @foreach($barnds as $barnd)
                                                <option value="{{$barnd->id}}">{{$barnd->barand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">product name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Enter your product name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">product code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="code" placeholder="Enter your product code"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Short Description</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="short_description" placeholder="Enter your Description "/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">long Description</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control " name="long_description" placeholder="long_description.....">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="regular_price" placeholder="Enter your regular price"/>
                                        <input type="number" class="form-control" name="selling_price" placeholder="Enter your selling price"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Stok Amount</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="stok_amount" placeholder="Enter your s amount"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Other Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control " multiple name="other_image[]"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success px-5" value="Create New Product" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection

