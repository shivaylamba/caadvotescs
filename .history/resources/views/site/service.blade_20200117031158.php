
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
    body {
    font-family: Arial;
    color: #212121;
}

.input-row {
    margin-bottom: 20px;
}

.input-row label {
    color: #75726c;
}

.input-field {
    width: 100%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
    box-sizing: border-box;
    margin-top: 2px;
}

.btn-submit {
    padding: 10px 60px;
    background: #9e9a91;
    border: #8c8880 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    border-radius: 2px;
    cursor: pointer;
}

.info {
    font-size: .8em;
    color: #e66262;
    letter-spacing: 2px;
    padding-left: 5px;
}

.demo-wrapper {
    justify-content: space-between;
    max-width: 900px;
    margin: 0 auto;
    height: 500px;
    overflow: auto;
    padding: 10px 20px;
}

.main-col {
    float: left;
    flex-direction: column;
    padding: 15px;
    background-color: #fff;
    width: 60%;
}

.contact-sidebar {
    position: sticky;
    top: 25px;
    border: #e2ddd2 1px solid;
    border-radius: 2px;
    padding: 15px;
    background-color: #fff;
    float: right;
    width: 30%;
}.successMessage {
    background-color: #9fd2a1;
    border: #91bf93 1px solid;
    padding: 5px 10px;
    color: #3d503d;
    border-radius: 3px;
    cursor: pointer;
    font-size: 0.9em;
}

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
                        <div class="post-text">
                           <p>
                               {!!$serviceContent[0]->content!!}
                           </p>
                        </div>
                        
                        <!-- Service Items -->
                        
                        <!--- End -->
                    </div>
                </div>
                <!--- End  of col 8-->
                <!--div class="col-md-4">
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
                </div-->
                <!--div class="contact-sidebar">
                    <form name="frmContact" id="frmContact" method="post"
                        action="" enctype="multipart/form-data"
                        onsubmit="return validateContactForm()">
        
                        <div class="input-row">
                            <label style="padding-top: 20px;">Name</label> <span
                                id="userName-info" class="info"></span><br /> <input
                                type="text" class="input-field" name="userName"
                                id="userName" />
                        </div>
                        <div class="input-row">
                            <label>Email</label> <span id="userEmail-info"
                                class="info"></span><br /> <input type="text"
                                class="input-field" name="userEmail"
                                id="userEmail" />
                        </div>
                        <div class="input-row">
                            <label>Subject</label> <span id="subject-info"
                                class="info"></span><br /> <input type="text"
                                class="input-field" name="subject" id="subject" />
                        </div>
                        <div class="input-row">
                            <label>Message</label> <span id="userMessage-info"
                                class="info"></span><br />
                            <textarea name="content" id="content"
                                class="input-field" cols="60" rows="3"></textarea>
                        </div>
                        <div>
                            <input type="submit" name="send" class="btn-submit"
                                value="Send" />
        
                            <div id="statusMessage"> 
                                <?php
                                if (! empty($message)) {
                                    ?>
                                    <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </form>
                </div-->
                <div class="container">
                    <div class="row">
                        <!--div class="col-md-4">
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
                    <p class="title">Send a message</p>
                    <img src="https://lh3.googleusercontent.com/-LvTWzTOL4c0/V2yhfueroyI/AAAAAAAAGZM/Ebwt4EO4YlIc03tw8wVsGrgoOFGgAsu4wCEw/w140-h140-p/43bf8578-86b8-4c1c-86a6-a556af8fba13" alt="" class="user-icon">
                    <p class="message">This is an awesome example of sticky contact form on right bottom of the page</p>
                
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
                           
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    
    <section class="faq-section">
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