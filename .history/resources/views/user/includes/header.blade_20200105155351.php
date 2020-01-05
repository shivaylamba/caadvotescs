<!DOCTYPE HTML>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Ca</title>

    <!-- CSS Style -->
    <link href="style/other/bootstrap.min.css" rel="stylesheet">
    <link href="style/other/animate.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="style/other/magnific-popup.css" rel="stylesheet">
    <link href="style/other/preload.css" rel="stylesheet">
    <link href="style/other/aos.css" rel="stylesheet">
    <!-- main css files -->
    <link href="style/navbar.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/responsive.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader -->

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav no-shadow">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html#brand">
                    <!--img src="./assets/img/brand/logo-black.jpg" class="logo logo-display" alt="">
                    <img src="./assets/img/brand/logo-black.jpg" class="logo logo-scrolled" alt=""-->
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="slideOutUp">
                    
                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">STARTUPS
                        </a>
                             @include('site.includes.megamenu');
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">REGISTRATIONS
                        </a>
                             @include('site.includes.megamenu');
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">COMPLIANCES
                        </a>
                             @include('site.includes.megamenu');
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">BUSSINESS SUPPORT
                        </a>
                             @include('site.includes.megamenu');
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">NRI'S & FOREIGNERS
                        </a>
                             @include('site.includes.megamenu');
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">TRENDING
                        </a>
                             @include('site.includes.megamenu');
                    </li>

                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>