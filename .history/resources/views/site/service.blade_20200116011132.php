
<!DOCTYPE HTML>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Kanina - Multipurpose Business And Digital Agency HTML5 Template</title>

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
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
        <div class="container-fluid">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="blog-post.html#brand">
                    <img src="images/brand/logo-white.png" class="logo logo-display" alt="">
                    <img src="images/brand/logo-black.png" class="logo logo-scrolled" alt="">
                </a>
            </div>
            <!-- End Header Navigation -->
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="button">
                        <a href="blog-post.html#" class="button btn btn-md btn-default btn-outline-dark radius5">
                            <i class="far fa-comments fa-lg"></i>Livechat</a>
                    </li>
                    <li class="side-menu">
                        <a href="blog-post.html#">
                            Slide Menu<i class="fa fa-align-right fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="slideInUp" data-out="slideOutUp">
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
                                                        <a href="accordions.html">{{$page->servicename}}</a>
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

        <!-- Start Side Menu -->
        <div class="side">
            <a href="blog-post.html#" class="close-side">
                <i class="fa fa-times"></i>
            </a>
            <div class="widget">
                <h6 class="title">About Kanina</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ex molestiae molestias voluptatum
                    dignissimos sint porro eveniet cupiditate autem saepe, obcaecati error numquam possimus vel omnis
                    consequatur et. Officiis, quo.</p>
            </div>
            <div class="widget">
                <h6 class="title">Contact Us</h6>
                <ul class="link">
                    <li>
                        <a href="blog-post.html#">Send a ticket</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">LiveChat</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">Get Directions</a>
                    </li>
                    <li>
                        <a href="mailto:hello@youremail.com">Email : hello@youremail.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->


    <!-- header 1 -->
    <div class="header1 blog-post">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-container text-left">
                        <a href="index.html">Home / </a>
                        <a href="blog-post.html#"> Blog Post</a>
                        <h2>Blog Post Example</h2>
                        <p>In a professional context it often happens that private or corporate clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header 1 end -->

    <!-- blog section -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-container">
                        <div class="blog-img">
                            <img src="images/blog-posts/blog-img.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="post-title">
                            <h2>Just a dummy text</h2>
                            <div class="blog-date">
                                <p>Monday / Aug 2019</p>
                            </div>
                        </div>
                        <div class="post-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.Lorem ipsum dolor sit amet
                                consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore
                                magna aliqua uta enim ad minim ven iam quis nostru exercitation ullamco labor nisi ut
                                aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore
                                reprehenderit.</p>
                            <h4 class="blog-quote">"The wise man therefore always holds in these matters"</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.Lorem ipsum dolor sit amet
                                consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et
                                dolore magna aliqua uta enim ad minim ven iam quis nostru exercitation ullamco
                                labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
                                labore dolore reprehenderit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.Lorem ipsum dolor sit amet
                                consectetur adipisicing elit sedc dnmo eiusmod.</p>
                        </div>
                        <div class="post-footer">
                            <p>Share this post:</p>
                            <div class="social-links">
                                <span><a href="blog-post.html#"><i class="fab fa-facebook-f fa-lg"></i></a></span>
                                <span><a href="blog-post.html#"><i class="fab fa-linkedin-in"></i></a></span>
                                <span><a href="blog-post.html#"><i class="fab fa-instagram"></i></a></span>
                                <span><a href="blog-post.html#"><i class="fab fa-twitter"></i></a></span>
                            </div>
                        </div>
                        <div class="message-input">
                            <h4>Let me know about your thoughts</h4>
                            <form action="blog-post.html#" id="comment-id">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Write your comment here" rows="7" id="comment"></textarea>
                                </div>
                                <button class="btn btn-red btn-small" type="submit"> Send Comment </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widgets">
                            <div class="sidebar-title">
                                <h4>About me</h4>
                            </div>
                            <div class="sidebar-media">
                                <img src="images/blog-posts/about-author.jpg" class="img-responsive" alt="">
                                <h4>About the blog Author</h4>
                                <p>Sedc dnmo eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua uta enim ad minim ven iam quis nostru exercitation ullamco
                                    labor nisi ut aliquip exea commodo consequat duis aute.</p>
                                <div class="social-links">
                                    <span><a href="blog-post.html#"><i class="fab fa-facebook-f fa-lg"></i></a></span>
                                    <span><a href="blog-post.html#"><i class="fab fa-linkedin-in"></i></a></span>
                                    <span><a href="blog-post.html#"><i class="fab fa-instagram"></i></a></span>
                                    <span><a href="blog-post.html#"><i class="fab fa-twitter"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="widgets">
                            <div class="sidebar-title">
                                <h4>Latest posts</h4>
                            </div>
                            <div class="post-sidebar">
                                <div class="sidebar-img">
                                    <img src="images/blog-posts/blog.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="text">
                                    <h4><a href="blog-post.html#">The wise man therefore always holds in these</a></h4>
                                    <small>Monday 19:22</small>
                                </div>
                            </div>
                            <div class="post-sidebar">
                                <div class="sidebar-img">
                                    <img src="images/blog-posts/blog.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="text">
                                    <h4><a href="blog-post.html#">The wise man therefore always holds in these</a></h4>
                                    <small>Monday 19:22</small>
                                </div>
                            </div>
                            <div class="post-sidebar">
                                <div class="sidebar-img">
                                    <img src="images/blog-posts/blog.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="text">
                                    <h4><a href="blog-post.html#">The wise man therefore always holds in these</a></h4>
                                    <small>Monday 19:22</small>
                                </div>
                            </div>
                        </div>
                        <div class="widgets">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="technology category">
                                            <a href="blog-post.html#">Technology(11)</a>
                                        </div>
                                        <div class="health category">
                                            <a href="blog-post.html#">Health(23)</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="technology category">
                                            <a href="blog-post.html#">Technology(11)</a>
                                        </div>
                                        <div class="health category">
                                            <a href="blog-post.html#">Health(23)</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="technology category">
                                            <a href="blog-post.html#">Technology(11)</a>
                                        </div>
                                        <div class="health category">
                                            <a href="blog-post.html#">Health(23)</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="technology category">
                                            <a href="blog-post.html#">Technology(11)</a>
                                        </div>
                                        <div class="health category">
                                            <a href="blog-post.html#">Health(23)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widgets  pp-post">
                            <div class="sidebar-title">
                                <h4>Popular Posts</h4>
                            </div>
                            <div class="post-sidebar">
                                <h4><a href="blog-post.html#">The wise man therefore always holds in these</a></h4>
                                <small>Monday 19:22</small>
                            </div>
                            <div class="post-sidebar">
                                <h4><a href="blog-post.html#">The wise man therefore always holds in these</a></h4>
                                <small>Monday 19:22</small>
                            </div>
                            <div class="post-sidebar">
                                <h4><a href="blog-post.html#">The wise man therefore always holds in these</a></h4>
                                <small>Monday 19:22</small>
                            </div>
                        </div>
                        <div class="widgets">
                            <div class="sidebar-title">
                                <h4>Ad Container</h4>
                            </div>
                            <div class="sidebar-media">
                                <img src="images/blog-posts/ad.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ends here -->

    <!-- footer style 1 -->
    <!-- colors -->
    <div class="colors">
        <div class="no-padding container-fluid">
            <span class="col-sm-3 col-xs-3 color1"></span>
            <span class="col-sm-3 col-xs-3 color3"></span>
            <span class="col-sm-3 col-xs-3 color2"></span>
            <span class="col-sm-3 col-xs-3 color4"></span>
        </div>
    </div>
    <!--   colors -->
    <footer class="footer-1">
        <div class="container">
            <div class="row">
                <div class="footer-container">
                    <div class="col-sm-5">
                        <div class="text-container" data-aos="fade-right">
                            <div class="newsletter">
                                <h4>Subscribe to our newsletter</h4>
                                <input type="text" id="mc_email1" class="field-input" name="mc_email" placeholder=" Enter Your Email Address...">
                                <input class="subscribe-btn bgcolor" id="btn_newsletter_1" type="submit" value="Sign Up">
                            </div>
                            <br>
                            <div class="text-container">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis
                                    debitis reprehenderit distinctio quis sed id earum, asperiores vitae eius.
                                    Doloremque facilis hic, deserunt rerum maiores molestiae quod dicta incidunt!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" data-aos="fade-right" data-aos-delay="50">
                        <div class="footer-title">
                            <h4>Services One</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li>
                                    <a href="blog-post.html#">Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Search Optimization</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Web Development</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Video Promotions</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">License Agreement</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2" data-aos="fade-right" data-aos-delay="100">
                        <div class="footer-title">
                            <h4>Services Two</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li>
                                    <a href="blog-post.html#">Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Search Optimization</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Web Development</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Video Promotions</a>
                                </li>
                                <li>
                                    <a href="blog-post.html#">Web Development</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 contacts" data-aos="fade-right" data-aos-delay="150">
                        <div class="footer-title">
                            <h4>Contact Us</h4>
                        </div>
                        <p>United States,Las Vegas</p>
                        <p>Down Town - NS68001</p>
                        <br>
                        <a href="mailto:hello@themekolor.co">Email: hello@themekolor.co</a>
                        <div class="social-links">
                            <a href="blog-post.html#">
                                <i class="fab fa-facebook-f fa-md"></i>
                            </a>
                            <a href="blog-post.html#">
                                <i class="fab fa-twitter fa-md"></i>
                            </a>
                            <a href="blog-post.html#">
                                <i class="fab fa-slack-hash fa-md"></i>
                            </a>
                            <a href="blog-post.html#">
                                <i class="fab fa-linkedin-in fa-md"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container footer-img">
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right">
                        <img src="images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="50">
                        <img src="images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="150">
                        <img src="images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="200">
                        <img src="images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="250">
                        <img src="images/png/envato.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer style 1 -->

    <!-- under footer -->
    <div class="under-footer">
        <div class="container">
            <div class="text-container">
                <ul>
                    <li>
                        <a href="blog-post.html#">About Us</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">Terms Of Use</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">License Agreement</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">FAQ</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- under footer -->

    <!-- START JAVASCRIPT -->
    <script src="javascript/jquery.js"></script>
    <script src="javascript/validator.js"></script>
    <script src="javascript/jquery.mixitup.min.js"></script>
    <script src="javascript/aos.js"></script>
    <script src="javascript/jquery.waypoints.min.js"></script>
    <script src="javascript/jquery.counterup.js"></script>
    <script src="javascript/jquery.magnific-popup.js"></script>
    <script src="javascript/navbar.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
    <!-- JAVASCRIPT END -->

</body>

</html>