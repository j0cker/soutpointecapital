<!doctype html>
<html lang="en" ng-app="myApp">
    <head>

        {{-- Meta tags --}}

        {{ Cache::forever('js_version_number', time()) }}

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>SOUTHPOINTE CAPITAL | Financial Advisory</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('css/bootstrap-complement.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/linericon/style.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/font-awesome.min.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/simpleLightbox.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/nice-select.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/animate.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/flaticon/flaticon.css?v='.cache("js_version_number").'') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ url('css/style.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" href="{{ url('css/responsive.css?v='.cache("js_version_number").'') }}">

        <!--Animation Hover -->
        <link rel="stylesheet" href="{{ url('css/hover.css?v='.cache("js_version_number").'') }}">

        <!--AOS Animation Scrolling -->
        <link rel="stylesheet" href="{{ url('css/aos.css?v='.cache("js_version_number").'') }}">

        <!--Loader-->
        <link rel="stylesheet" href="{{ url('css/loader.css?v='.cache("js_version_number").'') }}">

        <!--Toastr-->
        <link rel="stylesheet" type="text/css" href="{{ url('css/toastr.css?v='.cache("js_version_number").'') }}">

        <!-- Slider -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/slider/slick.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/slider/slider.css?v='.cache("js_version_number").'') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/slider/normalize.css?v='.cache("js_version_number").'') }}">

        
        <!-- Menu -->
        <link rel="stylesheet" href="css/menu/menu.css">


    <body style="overflow-x: none;" ng-controller="@yield('controller')">

    <!-- PAGELOADER -->
    <div id="page-loader">
        <div class="page-loader-inner">
                    <div class="loader-logo"><img src="images/logo.png" alt="Logo"/></div>
                    <div class="loader-icon"><span class="spinner"></span><span></span></div>
        </div>
    </div>
    <!-- PAGELOADER -->