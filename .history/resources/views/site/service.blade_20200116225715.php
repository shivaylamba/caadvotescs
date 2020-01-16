<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/elegant-fonts.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/combo.select.css">
<link rel="stylesheet" href="css/style.css">
@include('site.includes.header');

    <!-- header 1 -->
    <div class="header1 blog-post">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-container text-left">
                        <a href="index.html">Home / </a>
                        <a href="blog-post.html#"> Blog Post</a>
                        <h2>{{$serviceContent[0]->servicename}}</h2>
                    <p>{{$serviceContent[0]->subcategory}}</p>
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
                        </div>
                        <!--div class="post-title">
                            <h2>Just a dummy text</h2>
                            <div class="blog-date">
                                <p>Monday / Aug 2019</p>
                            </div>
                        </div-->
                        <div class="post-text">
                            <P>{!! $serviceContent[0]->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro-con-holder">
            <div class="row">
                <div class="ser-pro-heading">
                    <h3>Choose your best suitable professional</h3>
                </div>
                <div class="col-md-3">
                    <button id="toggle-button"><img src="images/filter-results-button.svg"> <span>Refine Results</span></button>
                    <p class="compare-btn-mob service-compare-btn"></p>
                    <div class="clearfix"></div>
                    <div class="side-filter" id='filters'>
                        <div class="target">
                            <h3>Price Range</h3>
                            <div class="price-range-box">
                                <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;font-size:12px;margin-left:30px;" value='₹1999 - ₹9999' readonly>
                                <div id="slider-container"></div>
       
                                <div id="slider-range"></div>
                            </div>
                            <h3>Location</h3>
                            <ul class="sidebar-filter filter-attributes">
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='state' id='Delhi' value='Delhi'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">Delhi</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='state' id='Uttar Pradesh' value='Uttar Pradesh'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">Uttar Pradesh</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='state' id='Maharashtra' value='Maharashtra'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">Maharashtra</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='state' id='Haryana' value='Haryana'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">Haryana</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='state' id='Karnataka' value='Karnataka'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">Karnataka</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='state' id='Madhya Pradesh' value='Madhya Pradesh'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">Madhya Pradesh</span> </label>
                                </li>
       
                            </ul>
                            <h3>Rating</h3>
                            <ul class="sidebar-filter filter-attributes">
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='rating' id='2' value='2'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">2 Star</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='rating' id='3' value='3'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">3 Star</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='rating' id='4' value='4'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">4 Star</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='rating' id='5' value='5'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">5 Star</span> </label>
                                </li>
                            </ul>
                            <h3>Experience </h3>
                            <ul class="sidebar-filter filter-attributes">
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='experience' id='Upto 1 Year' value='Upto 1 Year'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">Upto 1 Year</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='experience' id='2 to 5 Year' value='2 to 5 Year'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">2 to 5 Year</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='experience' id='6 to 10 Year' value='6 to 10 Year'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">6 to 10 Year</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='experience' id='11 to 15 Year' value='11 to 15 Year'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">11 to 15 Year</span> </label>
                                </li>
                                <li>
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" class="material-control-input" name='experience' id='More than 15 Year' value='More than 15 Year'>
                                        <span class="material-control-indicator"></span> <span class="material-control-description">More than 15 Year</span> </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row" id="products-div" data-service='14'>
                        <div class="top-filter">
                            <div class="float-left service-compare-btn"></div>
                        </div>
                        <div id='product-hide' style="display:none;"></div>
                        <div class="col-md-4 grid-products" data-price="2999" data-state='Maharashtra' data-experience='2 to 5 Year' data-rating='4' data-price="2999">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-21-20190824034642-38.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">ROHIT KHANDELWAL&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 2)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup  arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/rohit-khandelwal-132.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/rohit-khandelwal-132.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='406' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="406" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="rohit-khandelwal/132.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹2999</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='406' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='406'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="2999" data-state='Karnataka' data-experience='2 to 5 Year' data-rating='4' data-price="2999">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-10-20190814125723-41.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">RAGINI AGGARWAL&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 5)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup tooltip-even arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/ragini-aggarwal-135.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/ragini-aggarwal-135.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='262' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="262" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="ragini-aggarwal/135.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹2999</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='262' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='262'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="3000" data-state='Uttar Pradesh' data-experience='Upto 1 Year' data-rating='4' data-price="3000">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-2-20190814013000-23.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">SUNITA BHARGAVA&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 4)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup  arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/sunita-bhargava-117.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/sunita-bhargava-117.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='446' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="446" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="sunita-bhargava/117.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹3000</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='446' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='446'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="3500" data-state='Haryana' data-experience='2 to 5 Year' data-rating='4' data-price="3500">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-15-20190814123909-44.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">KARISHMA CHAUHAN&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 0)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup tooltip-even arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/karishma-chauhan-138.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/karishma-chauhan-138.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='167' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="167" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="karishma-chauhan/138.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹3500</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='167' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='167'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="3500" data-state='Delhi' data-experience='Upto 1 Year' data-rating='5' data-price="3500">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-12-20190814125035-13.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">AMAN KESARWANI&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:100%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">5 <span>(Review 1)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup  arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/aman-kesarwani-107.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/aman-kesarwani-107.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='21' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="21" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="aman-kesarwani/107.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹3500</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='21' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='21'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="3800" data-state='Uttar Pradesh' data-experience='11 to 15 Year' data-rating='5' data-price="3800">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-14-20190814124232-45.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">PRAMOD KUMAR&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:100%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">5 <span>(Review 0)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup tooltip-even arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/pramod-kumar-139.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Digital Signature for 2 Partners</li>
                                                <li> 1- RUN Web Name Approval</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/pramod-kumar-139.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='166' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="166" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="pramod-kumar/139.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹3800</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='166' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='166'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="3999" data-state='Delhi' data-experience='2 to 5 Year' data-rating='4' data-price="3999">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-7-20190814011912-32.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">SHOBHIT TANDON&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 0)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup  arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/shobhit-tandon-126.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/shobhit-tandon-126.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='482' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="482" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="shobhit-tandon/126.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹3999</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='482' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='482'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="3999" data-state='Delhi' data-experience='Upto 1 Year' data-rating='4.33' data-price="3999">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-3-20190814012833-12.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">PARWEZ&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4.33 <span>(Review 6)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup tooltip-even arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/parwez-106.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/parwez-106.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='142' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="142" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="parwez/106.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹3999</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='142' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='142'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="4000" data-state='Delhi' data-experience='2 to 5 Year' data-rating='4' data-price="4000">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-22-20190829034833-30.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">HARISH CHAUDHARY&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 0)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup  arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/harish-chaudhary-124.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/harish-chaudhary-124.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='303' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="303" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="harish-chaudhary/124.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹4000</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='303' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='303'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="4500" data-state='Uttar Pradesh' data-experience='Upto 1 Year' data-rating='4' data-price="4500">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">DIVYANSH JAISWAL&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 4)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup  arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>Partner(s) PAN Card</li>
                                                <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/divyansh-jaiswal-116.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/divyansh-jaiswal-116.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='97' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="97" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="divyansh-jaiswal/116.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹4500</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='97' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='97'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-products" data-price="4500" data-state='Madhya Pradesh' data-experience='2 to 5 Year' data-rating='4' data-price="4500">
                            <div class="grid-products-list ">
                                <div class="NameHighlights">
                                    <figure class="card-product">
                                        <div class="on-hover-effect">
                                            <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-11-20190814125546-24.jpg">
                                                <h5 class="hidden-lg">View Details</h5>
                                            </div>
                                            <figcaption class="info-wrap">
                                                <h4 class="title">LLPRegistration </h4>
                                                <p class="desc">POONAM GOLHANI&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                                <div class="rating-wrap">
                                                    <ul class="rating-stars">
                                                        <li style="width:80%" class="stars-active">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="label-rating">4 <span>(Review 4)</span></div>
                                                </div>
                                            </figcaption>
                                            <div class="after-hover"></div>
                                        </div>
       
                                        <div class="on-mouse-hover-popup tooltip-even arrow_box">
                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>mobile no and email id of all partners </li>
                                                <li>Partner(s) PAN Card</li>
       
                                            </ul>
                                            <a class="pop-orange-text" href="llpregistration/poonam-golhani-118.html">Read more</a>
                                            <h4>Deliverables</h4>
                                            <ul>
                                                <li>Incorporation Certificate</li>
                                                <li>LLP Agreement</li>
                                            </ul>
                                            <a class="blue-text" href="llpregistration/poonam-golhani-118.html">Read more </a>
                                            <div class="clearfix"></div>
                                            <a href="javascript:void(0)" rel='577' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                            <a class="wishlist " rel="577" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <div class="tool-tipfooter"> <a href="poonam-golhani/118.html">know more about professional</a> </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="clearfix"></div>
       
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <em>&nbsp;</em>
                                        <div class="clearfix"></div>
                                        <span class="price-new">₹4500</span>
                                        <div class="clearfix"></div>
                                        <p class="offer-note">&nbsp;</p>
       
                                    </div>
                                </div>
       
                                <div class="bottom-wrap">
                                    <a href="javascript:void(0)" rel='577' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                    <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='577'>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type='hidden' value='11' id='product_div_count' />
                    <!-- row.// -->
       
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- blog section ends here -->
   
    <div class="basic-modal-content" id="popup-data"></div>
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/basic.css">
    <script type="text/javascript" src="js/jquery.simplemodal.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    
    
    <script src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.collapsible.min.js"></script> 
    <script type="text/javascript" src="js/swiper.min.js"></script> 
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script> 
    <script type="text/javascript" src="js/circle-progress.min.js"></script> 
    <script type="text/javascript" src="js/jquery.countTo.min.js"></script> 
    <script type="text/javascript" src="js/jquery.barfiller.js"></script> 
    
    <script type="text/javascript" src="js/custom.js"></script>
    
    <script src="js/enquiry.js"></script>
    <script src="js/jquery.combo.select.js"></script>
    <script type="text/javascript" src="js/service.js"></script>
    <script>    
       $(document).ready(function () {  
         $("#populer-services").owlCarousel({
            pagination : false,
            margin: 10,
            loop: true,
            responsive: {
              0: {
                items: 1,
                  nav: true,
                  stagePadding: 50,
              },
              600: {
                items: 2,
                  nav: true,
                  stagePadding: 50,
              },
              1000: {
                items: 4,
                  nav: true,
                 
              }
            }
         });
         $("#owl-buzz").owlCarousel({
            pagination : false,
            margin: 20,
            loop: true,
            responsive: {
              0: {
                items: 1,
                  nav: true,
                  stagePadding: 50,
              },
              600: {
                items: 2,
                  nav: true,
                  stagePadding: 50,
              },
              1000: {
                items: 3,
                  nav: true,
              }
            }
         });
           $("#owl-demo3").owlCarousel({
            pagination : true,
            autoHeight:true,
            margin: 10,
            loop: true,
            responsive: {
              0: {
                items: 1,
                  nav: true
              },
              600: {
                items: 1,
                  nav: true
              },
              1000: {
                items: 1,
                  nav: true,
              }
            }
         });
    });
        </script> 
    
    
    
    <script>
        $(function() {
                            
            $('#slider-container').slider({
                range: true,
                min: 1999,
                max: 9999,
                values: [1999, 9999],
                slide: function(event, ui) {
                    $( "#amount" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
                    var mi = ui.values[ 0 ];
                    var mx = ui.values[ 1 ];
                    filterSystem(mi, mx);
                }
            });
            setTimeout(function(){
                var p_1 = $("#slider-range").slider("values", 0);
                var p_2 = $("#slider-range").slider("values",1);		
                $("#amount").val( "₹" + p_1 +" - ₹" + p_2 );
            },200);
        });
    
        function filterSystem(minPrice, maxPrice) {		
            $("#products-div div.grid-products").hide().filter(function() {			
                var price = parseInt($(this).data("price"), 10);			
                return price >= minPrice && price <= maxPrice;
            }).show();
            var count_div = $('div.grid-products:hidden').length;
            var product_div = $("#product_div_count").val();
            if(count_div==product_div){
                $("#product-hide").html("No results found. Kindly modify your search to find best suitable professional.");
                $("#product-hide").show();
            }else{
                $("#product-hide").html("");
                $("#product-hide").hide();
            }
            $("input[name='state']").prop('checked', false);
            $("input[name='rating']").prop('checked', false);
            $("input[name='experience']").prop('checked', false);
        }    
    </script>
    <script src="js/jquery.morelines.js"></script> 
    <script defer src="js/product_filter_level2.js"></script>
    <script>
        $(function() {
          $('.js-description_readmore').moreLines({
            linecount: 15, 
            baseclass: 'b-description',
            basejsclass: 'js-description',
            classspecific: '_readmore',    
            buttontxtmore: "<i class='fa fa-chevron-down' aria-hidden='true'></i>",               
            buttontxtless: "<i class='fa fa-chevron-up' aria-hidden='true'></i>",
            animationspeed: 250 
          });
        });
      </script>
      <script>
          document.getElementById('toggle-button').addEventListener('click', function () {
            toggle(document.querySelectorAll('.target'));
          });
        
        function toggle (elements, specifiedDisplay) {
          var element, index;
        
          elements = elements.length ? elements : [elements];
          for (index = 0; index < elements.length; index++) {
            element = elements[index];
        
            if (isElementHidden(element)) {
              element.style.display = '';
        
              // If the element is still hidden after removing the inline display
              if (isElementHidden(element)) {
                element.style.display = specifiedDisplay || 'block';
              }
            } else {
              element.style.display = 'none';
            }
          }
          function isElementHidden (element) {
            return window.getComputedStyle(element, null).getPropertyValue('display') === 'none';
          }
        }
      </script>
     
      <style>
        .desktop-bkg
          {
            background: url(https://www.support.ezeestartup.com/productImage/service/Banner-LLP-20190829093220-14.jpg) no-repeat  top;
              }
          @media screen and (max-width: 580px) {
            .desktop-bkg
          {
            background:url(https://www.support.ezeestartup.com/productImage/service/Banner-LLP-MOB-20190829093220-14.jpg) no-repeat  top;
            background-repeat: no-repeat;
            background-size: contain;
              }  
          }
          #slider-container
        {
            width:150px;
            margin-left:0;
        }
        .ui-slider .ui-slider-range {
            background: #e66c00;
        }
        </style>

   @include('site.includes.footer');