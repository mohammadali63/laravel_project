@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <hr/>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('author.save')}}" method="post">
                        @csrf
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Author Form</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Author Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="author_name" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <hr/>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>SL</th>
                            <th>Author Name</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($authors as $author)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$author->author_name}}</td>
                                <td class="d-flex">
                                        <a href="{{route('edit.author',['id'=>$author->id])}}" class="btn btn-outline-primary"><i class="bi bi-pencil-fill"></i></a>

                                        <form action="{{route('delete.author')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="namedelete_id" value="{{$author->id}}">
                                            <button type="submit" onclick="return confirm('Are you sure delete this.......')" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


