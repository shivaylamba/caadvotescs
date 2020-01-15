
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Service List -->

    <!-- main css files -->
    <link href="style/navbar.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/responsive.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        .desktop-bkg
          {
            background: url(https://www.support.ezeestartup.com/productImage/service/Banner-PVT-temp-20190821055027-9.jpg) no-repeat  top;
              }
          @media screen and (max-width: 580px) {
            .desktop-bkg
          {
            background:url(https://www.support.ezeestartup.com/productImage/service/Banner-PVT-MOB-20190824121326-9.jpg) no-repeat  top;
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
@include('site.includes.header')


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
                        </div>
                        <div class="post-title">
                            <h2>Private Limited Registration</h2>
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
                <div class="col-lg-4">
                </div>
            </div>
            <div class="bootstrap">
            <div class="pro-con-holder" >
                <div class="row">
                 <div class="ser-pro-heading">
                     <h3>Choose your best suitable professional</h3>
                 </div>
                  <div class="col-md-3" >
                      <button id="toggle-button"><img src="images/filter-results-button.svg"> <span>Refine Results</span></button>
                      <p class="compare-btn-mob service-compare-btn"></p>
                      <div class="clearfix"></div>
                     <div class="side-filter" id='filters'>
                      <div class="target">
                      <h3>Price Range</h3>
                      <div class="price-range-box">
                        <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;font-size:12px;margin-left:30px;" value='₹1999 - ₹6999' readonly>
                          <div id="slider-container"></div>
                                        
                          <div id="slider-range"></div>
                        </div>
                      <h3>Location</h3>
                      <ul class="sidebar-filter filter-attributes">
                           <li>
                                <label class="custom-control material-checkbox">
                                <input type="checkbox" class="material-control-input" name='state' id='Haryana' value='Haryana'>
                                <span class="material-control-indicator"></span> <span class="material-control-description">Haryana</span> </label>
                            </li>
                            <li>
                                <label class="custom-control material-checkbox">
                                <input type="checkbox" class="material-control-input" name='state' id='Uttar Pradesh' value='Uttar Pradesh'>
                                <span class="material-control-indicator"></span> <span class="material-control-description">Uttar Pradesh</span> </label>
                            </li>
                            <li>
                                <label class="custom-control material-checkbox">
                                <input type="checkbox" class="material-control-input" name='state' id='Delhi' value='Delhi'>
                                <span class="material-control-indicator"></span> <span class="material-control-description">Delhi</span> </label>
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
                    <div class="row" id="products-div" data-service='83'>
                      <div class="top-filter">
                        <div class="float-left service-compare-btn"></div>
                      </div>
                      <div id='product-hide' style="display:none;"></div>
                      <div class="col-md-4 grid-products" data-state='Delhi' data-experience='2 to 5 Year' data-rating='4' data-price="5500">
                        <div class="grid-products-list ">
                            <div class="NameHighlights">
                                <figure class="card-product">
                                    <div class="on-hover-effect">
                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-14-20190814124232-45.jpg">
                                            <h5 class="hidden-lg">View Details</h5>
                                        </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">ESI Return Filings</h4>
                                            <p class="desc">PRAMOD KUMAR&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                                            <div class="rating-wrap">
                                                <ul class="rating-stars">
                                                    <li style="width:100%" class="stars-active">
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
                                                <div class="label-rating">4 <span>(Review 10)</span></div>
                                            </div>
                                        </figcaption>
                                        <div class="after-hover"></div>
                                    </div>
                    
                                    <div class="on-mouse-hover-popup tooltip-even arrow_box">
                                        <h3>Requirements</h3>
                                        <ul>
                                            <li>ESI Website Login Credentials</li>
                                            <li>Salary Data with ESI Contribution in specified format</li>
                    
                                        </ul>
                                        <a class="pop-orange-text" href="esi-return-filings/pramod-kumar-139.html">Read more</a>
                                        <h4>Deliverables</h4>
                                        <ul>
                                            <li>Acknowledgment of ESI Return filings</li>
                                            <li>Free Consultancy</li>
                                        </ul>
                                        <a class="blue-text" href="esi-return-filings/pramod-kumar-139.html">Read more </a>
                                        <div class="clearfix"></div>
                                        <a href="javascript:void(0)" rel='242' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                        <a class="wishlist " rel="242" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <div class="tool-tipfooter"> <a href="pramod-kumar/139.html">know more about professional</a> </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="clearfix"></div>
                    
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <em>&nbsp;</em>
                                    <div class="clearfix"></div>
                                    <span class="price-new">₹5500</span>
                                    <div class="clearfix"></div>
                                    <p class="offer-note">&nbsp;</p>
                    
                                </div>
                            </div>
                    
                            <div class="bottom-wrap">
                                <a href="javascript:void(0)" rel='242' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='242'>Add to Compare</a>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-4 grid-products" data-price="2500" data-state='Haryana' data-experience='11 to 15 Year' data-rating='5' data-price="2500">
                        <div class="grid-products-list ">
                            <div class="NameHighlights">
                                <figure class="card-product">
                                    <div class="on-hover-effect">
                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-14-20190814124232-45.jpg">
                                            <h5 class="hidden-lg">View Details</h5>
                                        </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">ESI Return Filings</h4>
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
                                            <li>ESI Website Login Credentials</li>
                                            <li>Salary Data with ESI Contribution in specified format</li>
                    
                                        </ul>
                                        <a class="pop-orange-text" href="esi-return-filings/pramod-kumar-139.html">Read more</a>
                                        <h4>Deliverables</h4>
                                        <ul>
                                            <li>Acknowledgment of ESI Return filings</li>
                                            <li>Free Consultancy</li>
                                        </ul>
                                        <a class="blue-text" href="esi-return-filings/pramod-kumar-139.html">Read more </a>
                                        <div class="clearfix"></div>
                                        <a href="javascript:void(0)" rel='242' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                        <a class="wishlist " rel="242" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <div class="tool-tipfooter"> <a href="pramod-kumar/139.html">know more about professional</a> </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="clearfix"></div>
                    
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <em>&nbsp;</em>
                                    <div class="clearfix"></div>
                                    <span class="price-new">₹2500</span>
                                    <div class="clearfix"></div>
                                    <p class="offer-note">&nbsp;</p>
                    
                                </div>
                            </div>
                    
                            <div class="bottom-wrap">
                                <a href="javascript:void(0)" rel='242' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='242'>Add to Compare</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-products" data-price="2500" data-state='Haryana' data-experience='11 to 15 Year' data-rating='5' data-price="2500">
                        <div class="grid-products-list ">
                            <div class="NameHighlights">
                                <figure class="card-product">
                                    <div class="on-hover-effect">
                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-14-20190814124232-45.jpg">
                                            <h5 class="hidden-lg">View Details</h5>
                                        </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">ESI Return Filings</h4>
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
                                            <li>ESI Website Login Credentials</li>
                                            <li>Salary Data with ESI Contribution in specified format</li>
                    
                                        </ul>
                                        <a class="pop-orange-text" href="esi-return-filings/pramod-kumar-139.html">Read more</a>
                                        <h4>Deliverables</h4>
                                        <ul>
                                            <li>Acknowledgment of ESI Return filings</li>
                                            <li>Free Consultancy</li>
                                        </ul>
                                        <a class="blue-text" href="esi-return-filings/pramod-kumar-139.html">Read more </a>
                                        <div class="clearfix"></div>
                                        <a href="javascript:void(0)" rel='242' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                        <a class="wishlist " rel="242" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <div class="tool-tipfooter"> <a href="pramod-kumar/139.html">know more about professional</a> </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="clearfix"></div>
                    
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <em>&nbsp;</em>
                                    <div class="clearfix"></div>
                                    <span class="price-new">₹2500</span>
                                    <div class="clearfix"></div>
                                    <p class="offer-note">&nbsp;</p>
                    
                                </div>
                            </div>
                    
                            <div class="bottom-wrap">
                                <a href="javascript:void(0)" rel='242' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='242'>Add to Compare</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-products" data-price="2500" data-state='Uttar Pradesh' data-experience='11 to 15 Year' data-rating='5' data-price="2500">
                        <div class="grid-products-list ">
                            <div class="NameHighlights">
                                <figure class="card-product">
                                    <div class="on-hover-effect">
                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-14-20190814124232-45.jpg">
                                            <h5 class="hidden-lg">View Details</h5>
                                        </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">ESI Return Filings</h4>
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
                                            <li>ESI Website Login Credentials</li>
                                            <li>Salary Data with ESI Contribution in specified format</li>
                    
                                        </ul>
                                        <a class="pop-orange-text" href="esi-return-filings/pramod-kumar-139.html">Read more</a>
                                        <h4>Deliverables</h4>
                                        <ul>
                                            <li>Acknowledgment of ESI Return filings</li>
                                            <li>Free Consultancy</li>
                                        </ul>
                                        <a class="blue-text" href="esi-return-filings/pramod-kumar-139.html">Read more </a>
                                        <div class="clearfix"></div>
                                        <a href="javascript:void(0)" rel='242' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                        <a class="wishlist " rel="242" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <div class="tool-tipfooter"> <a href="pramod-kumar/139.html">know more about professional</a> </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="clearfix"></div>
                    
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <em>&nbsp;</em>
                                    <div class="clearfix"></div>
                                    <span class="price-new">₹2500</span>
                                    <div class="clearfix"></div>
                                    <p class="offer-note">&nbsp;</p>
                    
                                </div>
                            </div>
                    
                            <div class="bottom-wrap">
                                <a href="javascript:void(0)" rel='242' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='242'>Add to Compare</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-products" data-price="2500" data-state='Uttar Pradesh' data-experience='11 to 15 Year' data-rating='5' data-price="2500">
                        <div class="grid-products-list ">
                            <div class="NameHighlights">
                                <figure class="card-product">
                                    <div class="on-hover-effect">
                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-14-20190814124232-45.jpg">
                                            <h5 class="hidden-lg">View Details</h5>
                                        </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">ESI Return Filings</h4>
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
                                            <li>ESI Website Login Credentials</li>
                                            <li>Salary Data with ESI Contribution in specified format</li>
                    
                                        </ul>
                                        <a class="pop-orange-text" href="esi-return-filings/pramod-kumar-139.html">Read more</a>
                                        <h4>Deliverables</h4>
                                        <ul>
                                            <li>Acknowledgment of ESI Return filings</li>
                                            <li>Free Consultancy</li>
                                        </ul>
                                        <a class="blue-text" href="esi-return-filings/pramod-kumar-139.html">Read more </a>
                                        <div class="clearfix"></div>
                                        <a href="javascript:void(0)" rel='242' data-action='addtocart' class="addtocart-btn service-addtocart">Add to cart</a>
                                        <a class="wishlist " rel="242" data-action='addtowishlist' href="login.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <div class="tool-tipfooter"> <a href="pramod-kumar/139.html">know more about professional</a> </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="clearfix"></div>
                    
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <em>&nbsp;</em>
                                    <div class="clearfix"></div>
                                    <span class="price-new">₹2500</span>
                                    <div class="clearfix"></div>
                                    <p class="offer-note">&nbsp;</p>
                    
                                </div>
                            </div>
                    
                            <div class="bottom-wrap">
                                <a href="javascript:void(0)" rel='242' data-action='addtocart' class="buynow-btn service-buynow">Buy Now</a>
                                <a href="javascript:void(0)" class="compare-button service-compare" data-associate-service='242'>Add to Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
                         
                    <input type='hidden' value='3' id='product_div_count'/>
                    <!-- row.// --> 
                    
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>
    <div class="basic-modal-content" id="popup-data"></div>
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
        $(function() {
                            
            $('#slider-container').slider({
                range: true,
                min: 1999,
                max: 6999,
                values: [1999, 6999],
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
                $("#product-hide").html("");
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
            background: url(https://www.support.ezeestartup.com/productImage/service/Banner-PVT-temp-20190821055027-9.jpg) no-repeat  top;
              }
          @media screen and (max-width: 580px) {
            .desktop-bkg
          {
            background:url(https://www.support.ezeestartup.com/productImage/service/Banner-PVT-MOB-20190824121326-9.jpg) no-repeat  top;
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
  
    @include('site.includes.footer')