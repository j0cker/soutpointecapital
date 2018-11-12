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

        <style>
            .logo {
                width: 200px;
                overflow: hidden;
                padding-top: 6px;
            }
            
            @media (min-width: 992px) {
                .logo {
                width: 250px;
                overflow: hidden;
                }
            }

            .titles {
                margin-top: 100px !important;
            }
            
            @media (min-width: 992px) {
                .titles {
                    margin-top: 325px !important;
                }
            }

            .layer_transparent {
                background: rgba(255,255,255,.5); 
                width: auto; 
                height: 700px;
            }

            @media (min-width: 1100px) {
                .layer_transparent {
                    background: rgba(255,255,255,.5); 
                    width: auto; 
                    height: 100vh;
                }
            }

            .cards_columns {
                display: inline-block; 
                width: 300px; 
                height: 100%; 
                box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);
            }

            @media (min-width: 991px) {
                .cards_columns {
                    display: inline-block; 
                    width: 300px; 
                    height: 550px; 
                    box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);
                }
            }
        </style>


    <body style="overflow-x: none;" ng-controller="@yield('controller')">

    <!-- PAGELOADER -->
    <div id="page-loader">
        <div class="page-loader-inner">
                    <div class="loader-logo"><img src="images/logo.png" alt="Logo"/></div>
                    <div class="loader-icon"><span class="spinner"></span><span></span></div>
        </div>
    </div>
    <!-- PAGELOADER -->