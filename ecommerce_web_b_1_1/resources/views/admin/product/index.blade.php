@extends('admin.master')

@section('title')
    Add Product
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card m-3">
                    <div class="card-header">
                        Add Product Form
                    </div>
                    <p class="text-center text-success py-2">{{session('massage')}}</p>
                    <div class="card-body">
                        <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" required name="category_id">
                                        <option value="" disabled selected>-- Select Product Category --</option>
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
                                        <option value="" disabled selected>-- Select Product Sub Category --</option>
                                        @foreach($subCategories as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->sub_category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" required name="brand_id">
                                        <option value="" disabled selected>-- Select Product Brand --</option>

                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Product Name"  name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Code</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Product code"   name="code"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Short Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control "  placeholder="Short Description" name="short_description" ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Long Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control summernote"  placeholder="Long Description" name="long_description"  ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                   <div class="input-group">
                                       <input  type="number" class="form-control"  placeholder="Regular Price"  name="regular_price" />
                                       <input type="number" class="form-control"  placeholder="Selling Price"  name="selling_price" />
                                   </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Stock Amount</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Product Stock Amount"   name="stock_amount"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input  type="file" class="form-control" name="image"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Other Image</label>
                                <div class="col-md-9">
                                    <input  type="file" class="form-control" name="other_image[]" multiple/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success px-5" value="Create New Product"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

