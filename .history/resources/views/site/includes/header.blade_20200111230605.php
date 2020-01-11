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
            <?php
            
            ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="slideOutUp">
                    @if(count($category) > 0)
                    @foreach ($category as $menu)
                    <li class="dropdown megamenu-fw">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">{{$menu->categoryname}}
                        </a> 
                                          
                        <ul class="dropdown-menu megamenu-content move-left" role="menu">
                            @if (count($subcategory) > 0)
                            @foreach ($subcategory as $submenu)
                            @if ($submenu->ParentCategory == $menu->categoryname)
                            <li>
                                <div class="row">
                                    
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">{{$submenu->subcategoryname}}</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                @foreach ($services as $page)
                                                @if ($page->subcategory == $submenu->subcategoryname)
                                                <li>
                                                    <a href="/post">{{$page->servicename}}</a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <div class="col-menu col-md-3 nav-offer">
                                    <h3><span class="red-color">Great</span> Offer</h3>
                                        <p>Get 75% OFF with one year subcription to all services</p>
                                        <div class="buttons">
                                            <a href="/post" class="btn button btn-sm btn-red radius25">Read More</a>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->
                            </li>
                            @endif
                                @endforeach
                            @endif
                        </ul> 
                                                
                        <ul class="dropdown-menu megamenu-content move-left" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3 nav-offer">
                                        <h3><span class="red-color">Great</span> Offer</h3>
                                        <p>Get 75% OFF with one year subcription to all services</p>
                                        <div class="buttons">
                                            <a href="/post" class="btn button btn-sm btn-red radius25">Read More</a>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                    @endforeach
                    @endif
                    <li class="dropdown">
                        <a href="#" class="submenu dropdown-toggle active" data-toggle="dropdown">Join Us</a>
                        <ul class="dropdown-menu">
                                <li>
                                    <a href="/login">login</a>
                                </li>
                                <li>
                                    <a href="/register">Register</a>
                                </li>
                                <li>
                                    <a href="/associate-reg">Associate Registration</a>
                                </li>
                            </ul>
                    </li>
                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>