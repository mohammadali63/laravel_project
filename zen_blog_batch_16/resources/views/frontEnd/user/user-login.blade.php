@extends('frontEnd.master')

@section('title')
    User Registraition
@endsection

@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">User Login</h1>
                </div>
            </div>


            <div class="form mt-2 col-md-8 m-auto">
                <form action="{{route('user.login')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-612">
                            <input type="text" class="form-control" name="user_name" id="name" placeholder="Your name" required>
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your password" required>
                        <br>
                    </div>


                    <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>
@endsection


