@extends('admin.master')

@section('title')
    Manage Product
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4 ">
            <div class="card my-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Product Information
                </div>
                <div class="card-body">
                    <h4 class="text-success text-center">{{Session('massage')}}</h4>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Selling Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->category_name}}</td>
                                <td><img src="{{asset($product->image)}}" alt="" height="40" width="40"/></td>
                                <td> {{number_format($product->selling_price) }}</td>
                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('product.detail',['id'=>$product->id])}}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure delete this')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

