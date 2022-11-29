<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-success" href="{{ route('home') }}">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">student Add Form</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manage.infos') }}">student manage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('section') }}">Section</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('department') }}">Department</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('content')


<script src="{{ asset('asset') }}/js/bootstrap.bundle.js"></script>
</body>
</html>

