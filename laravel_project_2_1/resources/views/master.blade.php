<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-5 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                                </li><li class="nav-item">
                                    <a class="nav-link active"  href="{{ route('home') }}">Add Blog</a>
                                </li><li class="nav-item">
                                    <a class="nav-link active"  href="{{ route('home') }}">Manage Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@yield('content')
<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
