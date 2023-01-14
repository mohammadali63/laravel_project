@extends('admin.master')

@section('title')
    Order Detail Page
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4 ">
            <div class="card my-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Order Basic Information
                </div>
                <div class="card-body">
                    <h4 class="text-success text-center">{{Session('massage')}}</h4>
                    <table class="table-bordered table table-hover" >
                        <tr>
                            <th>Order No</th>
                            <th>{{$order->id}}</th>
                        </tr>
                        <tr>
                            <th>Order Date</th>
                            <th>{{$order->order_date}}</th>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <th>{{$order->order_total}} TK.</th>
                        </tr> <tr>
                            <th>Tax Total</th>
                            <th>{{$order->tax_total}} TK.</th>
                        </tr> <tr>
                            <th>Shipping Total</th>
                            <th>{{$order->shipping_total}} TK.</th>
                        </tr>
                        <tr>
                            <th>Customer Info</th>
                            <th>{{$order->Customer->name.'('.$order->customer->mobile.')'}}</th>
                        </tr>
                        <tr>
                            <th>Delivery Address</th>
                            <th>{{$order->delivery_addres}}</th>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <th>{{$order->payment_status}}</th>
                        </tr>
                        <tr>
                            <th>Delivery Status</th>
                            <th>{{$order->delivery_status}}</th>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="card my-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Order Product Information
                </div>
                <div class="card-body">
                    <h4 class="text-success text-center">{{Session('massage')}}</h4>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->orderDetails as $orderDetail)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$orderDetail->product_name}}</td>
                                <td>{{$orderDetail->product_price}} TK.</td>
                                <td>{{$orderDetail->product_quantity}}</td>
                                <td>{{$orderDetail->product_price * $orderDetail->product_quantity}} TK.</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection


