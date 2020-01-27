
@include('site.includes.header');

<!-- header 1 -->
<div class="header1 blog-post" style="background: url(../../images/blog-posts/blog-page.jpg) !important; background-size:no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="text-container text-left">
                    <a href="index.html">Home / </a>
                    <a href="blog-post.html#"> Join</a>
                    <h2 style="color:#fff !important;">Associate Login/Register</h2>
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
            <form role="form" method="POST" action="{{route('associate.login.submit')}}">
              @csrf
                  <div class="messages"></div>
                 <div class="form-group" data-aos="fade-up">
                      <input id="form_name" type="email" name="email" class="form-control" placeholder="Please enter your Email*" required="required" data-error="Email is required.">
                 </div>

                 <div class="form-group form_left" data-aos="fade-up" data-aos-delay="100">
    
                    <input id="form_email" type="password" name="password" class="form-control" placeholder="Please enter your Password*" required="required" data-error="Valid password is required.">
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
                  <h2><span class="red-color">Login</span> to caadvotescs.com</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit unde, quae tenetur nam a, explicabo quisquam illo itaque recusandae distinctio.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque itaque dolorem, laudantium vitae ad aliquid dolore corporis maiores unde nisi minima nobis aliquam harum quasi dicta voluptatibus illo placeat neque!</p>
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