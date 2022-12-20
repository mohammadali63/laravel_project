@extends('admin.master')
@section('title')
    Manage Product
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h1 class="text-center">Manage Product</h1>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>category_name</th>
                                <th>barand_name</th>
                                <th>price</th>
                                <th>description</th>
                                <th>image</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @php $i=1  @endphp
                            <tbody>
                            @foreach($Products as $Product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{substr($Product->name,0,20)}}</td>
                                    <td>{{$Product->category_name}}</td>
                                    <td>{{$Product->barand_name}}</td>
                                    <td>৳{{$Product->price}}</td>
                                    <td>{{substr($Product->description,0,25)}}</td>
                                    <td>
                                        <img src="{{asset($Product->image)}}" width="100">
                                    </td>
                                    <td>{{$Product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('edit.product',['id'=>$Product->id])}}" class="btn btn-outline-success btn-sm">Edit</a>
                                        @if($Product->status == 1)
                                        <a href="{{route('status.product',['id'=>$Product->id])}}" class="btn btn-outline-warning btn-sm">Published</a>
                                        @else
                                        <a href="{{route('status.product',['id'=>$Product->id])}}" class="btn btn-outline-danger btn-sm">Unpublished</a>
                                        @endif
                                        <form action="{{route('product.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$Product->id}}">
                                            <button class="btn btn-outline-warning" onclick="return confirm('are you sure delete This')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
