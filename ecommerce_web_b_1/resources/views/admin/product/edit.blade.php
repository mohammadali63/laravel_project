@extends('admin.master')
@section('title')
    Edit Product
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card m-3">
                        <div class="card-header">
                            <h1 class="text-center text-warning">
                                Edit Product Form
                            </h1>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-warning py-3">{{session('massage')}}</p>

                            <form action="{{route('product.update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="category_id" required>
                                            <option value="" disabled selected>----select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"{{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
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
                                                <option value="{{$subcategory->id}}" {{$subcategory->id == $product->sub_category_id ? 'selected' : ''}}>{{$subcategory->sub_category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" required name="brand_id">
                                            <option value="" disabled selected>----select product brand</option>
                                            @foreach($brands as $barnd)
                                                <option value="{{$barnd->id}}" {{$barnd->id == $product->brand_id ? 'selected' : ''}}>{{$barnd->barand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">product name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->name}}" class="form-control" name="name" placeholder="Enter your product name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">product code</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->code}}" class="form-control" name="code" placeholder="Enter your product code"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Short Description</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" name="short_description" placeholder="Enter your Description ">{{$product->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">long Description</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control"  name="long_description" placeholder="long_description.....">{{$product->long_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="regular_price" value="{{$product->regular_price}}" placeholder="Enter your regular price"/>
                                        <input type="number" class="form-control" name="selling_price" value="{{$product->selling_price}}" placeholder="Enter your selling price"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Stok Amount</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="stok_amount" value="{{$product->stok_amount}}" placeholder="Enter your s amount"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                        <img src="{{asset($product->image)}}" class="h-50 w-25" alt="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Other Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control " multiple name="other_image[]"/>
                                        @foreach($product->otherImages as $otherImage)
                                        <img src="{{asset($otherImage->image)}}" class="h-50 w-25" alt="">
                                        @endforeach
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-warning px-5" value="Update Product Info" />
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


