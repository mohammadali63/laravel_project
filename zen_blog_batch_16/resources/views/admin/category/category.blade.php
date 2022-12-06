@extends('admin.master')
<div class="row">
    <div class="col-xl-9 mx-auto">
        <hr/>
        <div class="card">
            <div class="card-body">
               <form action="{{route('category.create')}}" method="post">
                   @csrf
                   <div class="border p-4 rounded">
                       <div class="card-title d-flex align-items-center">
                           <h5 class="mb-0">Add Category</h5>
                       </div>
                       <hr/>
                       <div class="row mb-3">
                           <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" name="category" id="inputEnterYourName" placeholder="Enter Your Name">
                           </div>
                       </div>
                       <div class="row mb-3">
                           <label class="form-label">Status</label>
                           <input type="radio" name="status" value="0" />Unpublished
                           <input type="radio" name="status" value="1" />Published
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
                           <th>Category Name</th>
                           <th>Status</th>
                           <th>Action</th>
                       </tr>
                       @php $i=1 @endphp
                       @foreach($categories as $category)
                       <tr>
                           <td>{{$i++}}</td>
                           <td>{{$category->category}}</td>
                           <td>
                               {{$category->status ==1 ? 'published' : 'unpublished'}}
                           </td>
                           <td>
                               <a href="" class="btn btn-outline-primary">Edit</a>
                           </td>
                       </tr>
                       @endforeach
                   </table>
            </div>
        </div>
    </div>
</div>

