@include('site.includes.header');


        <div id="overlay">
            <div>
              <h3>Signup For Access To Free WordPress Tips &amp; Resources</h3>
              Signup for our newsletter and get access to free downloads, as well as daily WordPress tips, tricks and resources.
              <form action="" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                <input type="email" placeholder="Enter your email address..." value="" name="EMAIL" id="exit_emailinput">
                <input type="hidden" name="MERGE4" id="MERGE4" size="25" value="Blog">
                <input type="submit" value="Give Me Some Free Stuff!" name="subscribe" id="exit_subscribe">
              </form>
              <span class="close closex"></span>
            </div>
          </div>
    </div>
    <!-- End Navigation -->
<!-- carousel / slider -->
<div class="carousel-version">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1">
                        <div class="slider-v1">
                                <h2>
                                    <span class="red-color">Speed</span> Up Your Legal Process</h2>
                                <h4></h4>
                                <p></p>
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                          <label for="email">Full Name</label>
                                          <input type="name" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email">
                                          </div>
                                        <div class="form-group">
                                          <label for="pwd">Phone:</label>
                                          <input type="number" class="form-control" id="phone">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                      </form>
                                <div class="buttons">
                                    <a href="index-slider-corporate.html#" class="btn button btn-outline-white radius5 btn-md">Get Started Now</a>
                                </div>
                            </div>
                </div>

            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="slider-v1">
                        <h2>
                            <span class="red-color">Now</span>You can Easily Choose your new Professionals</h2>
                        <form action="/action_page.php">
                            <div class="form-group">
                              <label for="email">Full Name</label>
                              <input type="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                              </div>
                            <div class="form-group">
                              <label for="pwd">Phone:</label>
                              <input type="number" class="form-control" id="phone">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                          </form>
                        <div class="buttons">
                            <a href="index-slider-corporate.html#" class="btn button btn-outline-white radius5 btn-md">Get Started Now</a>
                        </div>
                    </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="slider-v1">
                        <h2>
                            <span class="red-color">Speed</span> Up Your Design Process</h2>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500 esetting industry.</p>
                        <div class="buttons">
                            <a href="index-slider-corporate.html#" class="btn button btn-outline-white radius5 btn-md">Get Started Now</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--carousel / slider  ends here-->

    <!-- agency 2 header -->
    <!--div class="agency2">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="text-container">
                        <span class="bg-text">CREATIVE</span>
                        <h2><span class="red-color">Speed</span> Up Your Legal Process</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum assumenda possimus vel, beatae quod. Delectus doloremque consequuntur veritatis alias, recusandae corporis, asperiores, deserunt explicabo nobis eligendi enim illum quidem cum.</p>
                        <div class="social-icons">
                            <i class="fab fa-md fa-twitter"></i>
                            <i class="fab fa-md fa-linkedin-in"></i>
                            <i class="fab fa-md fa-slack"></i>
                            <i class="fab fa-md fa-github"></i>
                        </div>
                        <div class="buttons">
                            <a href="index.html#" class="btn button btn-lg btn-red radius25 btn-margin-right">Get Started Now</a>
                            <a href="index.html#" class="btn button btn-lg btn-dark radius25">Read More About</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="img-content">
                        <img src="images/png/rocket.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <!-- agency 2 header end -->

