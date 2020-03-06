
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
<div class="bootstrap">
    <div class="servicemain-detail-holder background-gray">
        <section id="tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav md-pills nav-justified pills-peach-gradient">
                            <li class="nav-item">
                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true">Overview </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-Work-Flow-tab" data-toggle="tab" href="#nav-Work-Flow" role="tab" aria-controls="nav-Work-Flow" aria-selected="false">Work Flow</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-Terms-conditions-tab" data-toggle="tab" href="#nav-Terms-conditions" role="tab" aria-controls="nav-Terms-conditions" aria-selected="false">Terms &amp; conditions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-Professional-tab" data-toggle="tab" href="#nav-Professional" role="tab" aria-controls="nav-Professional" aria-selected="false">About Professional </a>
                            </li>
                            <li class="nav-item">
                                <!--a class="nav-item nav-link" id="nav-Reviews-tab" data-toggle="tab" href="#nav-Reviews" role="tab" aria-controls="nav-Reviews" aria-selected="false">Reviews <span class="review-circle">18</span></a-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-Recommendation-tab" data-toggle="tab" href="#nav-Recommendation" role="tab" aria-controls="nav-Recommendation" aria-selected="false" style="display:none;">Recommendation</a>
                            </li>
                          </ul>
                        <nav>
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
                                               {!!$servicescard[0]->requirements!!}
    
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 float-left">
                                        <div class="detials-box-type-1">
                                            <div class="heading">
                                                <h2>Deliverables</h2>
                                            </div>
                                            <ul class="list-items">
                                                {!!$servicescard[0]->deliverables!!}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 float-left">
                                        <div class="detials-box-type-1">
                                            <div class="heading">
                                                <h2>Service</h2>
                                            </div>
                                            <div class="small-cart-holder">
                                                <h2>{{$servicescard[0]->servicename}}</h2>
                                                <p>Timeline <strong>{{$servicescard[0]->timeline}}</strong></p>
    
                                                <h4>Rs. {{$servicescard[0]->price}}/-</h4>
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
                                    <h1>{{$associate[0]->name}}</h1>
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
    
                                    <p>Location : <i class="fa fa-map-marker" aria-hidden="true"></i> From <span>{{$associate[0]->state}}</span></p>
                                    <p>Experience : <span>Upto 1 Year</span></p>
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
</div>
    
    <section class="faq-section" style="margin-top:50px; z-index:20 !important;">
        <div class="container">
            <div class="title padding">
                <h2>
                    <br><br><span class="red-color">FAQ</span> - Frequently asked questions </h2>
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