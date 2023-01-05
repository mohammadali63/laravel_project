@extends('admin.master')
@section('title')
    Manage Product
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">

            <div class="card my-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Product Information
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Selling Price</th>
                            <th>Sstatus</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->category_name}}</td>
                            <td><img src="{{asset($product->image)}}" class="h-25 w-25" alt=""></td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->status==1 ? 'Published' : 'Unpulished'}}</td>
                            <td>
                                <a href="{{route('product.detail',['id'=>$product->id])}}" class="btn btn-outline-warning">Detail</a>
                                <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-outline-success">Edit</a>
                                <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are You Sure Delete This')">Delete</a>
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


