<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontEndasset')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('frontEndasset')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontEndasset')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontEndasset')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('frontEndasset')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{asset('frontEndasset')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('frontEndasset')}}/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{asset('frontEndasset')}}/assets/css/variables.css" rel="stylesheet">
    <link href="{{asset('frontEndasset')}}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: ZenBlog - v1.2.1
* Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
    * Author: BootstrapMade.com
* License: https:///bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
@include('frontEnd.include.header')

<main id="main">

    <!-- ======= Hero Slider Section ======= -->
   @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontEnd.include.footer')

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('frontEndasset')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontEndasset')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('frontEndasset')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('frontEndasset')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('frontEndasset')}}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontEndasset')}}/assets/js/main.js"></script>

</body>

</html>

