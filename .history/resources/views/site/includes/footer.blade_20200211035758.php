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
                            <!--div class="newsletter">
                                <h4>Subscribe to our newsletter</h4>
                                <input type="text" id="mc_email1" class="field-input" name="mc_email" placeholder=" Enter Your Email Address...">
                                <input class="subscribe-btn bgcolor" id="btn_newsletter_1" type="submit" value="Sign Up">
                            </div-->
                            <br>
                            <div class="text-container">
                              <img src="../../images/logos/logo-white.png"  class="logo logo-display" style="width:250px" alt=""><br><br><hr>
                                <p>Caadvocatescs.com is owned by Caadvocatecs Pvt. Ltd. Its a group of professionals having diverse knowledge and experience, who have come together to start this venture to provide a wide range of value-added services to startups for their new ventures and for existing clients.</p>
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
                                    <a href="/category/{{$fc->categoryname}}">{{$fc->categoryname}}</a>
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
    <link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Roboto:500,700">
    <script src="https://a.vakilsearch.com/live-js/website_revamp_innerpages_new_design.js"></script>
    <script type="text/javascript" src="../../js/style.js"></script>
    <script src="https://cdn.rawgit.com/thomaspark/scoper/5de04619/scoper.min.js"></script>
    <script src="../../javascript/jquery.js"></script>
    <script src="../../javascript/validator.js"></script>
    <script src="../../javascript/aos.js"></script>
    <script src="../../javascript/jquery.waypoints.min.js"></script>
    <script src="../../javascript/jquery.counterup.js"></script>
    <script src="../../javascript/jquery.magnific-popup.js"></script>
    <script src="../../javascript/navbar.js"></script>
    <script src="../../javascript/bootstrap.min.js"></script>
    <script src="../../javascript/main.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../assets/js/custom.js"></script>
    <script src="../../js/productfilter.js"></script>
    <script src="../../assets/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="../../js/prism.js"></script>
    <script>
      var $y = jQuery.noConflict();
   </script>
    <script>

    var doc = document,
      slideList = doc.querySelectorAll('.slider-container > div'),
      pageNavContainer = doc.querySelector('.nav'),
      pageNav = doc.querySelector('.nav ul'),
      toggleHandle = doc.querySelector('.nav-toggle-handle'),
      divider = window.innerHeight / 2,
      scrollTimer,
      resizeTimer;

    toggleHandle.onclick = function () {
    var classN = pageNavContainer.className;
    pageNavContainer.className = (classN.indexOf(' active') > 0) ? classN.replace(' active', '') : classN + ' active';
    };

    if (window.addEventListener) {
    window.addEventListener('scroll', function () {
      clearTimeout(scrollTimer);

      scrollTimer = setTimeout(function () {
        [].forEach.call(slideList, function (el) {
          var rect = el.getBoundingClientRect(),
              navLink = pageNav.querySelector('[href="#' + el.id + '"]');
          if (rect.top <= divider && rect.bottom > divider) {
            if (navLink.className !== 'active') { navLink.className = 'active'; }
          } else {
            if (navLink.className !== '') { navLink.className = ''; }
          }
        });
      }, 100);
    });

    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);

      resizeTimer = setTimeout(function () {
        divider = window.innerHeight / 2;
      }, 100);
    });

    pageNav.addEventListener('click', function () {
      var classN = pageNavContainer.className;
      if (classN.indexOf(' active') > 0) { pageNavContainer.className = classN.replace(' active', ''); }
    });
    }

    var mobile = 'false',
      isTestPage = false,
      isDemoPage = true,
      classIn = 'jello',
      classOut = 'rollOut',
      speed = 400,
      doc = document,
      win = window,
      ww = win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth,
      fw = getFW(ww),
      initFns = {},
      sliders = new Object(),
      edgepadding = 50,
      gutter = 10;

    function getFW (width) {
    var sm = 400, md = 900, lg = 1400;
    return width < sm ? 150 : width >= sm && width < md ? 200 : width >= md && width < lg ? 300 : 400;
    }
    window.addEventListener('resize', function() { fw = getFW(ww); });
    </script>
    <script src="../../js/tiny-slider.js"></script>
    <script>

    // <script type="module">
    // import { tns } from '../src/tiny-slider.js';

    var options = {
    'base': {
      container: '',
      items: 3,
      // loop: false,
      slideBy: 'page',
      mouseDrag: true,
    },
    'start-index': {
      container: '',
      items: 3,
      slideBy: 'page',
      loop: false,
      startIndex: 6,
    },
    'few-items': {
      container: '',
      items: 9,
      edgePadding: edgepadding,
      slideBy: 'page',
      mouseDrag: true,
      arrowKeys: true,
      autoplay: true,
      loop: false,
    },
    'mouse-drag': {
      container: '',
      items: 3,
      mouseDrag: true,
      slideBy: 'page',
    },
    'mouse-drag2': {
      container: '',
      items: 3,
      mouseDrag: true,
      slideBy: 'page',
    },
    'gutter': {
      container: '',
      items: 3,
      gutter: gutter,
    },
    'edgePadding': {
      container: '',
      items: 3,
      edgePadding: edgepadding,
    },
    'edgePadding-gutter': {
      container: '',
      items: 3,
      gutter: gutter,
      edgePadding: edgepadding,
    },
    'non-loop': {
      container: '',
      // items: 3,
      loop: false,
      responsive: {
        350: {
          items: 2
        },
        500: {
          items: 3
        }
      },
    },
    'rewind': {
      container: '',
      items: 3,
      rewind: true,
    },
    'center': {
      container: '',
      items: 2,
      center: true,
      loop: false,
    },
    'slide-by-page': {
      container: '',
      items: 3,
      slideBy: 'page',
    },
    'fixedWidth': {
      container: '',
      fixedWidth: fw,
    },
    'fixedWidth-gutter': {
      container: '',
      gutter: gutter,
      fixedWidth: fw,
    },
    'fixedWidth-edgePadding': {
      container: '',
      edgePadding: edgepadding,
      fixedWidth: fw,
    },
    'fixedWidth-edgePadding-gutter': {
      container: '',
      gutter: gutter,
      edgePadding: edgepadding,
      fixedWidth: fw,
      slideBy: 2,
      loop: false,
      arrowKeys: true,
    },
    'autoWidth': {
      autoWidth: true,
      items: 3.3,
      // slideBy: 2.6,
      gutter: 10,
      mouseDrag: true,
      swipeAngle: false,
    },
    'autoWidth-non-loop': {
      autoWidth: true,
      loop: false,
      mouseDrag: true,
    },
    'autoWidth-lazyload': {
      autoWidth: true,
      items: 3.3,
      slideBy: 2.6,
      gutter: 10,
      mouseDrag: true,
      lazyload: true,
    },
    'responsive': {
      items: 2,
      controls: false,
      responsive: {
        350: {
          items: 3,
          controls: true,
          edgePadding: 30,
        },
        500: {
          items: 4
        }
      },
    },
    'responsive1': {
      container: '',
      gutter: 10,
      slideBy: 1,
      responsive: {
        350: {
          items: 2,
          edgePadding: 20,
        },
        500: {
          items: 3,
          gutter: 0,
          edgePadding: 40,
          slideBy: 'page',
        }
      },
    },
    'responsive2': {
      items: 3,
      autoplayTimeout: 350,
      responsive: {
        350: {
          controls: false,
          autoplay: true,
          autoplayTimeout: 1000,
          autoplayHoverPause: true,
        },
        500: {
          nav: false,
          controls: true,
          autoplay: false,
        }
      },
    },
    'responsive3': {
      items: 3,
      autoplay: true,
      responsive: {
        350: {
          controlsText: ['&lt;', '&gt;'],
          autoplayText: ['&gt;', '||'],
        },
        500: {
          controlsText: ['prev', 'next'],
          autoplayText: ['start', 'stop'],
        }
      },
    },
    'responsive4': {
      items: 3,
      responsive: {
        350: {
          touch: false,
          mouseDrag: false,
          arrowKeys: false,
        },
        500: {
          touch: true,
          mouseDrag: true,
          arrowKeys: true,
        }
      },
    },
    'responsive5': {
      fixedWidth: fw,
      autoHeight: false,
      responsive: {
        350: {
          autoHeight: true,
          fixedWidth: fw + 100,
        }
      },
    },
    'responsive6': {
      fixedWidth: fw,
      edgePadding: edgepadding,
      gutter: gutter,
      loop: false,
    },
    'arrowKeys': {
      container: '',
      items: 3,
      arrowKeys: true,
    },
    'autoplay': {
      container: '',
      items: 3,
      speed: 300,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 3500,
      autoplayText: ['▶', '❚❚'],
      // autoplayButtonOutput: false,
    },
    'vertical': {
      container: '',
      items: 3,
      axis: 'vertical',
    },
    'vertical-gutter': {
      container: '',
      items: 3,
      axis: 'vertical',
      gutter: gutter,
    },
    'vertical-edgePadding': {
      container: '',
      items: 3,
      axis: 'vertical',
      edgePadding: edgepadding,
    },
    'vertical-edgePadding-gutter': {
      container: '',
      items: 3,
      axis: 'vertical',
      gutter: gutter,
      edgePadding: edgepadding,
    },
    'animation1': {
      container: '',
      mode: 'gallery',
      items: 2,
      animateIn: classIn,
      animateOut: classOut,
      speed: 1000,
    },
    'animation2': {
      container: '',
      mode: 'gallery',
      items: 2,
      speed: 0,
    },
    'lazyload': {
      container: '',
      items: 3,
      edgePadding: 40,
      lazyload: true,
      lazyloadSelector: '.tns-lazy',
    },
    'customize': {
      container: '',
      items: 3,
      controlsContainer: '#customize-controls',
      navContainer: '#customize-thumbnails',
      navAsThumbnails: true,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayButton: '#customize-toggle',
    },
    'autoHeight': {
      container: '',
      autoHeight: true,
      items: 1,
    },
    'nested_inner': {
      container: '',
      items: 3,
      nested: 'inner',
      edgePadding: 20,
      loop: false,
      slideBy: 'page',
    },
    'nested': {
      container: '',
      items: 1,
      loop: false,
      // autoHeight: true,
      nested: 'outer',
    }
    };

    for (var i in options) {
    var item = options[i];
    item.container = '#' + i;
    item.swipeAngle = false;
    if (!item.speed) { item.speed = speed; }

    if (doc.querySelector(item.container)) {
      sliders[i] = tns(options[i]);

      // call test functions
      if (isTestPage && initFns[i]) { initFns[i](); }

      // insert code
      if (isDemoPage) {
        doc.querySelector('#' + i + '_wrapper').insertAdjacentHTML('beforeend', '<pre><code class="language-javascript">' + JSON.stringify(item, function (key, value) {
          if (typeof value === 'object') {
            if (value.id) {
              return "document.querySelector('#" + value.id + "')";
            }
          }
          return value;
        }, '  ') + '<\/code><\/pre>');
      }

    // test responsive pages
    } else if (i.indexOf('responsive') >= 0) {
      if (isTestPage && initFns[i]) { initFns[i](); }
    }
    }

    // goto
    if (doc.querySelector('#base_wrapper')) {
    var goto = doc.querySelector('#base_wrapper .goto-controls'),
        gotoBtn = goto.querySelector('.button'),
        gotoInput = goto.querySelector('input');

    gotoBtn.onclick = function (event) {
      var index = gotoInput.value;
      sliders['base'].goTo(index);
    };
    }
    </script>
    <script>

        /*setTimeout(function() {
            $('#overlay').modal('show');
        }, 5000);

        setTimeout(function() {
            $('#overlay').modal('hide');
        }, 30777000);
*/
        if($(window).width() >= 900){
            function show_more_menu(e) {
                        window.location = event.target.href;
                    }
            }
    </script>
    
    <script type="text/javascript">function add_chatinline(){var hccid=85136489;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
        add_chatinline(); </script> 
    <!-- JAVASCRIPT END -->
    <script>
      $(function () {
        $('.white-navbar').hide();
          $(document).scroll(function () {
            var $nav = $(".navbar");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            if ($('.navbar').hasClass('scrolled')){
             $('.white-navbar').show();
             $('.blue-navbar').hide();
           } else {
            $('.white-navbar').hide();
            $('.blue-navbar').show();
          }
        });
      });
      
      </script> 
      <script>
        function clickMore(id){
            $('#'+id).slideToggle(700);
        }
      </script> 
</body>

</html>
