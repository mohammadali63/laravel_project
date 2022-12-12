@extends('frontEnd.master')

@section('title')
    User Registraition
@endsection

@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">User Registraition</h1>
                </div>
            </div>


            <div class="form mt-2 col-md-8 m-auto">
                <form action="{{route('user.register')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            <br>
                        </div>
                        <div class="form-group col-md-612">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number" required>
                        <br>
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

