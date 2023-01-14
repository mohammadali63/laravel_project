@extends('admin.master')

@section('title')
    Order Information
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4 ">
            <div class="card my-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Order Information
                </div>
                <div class="card-body">
                    <h4 class="text-success text-center">{{Session('massage')}}</h4>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Order No</th>
                            <th>Customer Info</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$order->id}}</td>
                                <td>{{$order->Customer->name.'('.$order->customer->mobile.')'}}</td>
                                <td>{{$order->order_total}}TK.</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>
                                    <a href="{{route('admin.order-detail',['id'=>$order->id])}}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{route('admin.order-invoice',['id'=>$order->id])}}" class="btn btn-success btn-sm">Invoice</a>
                                    <a href="{{route('admin.order-delete',['id'=>$order->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure delete this')">Delete</a>
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


