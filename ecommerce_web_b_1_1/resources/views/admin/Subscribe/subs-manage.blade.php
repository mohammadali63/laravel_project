@extends('admin.master')

@section('title')
    Subscribe
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg my-3">
                    <div class="card-body">
                        <div class="card mb-4 mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Subscribe Manage Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple " class="table table-dark table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Subscriber Name</th>
                                        <th>Status</th>
{{--                                        <th>Action</th>--}}
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


