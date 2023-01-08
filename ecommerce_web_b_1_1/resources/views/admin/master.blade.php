<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/css/styles.css" rel="stylesheet" />

    <!-- Summernote css -->
    <link href="{{asset('adminAsset')}}/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

{{--    Header Section Start--}}
    @include('admin.include.header')
{{--    Header Section End--}}

    <div id="layoutSidenav">

{{--        Left-Sidebar Start--}}
        @include('admin.include.left-sidebar')
{{--        Left-Sidebar End--}}

        <div id="layoutSidenav_content">
{{--            Content Section Start--}}
            <main>
                @yield('content')
            </main>
{{--            Content Section End--}}

{{--            Footer Section Start--}}
            @include('admin.include.footer')
{{--            Footer Section End--}}

        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('adminAsset')}}/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('adminAsset')}}/demo/chart-area-demo.js"></script>
<script src="{{asset('adminAsset')}}/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('adminAsset')}}/js/datatables-simple-demo.js"></script>

<script src="{{asset('adminAsset')}}/js/jquery-3.6.3.min.js"></script>
<!-- Summernote js -->
<script src="{{asset('adminAsset')}}/summernote/summernote-bs4.min.js"></script>

<!-- init js -->
<script src="{{asset('adminAsset')}}/js/form-editor.init.js"></script>



</body>
</html>

