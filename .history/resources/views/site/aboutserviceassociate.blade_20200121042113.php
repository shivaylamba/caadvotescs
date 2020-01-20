
<link rel="stylesheet" href="../../css/font-awesome.min.css">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/elegant-fonts.css">
<link rel="stylesheet" href="../../css/themify-icons.css">
<link rel="stylesheet" href="../../css/swiper.min.css">
<link rel="stylesheet" href="../../css/owl.carousel.min.css">
<link rel="stylesheet" href="../../css/animate.min.css">
<link rel="stylesheet" href="../../css/combo.select.css">
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/style-beta.css">

<script charset="UTF-8" src="https://cdn.sendpulse.com/js/push/a82558b88f6c1657388ba45cf316e9c3_1.js" async></script>

<link href="../../style/other/aos.css" rel="stylesheet">
<!-- main css files -->
<link href="../../style/navbar.css" rel="stylesheet">
<style>
/*------------- Form ---------------*/

.nb-form {
    position: fixed;
    z-index: 9999;
    width: 300px;
    background: #FFF;
    right: 20px;
    bottom: -367px;
    transition: all .8s cubic-bezier(.22, .67, .43, 1.22) .2s;
    border-radius: 10px 10px 0 0;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
}
.nb-form:hover {
    bottom: 0px;
}

/*-- User Icon --*/

.nb-form .user-icon {
    position: absolute;
    top: -49px;
    right: 12px;
    display: block;
    width: 58px;
    margin: 20px auto 15px;
    border-radius: 100%;
}

/*-- Title --*/

.nb-form .title {
    background: #03a9f4;
    font-size: 16px !important;
    padding: 20px 18px !important;
    color: #fff !important;
    border-radius: 10px 10px 0 0;
}

/*-- Text --*/

.nb-form p {
    font-size: 13px;
    margin: 0;
    padding: 15px;
    color: #666;
}

.nb-form p.message {
    margin-left: 7px;
}

/*-- Form Elements --*/

.nb-form form {
    padding: 0 15px 15px 15px;
}

.nb-form input,
.nb-form textarea {
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 12px;
    width: 254px;
    max-width: 254px;
    margin-bottom: 10px;
    margin-left: 7px;
    padding: 6px;
    border: none;
    border-radius: 4px;
    color: #999;
    border-bottom: 1px solid #f0f0f0;
}

.nb-form input:focus,
.nb-form textarea:focus {
    outline: none;
    box-shadow: none;
}

.nb-form input[type='submit'] {
    display: block;
    width: 120px;
    margin: 0 auto;
    padding: 0 20px;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
    cursor: pointer;
    transition: all .4s ease;
    color: #fff !important;
    border: none;
}

.nb-form input[type='submit']:hover {
    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.07),0 1px 7px 0 rgba(0,0,0,0.02),0 3px 1px -1px rgba(0,0,0,0.1);
}

.nb-form textarea {
    min-height: 110px;
}


.nb-form ::-webkit-input-placeholder {
    color: #ccb0b0;
}

.nb-form ::-moz-placeholder{
    color: #ccb0b0;
}

.nb-form :-ms-input-placeholder {
    color: #ccb0b0;
}

.nb-form :-moz-placeholder {
    color: #ccb0b0;
}

.nb-form input[type='submit'] {
    background: #03a9f4;
}

