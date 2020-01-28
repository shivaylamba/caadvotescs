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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis debitis reprehenderit distinctio quis sed id earum, asperiores vitae eius. Doloremque facilis hic, deserunt rerum maiores molestiae quod dicta incidunt!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" data-aos="fade-right" data-aos-delay="50">
                        <div class="footer-title">
                            <h4>Popular Services</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                @foreach($footerps as $fps)
                                <li>
                                    <a href="/public/services/{{$fps->slug}}">{{$fps->servicename}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2" data-aos="fade-right" data-aos-delay="100">
                        <div class="footer-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                @foreach($footercategory as $fc)
                                <li>
                                    <a href="index.html#">{{$fc->categoryname}}</a>
                                </li>
                                @endforeach
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
                        <a href="mailto:hello@themekolor.co">Email: support@caadvotescs.com</a>
                        <div class="social-links">
                            <a href="index.html#">
                                <i class="fab fa-facebook-f fa-md"></i>
                            </a>
                            <a href="index.html#">
                                <i class="fab fa-twitter fa-md"></i>
                            </a>
                            <a href="index.html#">
                                <i class="fab fa-slack-hash fa-md"></i>
                            </a>
                            <a href="index.html#">
                                <i class="fab fa-linkedin-in fa-md"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--div class="container footer-img">
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right">
                        <img src="../../images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="50">
                        <img src="../../images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="../../images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="150">
                        <img src="../../images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="200">
                        <img src="../../images/png/envato.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6" data-aos="fade-right" data-aos-delay="250">
                        <img src="../../images/png/envato.png" class="img-responsive" alt="">
                    </div>
                </div-->
            </div>
        </div>
    </footer>
    <!-- footer style 1 -->

    <!-- START JAVASCRIPT -->
    <script src="../../javascript/jquery.js"></script>
    <script src="../../javascript/validator.js"></script>
    <script src="../../javascript/aos.js"></script>
    <script src="../../javascript/jquery.waypoints.min.js"></script>
    <script src="../../javascript/jquery.counterup.js"></script>
    <script src="../../javascript/jquery.magnific-popup.js"></script>
    <script src="../../javascript/navbar.js"></script>
    <script src="../../javascript/bootstrap.min.js"></script>
    <script src="../../javascript/main.js"></script>
    <script>

        setTimeout(function() {
            $('#overlay').modal('show');
        }, 5111000);

        setTimeout(function() {
            $('#overlay').modal('hide');
        }, 30000);

        if($(window).width() >= 900){
            function show_more_menu(e) {
                        window.location = event.target.href;
                    }
            }
    </script>
    
    
    <!-- JAVASCRIPT END -->
    
</body>

</html>
