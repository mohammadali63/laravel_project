@extends('frontEnd.master')

@section('title')
    Checkout
@endsection
@section('content')

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header"><h2 class="text-center">Checkout Form</h2></div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-4">Full Name</div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Email</div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Mobile Number</div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Delivary Address</div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3" name="delivery_address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Payment Method</div>
                                    <div class="col-md-8">
                                        <label><input type="radio" value="1" checked >Cash on Delivey</label>
                                        <label><input type="radio" value="2">Online</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success px-5" value="conform">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header"><h4 class="text-center">My Cart Summery</h4></div>
                        <div class="card-body">
                            <div class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product Info</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
{{--                                @foreach($cart_products as $cart_product)--}}
{{--                                <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$cart_product->name}}</td>--}}
{{--                                        <td>{{$cart_product->price}}</td>--}}
{{--                                        <td>{{$cart_product->quantity}}</td>--}}
{{--                                        <td>{{$cart_product->total_price}}</td>--}}
{{--                                    </tr>--}}
{{--                                </tbody>--}}
{{--                                @endforeach--}}
                                <tbody>
                                    <tr>
                                        <td>Product Info</td>
                                        <td>Unit Price</td>
                                        <td>Quantity</td>
                                        <td>Total Price</td>
                                    </tr>
                                </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