@media screen and (max-width: 676px) {
    .nb-form:hover .user-icon {
        display: none;
    }

    .nb-form .message {
        display: none;
    }

    .nb-form form {
        padding-top: 15px;
    }
    .nb-form{
        right: 50%;
        bottom: -320px;
        left: 50%;
        transform: translateX(-50%);
    }
}
</style>
<link href="../../style/responsive.css" rel="stylesheet">
@include('site.includes.header');

    <!-- header 1 -->
    <div class="header1 blog-post" style="background: url(../../ServiceImages/<?php echo $serviceContent[0]->serviceimage?>) !important; background-size:no-repeat;">
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
                        <div class="post-text">
                           <p>
                               {!!$serviceContent[0]->content!!}
                           </p>
                        </div>
                        
                        <!-- Service Items -->
                        
                        <!--- End -->
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sidebar-item">
                                <div class="make-me-sticky">
                                    <div class="service-quick-enquiry hidden-xs">
                                        <div class="call-back-holder">
                                            <h3>Get the best price for your service</h3>
                                            <div class="form-holder" id="call-back-msg">
                                                <form id="service-lead-frm">
                                                    <input type="hidden" name="lead_type" value="1">
                                                    <input type="hidden" name="associate_service_id" value="">
                                                    <input type="hidden" name="associate_id" value="">
                                                    <input type="hidden" name="lead_subcat" value="14">
                                                    <input type="hidden" name="action_type" value="lead-enquiry">
                                                    <div class="input-holder">
                                                        <input type="text" name="service_lead_name" placeholder="Name">
                                                        <span><i class="fa fa-user-o" aria-hidden="true"></i></span> </div>
                                                    <div class="clearfix"></div>
                                                    <span class="message" id="msgservice_lead_name" style="display:none;">&nbsp;</span>
                                                    <div class="input-holder">
                                                        <input type="email" name="service_lead_email" placeholder="Email">
                                                        <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> </div>
                                                    <div class="clearfix"></div>
                                                    <span class="message" id="msgservice_lead_email" style="display:none;">&nbsp;</span>
                                                    <div class="input-holder">
                                                        <input type="text" name="service_lead_mobile" placeholder="Mobile">
                                                        <span><i class="fa fa-phone" aria-hidden="true"></i></span> </div>
                                                    <div class="clearfix"></div>
                                                    <span class="message" id="msgservice_lead_mobile" style="display:none;">&nbsp;</span>
                                                    <div class="input-holder">
                                                        <select name="service_lead_state" onchange="findCity(this)">
                                                            <option value="">Select State</option>
                                                            <option value="1">Andaman and Nicobar Islands</option>
                                                            <option value="2">Andhra Pradesh</option>
                                                            <option value="3">Arunachal Pradesh</option>
                                                            <option value="4">Assam</option>
                                                            <option value="5">Bihar</option>
                                                            <option value="6">Chandigarh</option>
                                                            <option value="7">Chhattisgarh</option>
                                                            <option value="8">Dadra and Nagar Haveli</option>
                                                            <option value="9">Daman and Diu</option>
                                                            <option value="10">Delhi</option>
                                                            <option value="11">Goa</option>
                                                            <option value="12">Gujarat</option>
                                                            <option value="13">Haryana</option>
                                                            <option value="14">Himachal Pradesh</option>
                                                            <option value="15">Jammu and Kashmir</option>
                                                            <option value="16">Jharkhand</option>
                                                            <option value="17">Karnataka</option>
                                                            <option value="18">Kenmore</option>
                                                            <option value="19">Kerala</option>
                                                            <option value="20">Lakshadweep</option>
                                                            <option value="21">Madhya Pradesh</option>
                                                            <option value="22">Maharashtra</option>
                                                            <option value="23">Manipur</option>
                                                            <option value="24">Meghalaya</option>
                                                            <option value="25">Mizoram</option>
                                                            <option value="26">Nagaland</option>
                                                            <option value="27">Narora</option>
                                                            <option value="28">Natwar</option>
                                                            <option value="29">Odisha</option>
                                                            <option value="30">Paschim Medinipur</option>
                                                            <option value="31">Pondicherry</option>
                                                            <option value="32">Punjab</option>
                                                            <option value="33">Rajasthan</option>
                                                            <option value="34">Sikkim</option>
                                                            <option value="35">Tamil Nadu</option>
                                                            <option value="36">Telangana</option>
                                                            <option value="37">Tripura</option>
                                                            <option value="38">Uttar Pradesh</option>
                                                            <option value="39">Uttarakhand</option>
                                                            <option value="40">Vaishali</option>
                                                            <option value="41">West Bengal</option>
                        
                                                        </select>
                                                        <span><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <span class="message" id="msgservice_lead_state" style="display:none;">&nbsp;</span>
                                                    <div class="input-holder">
                                                        <select name="service_lead_city" class="service-city-data">
                                                            <option value="">Select City</option>
                                                        </select>
                                                        <span><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <span class="message" id="msgservice_lead_city" style="display:none;">&nbsp;</span>
                                                    <button type="button" id="authenticateServiceLeadEnquiry">Know More</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Form -->
                    <div class="nb-form">
                    <p class="title">Get Expert Advice</p>
                    <img src="https://cdn4.iconfinder.com/data/icons/blue-icons-3/1500/message_childhood_paper_plane_airplane_origami_origami-512.png" alt="" class="user-icon">
                    <p class="message">Get an instant best price for your services</p>
                
                    <form>
                      <input type="text" name="cpname" placeholder="Name:" required>
                      <input type="email" name="cpemail" placeholder="Email:" required>
                      <input type="tel" name="cpphone" placeholder="Phone:" required>
                      <textarea name="cpmessage" placeholder="Message:" required></textarea>
                      <input type="submit" value="Send message">
                    </form>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ends here -->

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
            @if(count($servicescard) > 0)
            @foreach($servicescard as $row)
            @if ($serviceContent[0]->servicename == $row->servicename)
            <div class="bootstrap">
                <div class="pro-con-holder">
                    <div class="row">
                        <div class="ser-pro-heading">
                            <h3>Choose your best suitable professional</h3>
                        </div>
                        <div class="col-md-3">
                            <button id="toggle-button"><img src="../../images/filter-results-button.svg"> <span>Refine Results</span></button>
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
                                @foreach ($servicescard as $data)
                                    @if ($serviceContent[0]->servicename == $data->servicename)
                                    <div class="col-md-4 grid-products" data-price="{{$data->price}}" data-state='Maharashtra' data-experience='2 to 5 Year' data-rating='4' data-price="{{$data->price}}">
                                        <div class="grid-products-list ">
                                            <div class="NameHighlights">
                                                <figure class="card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-21-20190824034642-38.jpg">
                                                            <h5 class="hidden-lg">View Details</h5>
                                                        </div>
                                                        <figcaption class="info-wrap">
                                                            @foreach ($associate as $associates)
                                                            @if ($associates->email == $data->byAssociate)
                                                            <h4 class="title">{{$data->servicename}}</h4>
                                                            <p class="desc">{{$associates->name}}&nbsp;&nbsp;<span class='verified-associate'><i class="fa fa-check-square" aria-hidden="true"></i></span></p>
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
                                                            @endif
                                                            @endforeach
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                
                                                    <div class="on-mouse-hover-popup  arrow_box">
                                                        <h3>Requirements</h3>
                                                        <span><?php echo substr($data->requirements,0,800) ?></span>

                                                        <a class="pop-orange-text" href="llpregistration/rohit-khandelwal-132.html">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <span><?php echo substr($data->deliverables,0,800) ?></span>

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
                                                    <span class="price-new">₹{{$data->price}}</span>
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
                                    @endif
                                @endforeach
                            </div>
                            <input type='hidden' value='11' id='product_div_count' />
                           
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>
    </div>


    <div class="servicemain-detail-holder background-gray">
        <section id="tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true">Overview </a>
                                <a class="nav-item nav-link" id="nav-Work-Flow-tab" data-toggle="tab" href="#nav-Work-Flow" role="tab" aria-controls="nav-Work-Flow" aria-selected="false">Work Flow</a>
                                <a class="nav-item nav-link" id="nav-Terms-conditions-tab" data-toggle="tab" href="#nav-Terms-conditions" role="tab" aria-controls="nav-Terms-conditions" aria-selected="false">Terms &amp; conditions</a>
                                <a class="nav-item nav-link" id="nav-Reviews-tab" data-toggle="tab" href="#nav-Reviews" role="tab" aria-controls="nav-Reviews" aria-selected="false">Reviews <span class="review-circle">18</span></a>
                                <a class="nav-item nav-link" id="nav-Professional-tab" data-toggle="tab" href="#nav-Professional" role="tab" aria-controls="nav-Professional" aria-selected="false">About Professional </a>
                                <a class="nav-item nav-link" id="nav-Recommendation-tab" data-toggle="tab" href="#nav-Recommendation" role="tab" aria-controls="nav-Recommendation" aria-selected="false" style="display:none;">Recommendation</a>
    
                            </div>
                        </nav>
                        <div class="clearfix"></div>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
                                <div class="row">
                                    <div class="col-md-4 float-left">
                                        <div class="detials-box-type-1">
                                            <div class="heading">
                                                <h2>Requirement</h2>
                                            </div>
                                            <ul class="list-items">
                                                <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
                                                <li>Registered Office Address Proof - Electricity Bill/Water Bill/Property Tax Receipt/Registered Sale Deed</li>
                                                <li>Nature/Objects of the Business</li>
                                                <li>Detail of Banking Rights </li>
                                                <li>Profit Sharing Ratio and Partner Capital Contribution</li>
                                                <li>Firm Trade/Brand Name</li>
    
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 float-left">
                                        <div class="detials-box-type-1">
                                            <div class="heading">
                                                <h2>Deliverables</h2>
                                            </div>
                                            <ul class="list-items">
                                                <li>Draft Partnership Deed</li>
                                                <li>Firm PAN Card</li>
                                                <li>Firm TAN Letter</li>
                                                <li>Free Consultancy</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 float-left">
                                        <div class="detials-box-type-1">
                                            <div class="heading">
                                                <h2>Service</h2>
                                            </div>
                                            <div class="small-cart-holder">
                                                <h2>Partnership</h2>
                                                <p>Timeline <strong>16 Days</strong></p>
    
                                                <h4>Rs. 1750/-</h4>
                                                <span class="professional-fees">Professional Fees</span>
                                                <p><strong>Note*</strong> Price may vary on any modifications or changes by Govt. (If any)</p>
                                                <a class="btn gradient-bg service-buynow" href="javascript:void(0)" rel="95" data-action="addtocart">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-8 offset-2"><img src="https://www.ezeestartup.com/images/secure-payment.png" class="img-fluid"></div>
                                        <img src="https://www.ezeestartup.com/images/secure_payment-small.png" class="img-fluid">
                                    </div>
    
                                </div>
                            </div>
    
                            <div class="tab-pane fade" id="nav-Professional" role="tabpanel" aria-labelledby="nav-Professional-tab">
                                <div class="service-tab-panel professional-profile">
                                    <h1>DIVYANSH JAISWAL</h1>
                                    <div class="rating-wrap">
                                        <ul class="rating-stars">
                                            <li style="width:80%" class="stars-active"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </li>
                                            <li> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </li>
                                        </ul>
                                        <div class="label-rating">4 <span>(4)</span></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p>He is a Commerce Graduate and Associate member of the Institute of Company Secretaries of India. He has trained with one of the prominent Law Firm in India and has been in independent circuit for last 2 years.</p>
                                    <div class="clearfix"></div>
                                    <h3>Skills</h3>
                                    <ul>
                                        <li>Company Registrations</li>
                                        <li> Compliances</li>
                                        <li> GST</li>
                                        <li> IPR</li>
                                    </ul>
    
                                    <p>Location : <i class="fa fa-map-marker" aria-hidden="true"></i> From <span>Allahabad</span></p>
                                    <p>Experience : <span>Upto 1 Year</span></p>
                                </div>
                            </div>
    
                            <div class="tab-pane fade" id="nav-Recommendation" role="tabpanel" aria-labelledby="nav-Recommendation-tab">
                                <div class="service-tab-panel">
                                    <h2>More from professional</h2>
                                    <div class="row">
    
    
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Private Limited Company </h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹6750</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Director(s) PAN Card</li>
                                                            <li>Director(s) Identity Proof (1.Passport Copy 2.Voter ID Car 3.Driving License)</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/private-limited-company/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li> COI - Company's Incorporation Certificate</li>
                                                            <li>eMoA - Memorandum/Article of Association</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/private-limited-company/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="66" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="66" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Section 8 Company</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹9500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Director(s) Pan Card</li>
                                                            <li>Photograph of Director(s)</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/section-8-company/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>COI - Company's Incorporation Certificate</li>
                                                            <li> eMoA - Memorandum/Article of Association</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/section-8-company/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="94" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="94" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">One Person Company </h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹6500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Director/Nominee Pan Card</li>
                                                            <li>Photograph of Director/Nominee</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/one-person-company/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li> COI - Company's Incorporation Certificate</li>
                                                            <li> 1-DIN - DIN Number(s) for Director(s)</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/one-person-company/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="96" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="96" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">LLPRegistration </h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹4500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Partner(s) PAN Card</li>
                                                            <li>Partner(s) Identity Proof- Aadhaar Card/Voter ID Card/Driving License/Passport copy</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/llpregistration/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Incorporation Certificate</li>
                                                            <li>LLP Agreement</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/llpregistration/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="97" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="97" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Public Limited </h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹9000</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Director(s) Pan card</li>
                                                            <li>Photograph of Director(s)</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/public-limited/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>3-DIN for Directors</li>
                                                            <li>7-Digital Signature</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/public-limited/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="99" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="99" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Trade Mark Registration </h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Soft copy of Trademark/Logo (image or shape)</li>
                                                            <li>Applicant ID &amp; Address Proof</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/trade-mark-registration/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Free Consultation</li>
                                                            <li>Appropriate Class Identification</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/trade-mark-registration/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="102" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="102" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Trademark Objection</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3050</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Acceptance Letter</li>
                                                            <li>Soft copy of Trademark/Logo (image or shape)</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/trademark-objection/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Reply Submission</li>
                                                            <li>Filing Acknowledgement</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/trademark-objection/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="103" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="103" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Startup India Registration </h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹4500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Company/Firm's PAN Card</li>
                                                            <li>Constitutional Document (Partnership Deed/Certificate of Incorporation/MOA/AOA)</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/startup-india-registration/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Free consultancy</li>
                                                            <li>Startup India Certificate</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/startup-india-registration/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="104" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="104" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">MSME Registration</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹1250</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Complete Registered office Address</li>
                                                            <li>AADHAR Card of Authorized Signatory</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/msme-registration/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Free Consultation</li>
                                                            <li>MSME certificate</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/msme-registration/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="107" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="107" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">FSSAI License (State)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹18500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>PAN card and Photograph of the Proprietor/Directors/Partners and of the Company</li>
                                                            <li>ID and address proof of the Proprietor/Directors/Partners</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/fssai-license-state/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>FSSAI License Consultation</li>
                                                            <li>Fssai Certificate</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/fssai-license-state/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="108" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="108" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">FSSAI License (Central)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹17500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>PAN card and Photograph of the Proprietor/Directors/Partners and of the Company</li>
                                                            <li>ID and address proof of the Proprietor/Directors/Partners</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/fssai-license-central/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Consultancy on FSSAI License</li>
                                                            <li>FSSAI Certificate</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/fssai-license-central/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="109" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="109" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">GST Registration </h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹1350</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>PAN Card of owner/ directors/ partners</li>
                                                            <li>Address proof-Electricity Bill/ Telephone</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/gst-registration/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Free Consultancy</li>
                                                            <li>GST Certificate</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/gst-registration/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="110" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="110" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">FSSAI Registration</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹5100</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>PAN card and Photograph of the proprietor /Directors/Partners</li>
                                                            <li>Address proof of the proprietor /Directors/Partners (AADHAR/Passport/Voter ID/Driving License)</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/fssai-registration/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Consultancy on FSSAI registration</li>
                                                            <li>FSSAI Registration Certificate</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/fssai-registration/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="111" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="111" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Import Export Code (IEC)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹6500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Bank Certificate / Cancelled Cheque in prescribed format</li>
                                                            <li>PAN Card (Prop. or Entity)</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/import-export-code-iec/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Free Consultancy</li>
                                                            <li>Copy of filed Application</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/import-export-code-iec/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="112" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="112" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">RUN Web Form (Pvt./Public/Section8/Producer)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹2250</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Type of entity/company</li>
                                                            <li>2 Proposed name of Company in preferential order</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/run-web-form-pvt-public-section8-producer/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Name approval Letter</li>
                                                            <li>Free Consultancy</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/run-web-form-pvt-public-section8-producer/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="556" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="556" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Striking Off Company</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹9500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Audited statement of accounts in required format</li>
                                                            <li>MOA &amp; AOA</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/striking-off-company/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Notice,Agenda,Minutes &amp; Board resolution of Meeting</li>
                                                            <li>Draft Notice,agenda,Minutes &amp; special Resolution of General Meeting</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/striking-off-company/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="557" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="557" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Appointment of Director</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹2500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>DSC of Appointee</li>
                                                            <li>COI/MOA/AOA</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/appointment-of-director/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Allotment of DIN (in case of new director)</li>
                                                            <li>Issuance of DSC (in case of new director)</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/appointment-of-director/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="558" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="558" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Change of Object of the Company</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>MOA/AOA</li>
                                                            <li>DSC of the authorized person</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/change-of-object-of-the-company/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Notice,Agenda,minutes &amp; Board resolution of Meeting</li>
                                                            <li>Draft Notice,Agenda,minutes &amp; Special resolution of General Meeting</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/change-of-object-of-the-company/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="559" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="559" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Change in Registered Office within local limits of city, town or village</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3100</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>COI/MOM/AOA</li>
                                                            <li>New registered office address</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/change-in-registered-office-within-local-limits-of-city-town-or-village/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft of notice/agenda/minutes Resolution of Board meeting</li>
                                                            <li>Submitted E-form</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/change-in-registered-office-within-local-limits-of-city-town-or-village/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="561" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="561" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Change in Registered Office Outside local limits of city, town or village</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3900</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>COI/MOM/AOA</li>
                                                            <li>New registered office address</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/change-in-registered-office-outside-local-limits-of-city-town-or-village/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft of notice/agenda/minutes Resolution of Board meeting</li>
                                                            <li>Draft of notice/agenda/minutes Special Resolution of General meeting</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/change-in-registered-office-outside-local-limits-of-city-town-or-village/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="562" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="562" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Commencement Certificate (Form 20A)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹2100</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>COI/MOA/AOA</li>
                                                            <li>Bank statement of Company showing capital amount</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/commencement-certificate-form-20a/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft notice, agenda, minutes &amp; board resolution of the meeting</li>
                                                            <li>Submitted e-form</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/commencement-certificate-form-20a/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="563" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="563" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">ACTIVE Compliances (Form 22A)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹2500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>COI/MOA/AOA</li>
                                                            <li>Photo of the registered office (Outside) along with photo of director.</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/active-compliances-form-22a/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Free Consultancy</li>
                                                            <li>Submitted e-form</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/active-compliances-form-22a/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="564" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="564" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">FLA return</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹7500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Other details to register on RBI Portal</li>
                                                            <li>COI/MOA/AOA</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/fla-return/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Authority Letter in specified format</li>
                                                            <li>Draft Verification Letter in specified format</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/fla-return/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="565" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="565" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Annual Filing of Private Limited Company (Non XBRL)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹4500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>DSC of directors</li>
                                                            <li>COI/MOA/AOA</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/annual-filing-of-private-limited-company-non-xbrl/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Board Meeting- Draft Notice, Minutes, Agenda, Resolution</li>
                                                            <li>General Meeting- Draft Notice, Minutes, Agenda, Resolution</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/annual-filing-of-private-limited-company-non-xbrl/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="607" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="607" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Annual Filing of One Person Company (OPC)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3900</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>DSC of Director</li>
                                                            <li>COI/MOA/AOA</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/annual-filing-of-one-person-company-opc/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>ADT-1 (Appointment of Auditors)</li>
                                                            <li>Notice and Board Report of AGM</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/annual-filing-of-one-person-company-opc/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="608" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="608" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
    
    
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-5-20190814012348-22.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Annual Filing of Public Limited Company (Non XBRL)</h4>
                                                            <p class="desc">DIVYANSH JAISWAL</p>
    
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹5000</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>DSC of directors</li>
                                                            <li>COI/MOA/AOA</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/annual-filing-of-public-limited-company-non-xbrl/divyansh-jaiswal-116">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Board Meeting- Draft Notice, Minutes, Agenda, Resolution </li>
                                                            <li>General Meeting- Draft Notice,Minutes,Agenda,Resolution</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/annual-filing-of-public-limited-company-non-xbrl/divyansh-jaiswal-116">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="609" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="609" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/divyansh-jaiswal/116">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-tab-panel">
                                    <h2>Similar service from other professional</h2>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-19-20190814014423-21.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">KESHAV CHAWLA</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹2400</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/keshav-chawla-115">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/keshav-chawla-115">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="77" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="77" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/keshav-chawla/115">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-1-20190814013236-17.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">NILESH RANKA</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹1999</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/nilesh-ranka-111">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/nilesh-ranka-111">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="88" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="88" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/nilesh-ranka/111">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-16-20190814123037-11.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">VARUN GUPTA</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹2499</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/varun-gupta-105">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/varun-gupta-105">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="117" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="117" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/varun-gupta/105">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-15-20190814123909-44.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">KARISHMA CHAUHAN</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3000</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/karishma-chauhan-138">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/karishma-chauhan-138">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="160" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="160" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/karishma-chauhan/138">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-14-20190814124232-45.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">PRAMOD KUMAR</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3800</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/pramod-kumar-139">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/pramod-kumar-139">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="161" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="161" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/pramod-kumar/139">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-10-20190814125723-41.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">RAGINI AGGARWAL</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹1800</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/ragini-aggarwal-135">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/ragini-aggarwal-135">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="293" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="293" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/ragini-aggarwal/135">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-22-20190829034833-30.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">HARISH CHAUDHARY</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹3500</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box last-service-popup arrow_box-last">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/harish-chaudhary-124">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/harish-chaudhary-124">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="299" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="299" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/harish-chaudhary/124">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-2-20190814013000-23.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">SUNITA BHARGAVA</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹1800</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/sunita-bhargava-117">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Draft Partnership Deed</li>
                                                            <li>Firm PAN Card</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/sunita-bhargava-117">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="452" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="452" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/sunita-bhargava/117">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="NameHighlights">
                                                <figure class="card card-product">
                                                    <div class="on-hover-effect">
                                                        <div class="img-wrap"><img src="https://www.support.ezeestartup.com/productImage/site/Ezee-Associate-Thumbnail-3-20190814012833-12.jpg"></div>
                                                        <figcaption class="info-wrap">
                                                            <h4 class="title">Partnership</h4>
                                                            <p class="desc">PARWEZ</p>
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
                                                                <div class="label-rating">4 <span>(4)</span></div>
                                                            </div>
                                                        </figcaption>
                                                        <div class="after-hover"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="bottom-wrap">
                                                        <div class="price-wrap h5">
                                                            <span class="price-new">₹2499</span>
    
                                                        </div>
                                                    </div>
                                                    <div class="on-mouse-hover-popup arrow_box ">
                                                        <h3>Requirements</h3>
                                                        <ul>
                                                            <li>Identity Proof of Partners - AADHAR Card/Voter ID Card/Driving License/Passport</li>
                                                            <li>Address Proof of Partners - AADHAR/Electricity or Water Bill/Telephone Bill/Passport</li>
    
                                                        </ul>
                                                        <a class="pop-orange-text" href="https://www.ezeestartup.com/partnership/parwez-106">Read more</a>
                                                        <h4>Deliverables</h4>
                                                        <ul>
                                                            <li>Free Consultancy</li>
                                                            <li>Draft Partnership Deed</li>
                                                        </ul>
                                                        <a class="blue-text" href="https://www.ezeestartup.com/partnership/parwez-106">Read more </a>
                                                        <div class="clearfix"></div>
                                                        <a href="javascript:void(0)" rel="517" data-action="addtocart" class="addtocart-btn service-addtocart">Add to cart</a>
                                                        <a class="wishlist " rel="517" data-action="addtowishlist" href="https://www.ezeestartup.com/login"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <div class="tool-tipfooter"> <a href="https://www.ezeestartup.com/parwez/106">know more about professional</a> </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="tab-pane fade" id="nav-work-sample" role="tabpanel" aria-labelledby="nav-work-sample-tab">
                                <div class="home-demo">
                                    <div id="owl-portfolio" class="owl-carousel owl-loaded owl-drag">
    
    
                                        <div class="owl-stage-outer owl-height" style="height: 0px;">
                                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                                <div class="owl-item">
                                                    <div class="item active"><iframe class="testimonial-video" width="100%" height="400" src="https://www.youtube.com/embed/D_cFusUO2lE&amp;t=1s?autoplay=0&amp;loop=1&amp;playlist=D_cFusUO2lE&amp;t=1s" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                                                </div>
                                                <div class="owl-item">
                                                    <div class="item "><iframe class="testimonial-video" width="100%" height="400" src="https://www.youtube.com/embed/QPOIU0Io7tY?autoplay=0&amp;loop=1&amp;playlist=QPOIU0Io7tY" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                        <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="tab-pane fade" id="nav-Terms-conditions" role="tabpanel" aria-labelledby="nav-Terms-conditions-tab">
                                <div class="service-tab-panel professional-profile">
                                    <ul class="list-items">
                                        <li>The client shall pay stamp duty over and above cost of Partnership registration.</li>
    
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Work-Flow" role="tabpanel" aria-labelledby="nav-Work-Flow-tab">
                                <div class="service-tab-panel professional-profile">
                                    <ul class="list-items">
                                        <li>Document verification</li>
                                        <li>Drafting of partnership deed</li>
                                        <li>Deed sent for signing and notarization(at client end)</li>
                                        <li>Application of PAN and TAN</li>
                                        <li>Deliverable</li>
    
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Reviews" role="tabpanel" aria-labelledby="nav-Reviews-tab">
                                <div class="service-tab-panel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Shabnam </strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class=" fa fa-star"></i></span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>The services are time-specific and handled with utmost sincerety. A professional of high regards.</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Vipul Jaiswal</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class=" fa fa-star"></i></span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Excellent</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Anukriti Jaiswal</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class=" fa fa-star"></i></span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Goingreat professional experience, company compliance services are timely completed with zero hassles</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Charul Gupta</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-left"><i class=" fa fa-star"></i></span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Very much satisfied.Great proffessional experiance.His service is timely completed with zero hassels.</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>khushboo khanna</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Nice</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Midhun Raj</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>really satisfied, thanks a lot</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Sudeb Roy</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Very Good Much</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Ashutosh Tiwari</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Very Good</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>good</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Raakesh R</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Ur service is excellent.but i don't how some bank and other company know my email and home address. They are disturbing</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Mangesh Jagtap</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Easy interface user friendly application </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Gokul Pillai</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Quick assistance.</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>mayank shukla</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>We are under service , Good UI and easy to use.</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>venkatarao vanapalli</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>great user interface</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Jean P Johnson</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Excellent</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Sreenivaulu G</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Good</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Good</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Gagandeep singh</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Very good service</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Koushik Rajan</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Good</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>Good</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-1"> <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"> </div>
                                                <div class="col-md-11">
                                                    <p> <a class="float-left" href="javascript:void(0)"><strong>Abhishek gupta</strong>&nbsp;&nbsp;<span class="verified-client"><i class="fa fa-check-square" aria-hidden="true"></i> Verified Buyer</span></a>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <span class="ezeestartup-review">Excellent</span>
                                                    <p></p>
                                                    <div class="clearfix"></div>
                                                    <p>excellent</p>
                                                </div>
                                            </div>
                                            <hr>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Classic tabs -->
    </div>

    
    <section class="faq-section" style="margin-top:50px; z-index:20 !important;">
        <div class="container">
            <div class="title padding">
                <h2>
                    <span class="red-color">FAQ</span> - Frequently asked questions </h2>
                <p>Deserunt laboris consequat proident enim eiusmod occaecat pariatur quis pariatur anim et eserunt laboris consequat proident enim eiusmod occaecat pariatur quis pariatur anim et.</p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="panel-group">
                        <ul class="list-unstyled">
                            <li class="panel-faq panel-filled support-question active" data-aos="fade-up">
                                <a href="tabs.html#answer1" data-toggle="tab" aria-expanded="true">
                                    <div class="panel-body">
                                        <h4 class="font-bold ">What are the Steeps Required for Incorporating a private limited company in india?</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="panel-faq panel-filled support-question" data-aos="fade-up" data-aos-delay="100">
                                <a href="tabs.html#answer2" data-toggle="tab" aria-expanded="false">
                                    <div class="panel-body">
                                        <h4 class="font-bold ">For financial services providers - Are fees and commissions received and paid reported on the survey? </h4>
                                    </div>
                                </a>
                            </li>
                            <li class="panel-faq panel-filled support-question" data-aos="fade-up" data-aos-delay="200">
                                <a href="tabs.html#answer3" data-toggle="tab" aria-expanded="false">
                                    <div class="panel-body">
                                        <h4 class="font-bold ">For financial services providers - Are fees and commissions received and paid reported on the survey? </h4>
                                    </div>
                                </a>
                            </li>
                            <li class="panel-faq panel-filled support-question" data-aos="fade-up" data-aos-delay="300">
                                <a href="tabs.html#answer4" data-toggle="tab" aria-expanded="false">
                                    <div class="panel-body">
                                        <h4 class="font-bold ">For financial services providers - Are fees and commissions received and paid reported on the survey? </h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel-faq">
                        <div class="panel-body answer-panel">
                            <div class="tab-content">
                                <div id="answer1" class="tab-pane active">
                                    <h4>What are the Steeps Required for Incorporating a private limited company in india?</h4>
                                    <p>Following are the steps: (1) Obtain Digital Signature Certificate DSC for proposed Directors of the Company. (2) Obtain Director Identification Number DIN for proposed Directors of the new Company. (3) Filing the proposed name of company for approval to the Registrar of Companies. (4) File all incorporation forms and documents online including the Memorandum of Association and the Articles of Association. (5) Obtain the certificate of incorporation.</p>
                                    <br>
                                    <hr>
                                    <div class="faq-footer">
                                        <div class="col-sm-4">
                                            <a class="button btn btn-sm btn-radius25 btn-red">Read the full article</a>
                                        </div>
                                        <div class="col-sm-4">
                                            This answer was rated:
                                            <br>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star-half"></i>
                                        </div>
                                        <div class="col-sm-4">
                                            Last Update
                                            <br>
                                            <p>08/05/2019</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="answer2" class="tab-pane">
                                    <h4>For financial services providers - Are fees and commissions received and paid reported on the survey? ?</h4>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <br>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <hr>
                                    <div class="faq-footer">
                                        <div class="col-sm-4">
                                            <a class="button btn btn-sm btn-radius25 btn-red">Read the full article</a>
                                        </div>
                                        <div class="col-sm-4">
                                            This answer was rated:
                                            <br>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star-half"></i>
                                        </div>
                                        <div class="col-sm-4">
                                            Last Update
                                            <br>
                                            <p>08/05/2019</p>
                                        </div>
                                    </div>

                                </div>
                                <div id="answer3" class="tab-pane">
                                    <h4>For financial services providers - Are fees and commissions received and paid reported on the survey? ?</h4>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content he as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <br>
                                    <p>The point of using Lor as opposed to using 'Content he em Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <hr>
                                    <div class="faq-footer">
                                        <div class="col-sm-4">
                                            <a class="button btn btn-sm btn-radius25 btn-red">Read the full article</a>
                                        </div>
                                        <div class="col-sm-4">
                                            This answer was rated:
                                            <br>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star-half"></i>
                                        </div>
                                        <div class="col-sm-4">
                                            Last Update
                                            <br>
                                            <p>08/05/2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="answer4" class="tab-pane">
                                    <h4>For financial services providers - Are fees and commissions received and paid reported on the survey? ?</h4>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <br>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <hr>
                                    <div class="faq-footer">
                                        <div class="col-sm-4">
                                            <a class="button btn btn-sm btn-radius25 btn-red">Read the full article</a>
                                        </div>
                                        <div class="col-sm-4">
                                            This answer was rated:
                                            <br>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star"></i>
                                            <i class="fa fa-sm fa-star-half"></i>
                                        </div>
                                        <div class="col-sm-4">
                                            Last Update
                                            <br>
                                            <p>08/05/2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="short-info style3">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-container" data-aos="zoom-in">
                        <h3>Do you want to grow and scale your business?</h3>
                        <p>We at caadvotescs.com ensure you that quality of service. How we works?</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-container" data-aos="zoom-in">
                        <a href="call-action.html#" class="button btn btn-lg btn-outline-white radius25">Watch Video Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image-with-text">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="text-container">
                        <h2><span class="red-color">This</span> is a simple text with background image</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex molestias, beatae officiis quo architecto officiis consectetur adipisicing elit.</h4>
                        <a href="services.html#" class="button btn btn-lg btn-red radius25">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="entry">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" data-aos="fade-right">
                    <img src="../../images/icons/7.png" class="img-responsive pull-left" alt="">
                    <div class="text">
                        <h4>Fast Growing Company</h4>
                        <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web page .</p>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="fade-right" data-aos-delay="100">
                    <img src="../../images/icons/8.png" class="img-responsive pull-left" alt="">
                    <div class="text">
                        <h4>Fast Growing Company</h4>
                        <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web page .</p>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="fade-right" data-aos-delay="200">
                    <img src="../../images/icons/9.png" class="img-responsive pull-left" alt="">
                    <div class="text">
                        <h4>Fast Growing Company</h4>
                        <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web pageg.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom Page Java Script Files -->
   
    <div class="basic-modal-content" id="popup-data"></div>
    <script type="text/javascript" src="../../js/jquery.js"></script> 
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../../css/basic.css">
    <script type="text/javascript" src="../../js/jquery.simplemodal.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    
    
    <script src="../../js/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/jquery.collapsible.min.js"></script> 
    <script type="text/javascript" src="../../js/swiper.min.js"></script> 
    <script type="text/javascript" src="../../js/jquery.countdown.min.js"></script> 
    <script type="text/javascript" src="../../js/circle-progress.min.js"></script> 
    <script type="text/javascript" src="../../js/jquery.countTo.min.js"></script> 
    <script type="text/javascript" src="../../js/jquery.barfiller.js"></script> 
    
    <script type="text/javascript" src="../../js/custom.js"></script>
    
    <script src="../../js/enquiry.js"></script>
    <script src="../../js/jquery.combo.select.js"></script>
    <script type="text/javascript" src="../../js/service.js"></script>
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
    <script src="../../js/jquery.morelines.js"></script> 
    <script defer src="../../js/product_filter_level2.js"></script>
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