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

    <link   href="../../assets/css/custom.css" rel="stylesheet">
    <link href="../../style/other/bootstrap.min.css" rel="stylesheet">
    <link href="../../style/other/animate.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../../style/other/magnific-popup.css" rel="stylesheet">
    <link href="../../style/other/preload.css" rel="stylesheet">
    <link href="../../style/other/aos.css" rel="stylesheet">
    <!-- main css files -->
    <link href="../../style/navbar.css" rel="stylesheet">
    <link href="../../style/style.css" rel="stylesheet">
    <link href="../../style/responsive.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    
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
                <a class="navbar-brand" href="/">
                    @if (Auth::guest())
                <a class="navbar-brand" href="/">
                    <img src="../../images/brand/logo-black.png"  class="logo logo-display" alt="">
                    <img src="../../images/brand/logo-black.png"  class="logo logo-scrolled" alt="">
                </a>
                @else 
                <a class="navbar-brand" href="/user/home">
                    <img src="../../images/brand/logo-black.png"  class="logo logo-display" alt="">
                    <img src="../../images/brand/logo-black.png"  class="logo logo-scrolled" alt="">
                </a>
                @endif
                </a>
            </div>
            <!-- End Header Navigation -->
            <?php
            
            ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="slideOutUp">
                    @if(count($category) > 0)
                    @foreach ($category as $menu)
                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">{{$menu->categoryname}}
                        </a>
                        <ul class="dropdown-menu megamenu-content move-left" role="menu">
                            <li>
                                <div class="row">
                                    @if (count($subcategory) > 0)
                                    @foreach ($subcategory as $submenu)
                                    @if ($submenu->ParentCategory == $menu->categoryname)
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">{{$submenu->subcategoryname}}</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li>
                                                    @foreach ($services as $page)
                                                        @if ($page->subcategory == $submenu->subcategoryname)
                                                <a href="/public/services/{{$page->slug}}">{{$page->servicename}}</a>
                                                        @endif
                                                    @endforeach
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                    @endforeach
                    @endif
                    <li class="dropdown">
                        <a href="index.html#" class="submenu dropdown-toggle active" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                <li>
                                    <a href="/user/dashboard">Open Dashboard</a>
                                </li>
                            </ul>
                    </li>
                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>