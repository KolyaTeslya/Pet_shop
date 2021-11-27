<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../../public/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/css/animate.css">
    <link rel="stylesheet" href="../../../public/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../../public/css/themify-icons.css">
    <link rel="stylesheet" href="../../../public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../public/css/slick.css">
    <link rel="stylesheet" href="../../../public/css/meanmenu.min.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/responsive.css">

</head>
@yield('styles')

<body>

@include('layouts.header')




@yield('content')

@include('layouts.footer')
<script src="../../../public/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="../../../public/js/vendor/jquery-1.12.0.min.js"></script>
<script src="../../../public/js/popper.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/jquery.counterup.min.js"></script>
<script src="../../../public/js/waypoints.min.js"></script>
<script src="../../../public/js/elevetezoom.js"></script>
<script src="../../../public/js/ajax-mail.js"></script>
<script src="../../../public/js/owl.carousel.min.js"></script>
<script src="../../../public/js/plugins.js"></script>
<script src="../../../public/js/main.js"></script>

</body>
@yield('scripts')

</html>
