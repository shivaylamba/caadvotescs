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
    <style>
        /* Flyin modal bottom right corner of Screen */
​

#flyin .flyinbutton {
-webkit-transition: top .5s ease,opacity .5s ease,background-color .5s ease;
transition: top .5s ease,opacity .5s ease,background-color .5s ease;
width: 300px;
height: 20px;
top: 400px;
opacity: 0;
position: absolute;
left: 10px;
z-index: 5;
display: block;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border: none;
color: #FFF;
font-size: 16px;
font-family: 'Goudy Bookletter 1911',arial,sans-serif;
background: #55A753;
padding: 11px 0 10px;
text-align: center;
cursor: pointer;
}

#flyin h3 {
-webkit-transition: opacity .5s ease;
transition: opacity .5s ease;
font-family: 'Goudy Bookletter 1911',arial,sans-serif;
font-size: 22px;
line-height: 24px;
margin-bottom: 150px;
}

#flyin #exit_emailinput {
-webkit-transition: opacity .5s;
transition: opacity .5s;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
margin: 0 0 10px;
width: 220px;
background: #F8FAFA;
padding: 11px 20px;
border: 1px solid #E4E9E9;
color: #B3B3B3;
font-size: 13px;
}

#flyin #flying_subscribe {
-webkit-transition: opacity .5s ease,background-color .5s ease;
transition: opacity .5s ease,background-color .5s ease;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border: none;
width: 100%;
color: #FFF;
font-size: 16px;
font-family: 'Goudy Bookletter 1911',arial,sans-serif;
background: #55A753;
padding: 11px 0 10px;
text-align: center;
cursor: pointer;
}

#flyin #flying_subscribe:hover, #flyin .flyinbutton:hover {
background-color: #408C3F;
}

#flyin .flyinclose {
-webkit-transition: -webkit-transform .5s ease .2s,opacity .5s ease,top .5s ease .2s;
transition: transform .5s ease .2s,opacity .5s ease,top .5s ease .2s;
content: '';
display: block;
z-index: 2;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
cursor: pointer;
width: 30px;
height: 30px;
border-radius: 30px;
margin: 0;
padding: 0;
background: #FFF url(//i.imgur.com/Wawv1TE.png) no-repeat center center;
position: absolute;
top: -5px;
left: -5px;
}

#flyin .present_top {
-webkit-transition: all .5s ease .5s;
transition: all .5s ease .5s;
width: 100px;
height: 42px;
margin-left: -50px;
top: 114px;
background-image: url(//i.imgur.com/0mINhyp.png);
}

#flyin .free,
#flyin .present_bottom,
#flyin .present_top {
display: block;
position: absolute;
left: 50%;
}

#flyin .present_bottom {
width: 108px;
height: 74px;
margin-left: -54px;
top: 182px;
background-image: url(//i.imgur.com/fJf80DK.png);
}

#flyin .free {
-webkit-transition: all .5s ease 1s;
transition: all .5s ease 1s;
width: 175px;
height: 82px;
margin-left: -87px;
top: 133px;
background-image: url(//i.imgur.com/AA5yGoS.png);
}
​
#flyin,
.flyin{
z-index: 100;
border-radius: 10px 0 0;
-moz-border-radius: 10px 0 0;
-webkit-border-radius: 10px 0 0;
background: #FFF url(//i.imgur.com/xm0v1wJ.png) no-repeat;
background-position: 0 127px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
width: 260px;
padding: 30px;
position: fixed;
bottom: 0;
right: 0;
-webkit-backface-visibility: visible!important;
-ms-backface-visibility: visible!important;
backface-visibility: visible!important;
-webkit-animation: flipInY 1s cubic-bezier(0.77,0,.175,1);
-moz-animation: flipInY 1s cubic-bezier(0.77,0,.175,1);
-o-animation: flipInY 1s cubic-bezier(0.77,0,.175,1);
animation: flipInY 1s cubic-bezier(0.77,0,.175,1);
-webkit-transition: bottom .5s ease,background-position .5s ease;
transition: bottom .5s ease,background-position .5s ease;
}



#exitpopup div {
background: url(//i.imgur.com/JXC67u9.jpg) no-repeat 60px 340px;
padding: 0 60px 60px 300px;
box-shadow: 0 0 60px rgba(0, 0, 0, 0.2);
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
background-color: #FFF;
text-align: left;
width: 420px;
position: fixed;
z-index: 9999999;
top: 50%;
left: 50%;
margin-left: -390px;
margin-top: -203px;
-webkit-animation: swing 1s 1 cubic-bezier(0.77,0,.175,1);
-moz-animation: swing 1s 1 cubic-bezier(0.77,0,.175,1);
-o-animation: swing 1s 1 cubic-bezier(0.77,0,.175,1);
animation: swing 1s 1 cubic-bezier(0.77,0,.175,1);
-webkit-transform-origin: top center;
-ms-transform-origin: top center;
transform-origin: top center;
}

#exitpopup h3 {
line-height: 36px;
padding: 0;
margin: 60px 0 20px;
color: #454545;
font-family: 'Goudy Bookletter 1911',arial,sans-serif;
font-size: 36px;
}

#exitpopup form {
padding: 0;
margin: 0;
}

#exit_emailinput {
margin: 40px 0 20px;
width: 380px;
background: #F8FAFA;
padding: 20px;
border: 1px solid #E4E9E9;
color: #B3B3B3;
font-size: 16px;
}

#exit_subscribe {
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border: none;
width: 420px;
color: #FFF;
font-size: 28px;
font-family: 'Goudy Bookletter 1911',arial,sans-serif;
background: #55A753;
padding: 10px 0;
text-align: center;
cursor: pointer;
}

#exitpopup div:after {
background-image: url(//i.imgur.com/tHI1nzD.png);
}

#exitpopup div:after {
display: block;
content: "";
background-image: url(//i.imgur.com/58baWk3.png);
width: 318px;
height: 318px;
position: absolute;
left: -50px;
top: -50px;
}

​


#exitpopup .closex {
display: block;
cursor: pointer;
width: 19px;
height: 19px;
margin: 0;
padding: 0;
background-repeat: no-repeat;
background-image: url(//i.imgur.com/Wawv1TE.png);
position: absolute;
top: 20px;
right: 20px;
}


#exitpopup:after {
content: "";
background-color: rgba(0, 0, 0, 0.2);
top: 0;
left: 0;
width: 100%;
height: 100%;
position: fixed;
z-index: 999999;
}
​

​

    </style>
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
                    Home
                    <!--img src="./assets/img/brand/logo-black.jpg" class="logo logo-display" alt="">
                    <img src="./assets/img/brand/logo-black.jpg" class="logo logo-scrolled" alt=""-->
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
                        <a  class="submenu dropdown-toggle active" data-toggle="dropdown">Join Us</a>
                        <ul class="dropdown-menu">
                                <li>
                                    <a href="/login">login</a>
                                </li>
                                <li>
                                    <a href="/register">Register</a>
                                </li>
                                <li class="dropdown">
                                    <a  class="submenu dropdown-toggle" data-toggle="dropdown">Associate</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('associate.register') }}">Register</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('associate.login') }}">Login</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>