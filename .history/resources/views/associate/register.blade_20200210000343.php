
@include('site.includes.header');

<!-- header 1 -->
<div class="header1 blog-post" style="background: url(../../images/blog-posts/blog-page.jpg) !important; background-size:no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="text-container text-left">
                    <a href="index.html">Home / </a>
                    <a href="blog-post.html#"> Join</a>
                    <h2 style="color:#fff !important;">Join us as an Associate!</h2>
                    <p style="color:#fff !important;">In a professional context it often happens that private or corporate clients.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header 1 end -->

<section class="section9 contact-form">
  <div class="container">
      <div class="row">
          <div class="col-sm-6">
            <form method="POST" action="{{ route('associate.register.submit') }}">
                @csrf
                  <div class="messages"></div>
                 <div class="form-group" data-aos="fade-up">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your Full Name*" required="required" data-error="Email is required.">
                 </div>
                 <div class="form-group" data-aos="fade-up">
                    <input id="form_name" type="phone" name="phone" class="form-control" placeholder="Please enter your Phone No*" required="required" data-error="Email is required.">
                 </div>
                <div class="form-group" data-aos="fade-up">
                    <input id="form_name" type="email" name="email" class="form-control" placeholder="Please enter your Email*" required="required" data-error="Email is required.">
                </div>
                <div class="form-group" data-aos="fade-up">
                    <select id="form_name" type="text" style="color:#fff" name="associate_category" class="form-control" placeholder="Select Category*" required="required" data-error="Category is required.">
                        <option value="Legals">Legals</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Consultancy">Consultancy</option>
                    </select>
                </div>
                <div class="form-group" data-aos="fade-up">
                    <select id="form_name" type="text" name="associate_profession" class="form-control"  required="required" data-error="Profession is required.">
                        <option value="Lawyer">Lawyer</option>
                        <option value="CA">CA</option>
                        <option value="Tax Practitioner">Tax Practitioner</option>
                        <option value="Multimedia Experts">Multimedia Experts</option>
                        <option value="Content Writer">Content Writer</option>
                        <option value="Marketers">Marketers</option>
                        <option value="CS">CS</option>
                        <option value="CMA">CMA</option>
                        <option value="Management Consultant">Management Consultant</option>
                        <option value="Accountant">Accountant</option>
                        <option value="Software Developer">Software Developer</option>
                    </select>
                </div>
                <div class="form-group" data-aos="fade-up">
                    <select id="form_name" type="text" name="associate_state" class="form-control" placeholder="Select State*" required="required" data-error="State is required.">
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <div class="form-group" data-aos="fade-up">
                    <input id="form_name" type="associate_city" name="associate_city" class="form-control" placeholder="Please Enter Your City*" required="required" data-error="City is required.">
                </div>

                 <div class="form-group form_left" data-aos="fade-up" data-aos-delay="100">
    
                    <input id="form_email" type="password" name="password" class="form-control" placeholder="Please enter your Password*" required="required" data-error="Valid password is required.">
                    <div class="help-block with-errors"></div>
                 </div>
                 <div class="form-group form_left" data-aos="fade-up" data-aos-delay="100">
    
                    <input id="form_email" type="password" name="password_confirmation" class="form-control" placeholder="Please Confirm your Password*" required="required" data-error="Valid password is required.">
                    <div class="help-block with-errors"></div>
                 </div>
                 <div class="form-group" data-aos="fade-up" data-aos-delay="300">
                     <br>
                      <button class="btn btn-red btn-sm radius25"> <span class="fa fa-envelope"></span> Login </button>
                 </div>
             </form>
          </div>
          <div class="col-sm-6">
              <div class="title text-left">
                  <h2><span class="red-color">Create</span> your Professional account at caadvotescs.com</h2>
                  <p>Are you CA/CS/Lawyer/Business Consultant/Corporates/StartupHubs, Join EzeeStartup.com "Associate Model" and grow with us together.</p>
                  <p>Caadvocatecs..com - One stop shop for all Startup's need. Right from Start the business to Manage the business and Grow the business. Welcomes, professionals to join us as an Associate and grow your business on every business we shared. Dedicated panel, Transparent pricing, Ease of business, Secure payment, Huge network and many more.</p>
                  <br>
                  <h5><i class="fa fa-envelope fa-xs"></i> E-mail: support@caadvotescs.com</h5>
                  <h5><i class="fa fa-phone fa-xs"></i> Tel: +1 989 6594 66</h5>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- blog section ends here -->

<!-- Custom Page Java Script Files -->

<div class="basic-modal-content" id="popup-data"></div>
<script type="text/javascript" src="../../js/jquery.js"></script> 
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="../../css/basic.css">
<script type="text/javascript" src="../../js/jquery.simplemodal.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
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


@include('site.includes.footer');