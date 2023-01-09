@extends('frontEnd.master')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 ">
                    <div class="card">
                        <div class="card-header"><h4 class="text-center">Checkout Form</h4></div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Email Adderess</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Mobile Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Delivery Address</label>
                                    <div class="col-md-8">
                                       <textarea class="form-control" rows="5" name="delivery_address"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4">Payment Method</label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="payment_method" checked value="1">Cash On Delivery</label>
                                        <label><input type="radio" name="payment_method" value="2">Online Payment</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success px-5" value="Confirm Order">
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
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Info</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sum=0)
                                @foreach($cart_products as $cart_product)
                                <tr>
                                    <td>{{$cart_product->name}}</td>
                                    <td>{{$cart_product->price}}TK.</td>
                                    <td>{{$cart_product->quantity}}</td>
                                    <td>{{$cart_product->price*$cart_product->quantity}}TK.</td>
                                </tr>
                                    @php($sum = $sum + ($cart_product->price * $cart_product->quantity))
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="3">Sub Total</th>
                                    <td>{{$sum}}TK.</td>
                                </tr>
                                <tr>
                                    <th colspan="3">Tax Amaunt</th>
                                    <td>{{$tax = ($sum * 15)/100}}TK.</td>
                                </tr>
                                <tr>
                                    <th colspan="3">Shiping Cost</th>
                                    <td>{{$shipingCost = 100}}TK.</td>
                                </tr>
                                <tr>
                                    <th colspan="3">Total Payable</th>
                                    <td>{{$sum= $sum+$tax+$shipingCost}}TK.</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
