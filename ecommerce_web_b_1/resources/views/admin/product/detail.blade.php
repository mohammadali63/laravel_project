@extends('admin.master')
@section('title')
    Product Details
@endsection

@section('content')
    <main>
        <section class="mt-3 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Product Detail</div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <tr>
                                        <th>Category Name</th>
                                        <td>{{$product->category->category_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sub Category Name</th>
                                        <td>{{$product->subCategory->sub_category_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Brand Name</th>
                                        <td>{{$product->brand->barand_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <td>{{$product->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product longdescription</th>
                                        <td>{!! $product->long_description !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <td>{{$product->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product other Image</th>
                                        <td>
                                        @foreach($product->otherImages as $otherImage)
                                                <img src="{{asset($otherImage->image)}}" alt="" class="h-25 w-25">
                                        @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

