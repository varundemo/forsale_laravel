<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Real State-Smart Phone</title>
    <!--------main css------->
    <link type="text/css" rel="stylesheet" href="{{ url('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('css/result.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="shortcut icon" type="image/png" href="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/fsbw.running-0001.png/:/rs=h:274/qt=q:95" />


    <!--------bootstrap  css------------->
    <link type="text/css" rel="stylesheet" href="{{ url('bootstrap-css/bootstrap.min.css') }}">
    <!-----bootstrap fontawesome----->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!---this is google font-->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;900&display=swap" rel="stylesheet">

    <!--this is font awesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css">

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        /* external css: flickity.css */

            * { box-sizing: border-box; }

            body { font-family: sans-serif; }

            .carousel {
              background: #EEE;
            }

            .carousel img {
              display: block;
              height: 200px;
            }

            @media screen and ( min-width: 768px ) {
              .carousel img {
                height: 400px;
              }
            }
            .dot{
                display: none !important;
            }
            .mapshow,.detshow{
                display: none;
            }
    </style>
</head>
<body>
<!--------------header------------------------>
<!---preloader---->



<!-end preloader-->

<nav style="z-index: 6000" class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
       <!--  <a class="navbar-brand" href="/"><img class="orthohin" id="larver" src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/fsbw.running-0001.png/:/rs=h:274/qt=q:95" alt=""></a> -->

        <!-- Toggler/collapsibe Button -->
        <button id="brandon" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul id="faisu_kutta" class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!-- <a class="nav-link" href="index.html">SEARCH</a> -->
                    <a class="nav-link" href="{{ URL::to('/') }}">SEARCH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('buy') }}">BUY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/sell') }}">SELL</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="virtual_a.html">VIRTUAL AGENT</a> -->
                    <a class="nav-link" href="{{ URL::to('/find-agent') }}">VIRTUAL AGENT</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="virtual_gur.html">VIRTUAL GUARANTEE</a> -->
                    <a class="nav-link" href="{{ URL::to('/why-12-days') }}">VIRTUAL GUARANTEE</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        LEARN-MORE
                    </a>
                    <div id="ziri_b" class="dropdown-menu">
                        <a class="dropdown-item" href="{{ URL::to('/faqs') }}">FAQs</a>
                        <a class="dropdown-item" href="{{ URL::to('/articles-knowledge') }}">Articles</a>
                        <a class="dropdown-item" href="{{ URL::to('/our-secret') }}">Our Secret</a>
                        <a class="dropdown-item" href="{{ URL::to('/about-us') }}">About Us</a>
                        <a class="dropdown-item" href="{{ URL::to('/agent-partners') }}">Agent Partners</a>
                        <a class="dropdown-item" href="{{ URL::to('/login') }}">Client Portal</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fas fa-user"></i>
                    </a>
                    <div  id="ziri_b" class="dropdown-menu">
                        <a class="dropdown-item" href="{{ URL::to('/login') }}">SIGN IN</a>
                        <a class="dropdown-item" href="{{ URL::to('/register') }}">CREATE ACCOUNT</a>
                        @if(isset(Auth::user()->role))
                            @if(Auth::user()->role == 'client')
                        <a class="dropdown-item" href="{{ URL::to('/client/view-bookings') }}">BOOKINGS</a>
                            @endif
                        @endif
                        <a class="dropdown-item" href="{{ URL::to('/login') }}">MY ACCOUNT</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
