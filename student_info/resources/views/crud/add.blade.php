<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Student Information</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{route('new.blog')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your Name.."/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">E-Mail</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email.."/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your Phone Number.."/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <input type="text" name="department" class="form-control" placeholder="Enter your DPT Name:.."/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Addres</label>
                                <textarea name="addres" class="form-control" cols="10" rows="10"></textarea>
                            </div>

                            <div class="mb-3">
                                <input type="submit" name="" class="btn btn-primary form-control" value="submit"/>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