<!-- section 7 -->
<section class="section7">
    <div class="container">
        <div class="modern-title">
            <div class="col-sm-6">
                <div class="text-right">
                    <h2>
                        <span class="red-color">Popular</span> Services</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-left">
                    <p>These are the Services which are popular among customers
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($popularservices as $ps)
        <div class="col-sm-4">
            <div class="text-container" data-aos="fade-up">
                <img src="images/icons/gray-cloud.png" class="img-responsive img-absolute cols-img" alt="">
                <img src="images/icons/1.png" class="img-responsive center-img cols-img2" alt="">
                <div class="text">
                    <h4><a href="/public/services/{{$ps->slug}}">{{$ps->servicename}}</a></h4>
                    <p>Under</p>
                    <p>{{$ps->subcategory}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br>
    <br>
    <div class="buttons">
        <center><a href="index.html#" class="button btn btn-sm btn-default btn-red radius25 btn-shadow btn-margin-right">View All</a></center>
    </div>
</section>
<!-- section 7 end -->
    
    <!--- box container -->
    <div class="entry big">
        <div class="container">
          <div class="row">
              <div class="col-sm-4" data-aos="fade-right">
                  <img src="images/icons/7.png" class="img-responsive pull-left" alt="">
                  <div class="text">
                      <h4>Fast Growing Company</h4>
                      <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web page .</p>
                  </div>
              </div>
              <div class="col-sm-4" data-aos="fade-right" data-aos-delay="100">
                  <img src="images/icons/8.png" class="img-responsive pull-left" alt="">
                  <div class="text">
                      <h4>Fast Growing Company</h4>
                      <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web page .</p>
                  </div>
              </div>
              <div class="col-sm-4" data-aos="fade-right" data-aos-delay="200">
                  <img src="images/icons/9.png" class="img-responsive pull-left" alt="">
                  <div class="text">
                      <h4>Fast Growing Company</h4>
                      <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web pageg.</p>
                  </div>
              </div>
          </div>
        </div>
    </div>
    <section class="box-content drag-up">
        <div class="container">
          <div class="row" data-aos="fade-up">
              <div class="col-sm-6">
                  <div class="left-content">
                      <div class="title text-left title- font2">
                          <h2>
                              <span class="red-color">How</span> it Works?</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, maxime, iure. Recusandae voluptates, tenetur repellendus cumque facere nobis eos, aspernatur architect nobis eos, aspernatur archi.</p>
                      </div>
                      <div class="text-container">
                          <ul>
                              <li><i class="far fa-check-circle fa-sm"></i> Choose your Service</li>
                              <li><i class="far fa-check-circle fa-sm"></i> Payment simplified</li>
                              <li><i class="far fa-check-circle fa-sm"></i> Upload your documents</li>
                              <li><i class="far fa-check-circle fa-sm"></i>Kick-Start your Business</li>
                          </ul>
                          <div class="buttons">
                              <a href="index.html#" class="button btn btn-sm btn-default btn-red radius25 btn-shadow btn-margin-right">Get Started Now </a>

                              <a href="index.html#" class="button btn btn-sm btn-default btn-dark radius25 btn-shadow btn-margin-right">Read More Here</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="right-content">
                      <div class="part1">
                          <div class="col-sm-6">
                              <div class="boxes text-center" data-aos="zoom-in" data-aos-delay="200">
                                  <img src="images/icons/1.png" class="img-responsive center-img" alt="">
                                  <h3>Free Data Ansds salytcis</h3>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="boxes text-center" data-aos="zoom-in" data-aos-delay="300">
                                  <img src="images/icons/4.png" class="img-responsive center-img" alt="">
                                  <h3>Free Data Analysds stcis</h3>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="boxes text-center" data-aos="zoom-in" data-aos-delay="400">
                              <img src="images/icons/4.png" class="img-responsive center-img" alt="">
                              <h3>Free Data Analysds stcis</h3>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="boxes text-center" data-aos="zoom-in" data-aos-delay="500">
                              <img src="images/icons/6.png" class="img-responsive center-img" alt="">
                              <h3>Free Dasds sta Analytcis</h3>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- box container -->

     
 <!-- portfolio section  -->

    <!-- text image -->
    <section class="text-image bg-image">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="small-boxes">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box1 text-center" data-aos="fade-up" data-aos-delay="100">
                                <i class="fa fa-server fa-lg"></i>
                                <h4>Free Data Storage</h4>
                                <div class="hidden-text">
                                    <p>Eu incididunt sunt consectetur sunt voluptate ipsum reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box1 text-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="fa fa-gem fa-lg"></i>
                                <h4>Awesome Support</h4>
                                <div class="hidden-text">
                                    <p>Eu incididunt sunt consectetur sunt voluptate ipsum reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box1 text-center" data-aos="fade-up" data-aos-delay="300">
                                <i class="fa fa-envelope fa-lg"></i>
                                <h4>E-mail Marketing</h4>
                                <div class="hidden-text">
                                    <p>Eu incididunt sunt consectetur sunt voluptate ipsum reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box1 text-center" data-aos="fade-up" data-aos-delay="100">
                                <i class="fa fa-bullhorn fa-lg"></i>
                                <h4>Digital Marketing</h4>
                                <div class="hidden-text">
                                    <p>Eu incididunt sunt consectetur sunt voluptate ipsum reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box1 text-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="fa fa-rocket fa-lg"></i>
                                <h4>SEO and Marketing</h4>
                                <div class="hidden-text">
                                    <p>Eu incididunt sunt consectetur sunt voluptate ipsum reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box1 text-center" data-aos="fade-up" data-aos-delay="300">
                                <i class="fa fa-chart-bar fa-lg"></i>
                                <h4>Free Data Analytcis</h4>
                                <div class="hidden-text">
                                    <p>Eu incididunt sunt consectetur sunt voluptate ipsum reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-container">
                        <div class="title font2 text-left">
                            <h3><Span class="red-color">About</Span> Us!</h3>
                                <h2><Span class="red-blue">CAADVOTESCS</h2>
                        </div>
                        <div class="text">
                            <p> Non est sint anim pariatur nulla qui. Et ut Lorem aliqua pariatur incididunt voluptate irure eu veniam mollit qui ex commodo ipsumo.</p>
                            <br>
                            <p> Aliqua duis labore ea cillum velit proident ut laboris ea aliqua ullamco.Aliqua duis laboreea cillum velit proident ut laboris eaboris ea aliqu cillum velit proident ut laboris ea aliqua ullamco.Aliqua duis laboreea cillum velit proident ut laboris eaboris ea ali qua duis laboreea cillum velit proident ut laboris qu.</p>
                            <div class="buttons">
                                <a href="index.html#" class="button btn btn-sm btn-default btn-red radius25 btn-margin-right">Get Started Now </a>
                                <a href="index.html#" class="button btn btn-sm btn-default btn-dark radius25 btn-margin-right">Get Started Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  text image -->

    <!-- entry -->
    <div class="entry">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" data-aos="fade-right">
                    <img src="images/icons/7.png" class="img-responsive pull-left" alt="">
                    <div class="text">
                        <h4>Fast Growing Company</h4>
                        <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web page .</p>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="fade-right" data-aos-delay="100">
                    <img src="images/icons/8.png" class="img-responsive pull-left" alt="">
                    <div class="text">
                        <h4>Fast Growing Company</h4>
                        <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web page .</p>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="fade-right" data-aos-delay="200">
                    <img src="images/icons/9.png" class="img-responsive pull-left" alt="">
                    <div class="text">
                        <h4>Fast Growing Company</h4>
                        <p>Many desktop publishing packages and web page editors now use publishing packages and web page editors now use ublishing packages and web pageg.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- entry end -->


    
     <!-- section 9 -->
    <section class="section9">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12 left-image">
                    <img src="images/jpg/section9.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="title text-left">
                        <h2><span class="red-color">Join</span> us as an Associate!</h2>
                        <p>Sign up today to grow your business on every business we shared.</p>
                            <p>Are you CA/CS/Lawyer/Business Consultant/Corporates/StartupHubs, Join EzeeStartup.com "Associate Model" and grow with us together.</p>
                    </div>
                    <div class="row">
                        <div class="text-container">
                            <div class="col-sm-6">
                                <div class="text" data-aos="fade-up">
                                    <img src="images/icons/1.png" class="img-responsive" alt="">
                                    <h4>Chat with a live person</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic officiis voluptate consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text" data-aos="fade-up" data-aos-delay="100">
                                    <img src="images/icons/4.png" class="img-responsive" alt="">
                                    <h4>Professional Team</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic officiis voluptate consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="text">
                                        <img src="images/icons/5.png" class="img-responsive" alt="">
                                        <h4>Creative and Modern Design</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic officiis voluptate consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="text">
                                        <img src="images/icons/6.png" class="img-responsive" alt="">
                                        <h4>Increase your design process</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic officiis voluptate consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 9 end -->

    <!-- testimonials -->
    <div class="testimonials colorful">
        <div class="container">
           <div class="title padding">
               <h2><span class="red-color">What</span> our customers are saying</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus harum quae voluptas excepturi. Sequi fugit rem debitis culpa nesciunt, reprehenderit amet voluptates ex totam ullam, nobis laboriosam iure error commodi!</p>
           </div>
            <div class="testimonials-container" data-aos="fade-up">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active">
                            <img class="img-responsive " src="images/jpg/1.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1">
                            <img class="img-responsive" src="images/jpg/2.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2">
                            <img class="img-responsive" src="images/jpg/3.jpg" alt="">
                        </li>
                    </ol>
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="index.html#quote-carousel" class="left carousel-control">
                        <i class="fa fa-long-arrow-alt-left"></i>
                    </a>
                    <a data-slide="next" href="index.html#quote-carousel" class="right carousel-control">
                        <i class="fa fa-long-arrow-alt-right"></i>
                    </a>
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                            <br>
                                            <small>Chris Blake</small>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                            <br>
                                            <small>Chris Blake</small>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                            <br>
                                            <small>Chris Blake</small>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials -->

    

    <!-- partners -->
    <div class="partners style2">
            <div class="container">
                <div class="images">
                    <div class="col-sm-2 col-xs-4" data-aos="fade-right">
                        <img src="images/png/partner1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="50">
                        <img src="images/png/partner2.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="100">
                        <img src="images/png/partner3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="150">
                        <img src="images/png/partner4.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="200">
                        <img src="images/png/partner5.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="250">
                        <img src="images/png/partner6.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- partners -->

    @include('site.includes.footer');