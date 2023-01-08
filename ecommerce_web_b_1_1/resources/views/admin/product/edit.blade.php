@extends('admin.master')

@section('title')
    Edit Product
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card m-3">
                    <div class="card-header">
                        Edit Product Form
                    </div>
                    <p class="text-center text-success py-2">{{session('massage')}}</p>
                    <div class="card-body">
                        <form action="{{route('product.update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" required name="category_id">
                                        <option value="" disabled selected>-- Select Product Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Sub Category Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" required name="sub_category_id">
                                        <option value="" disabled selected>-- Select Product Sub Category --</option>
                                        @foreach($sub_categories as $subcategory)
                                            <option value="{{$subcategory->id}}" {{$product->sub_category_id == $subcategory->id ? 'selected' : ''}}>{{$subcategory->sub_category_name}}</option>
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
                                            <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$product->name}}"  name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Code</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$product->code}}"   name="code"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Short Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control "  placeholder="Short Description" name="short_description" >{{$product->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Long Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control summernote"  placeholder="Long Description" name="long_description" >{{$product->long_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input  type="number" class="form-control" value="{{$product->regular_price}}"   name="regular_price" />
                                        <input type="number" class="form-control"  value="{{$product->selling_price}}"   name="selling_price" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Stock Amount</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$product->stock_amount}}"    name="stock_amount"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input  type="file" class="form-control" name="image"/>
                                    <img src="{{asset($product->image)}}" alt="" height="80" width="80">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Other Image</label>
                                <div class="col-md-9">
                                    <input  type="file" class="form-control" name="other_image[]" multiple/>
                                    @foreach($product->otherImages as $otherImage)
                                        <img src="{{asset($otherImage->image)}}" alt="" height="80" width="80"/>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success px-5" value="Update Product Info"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


