
@include('site.includes.header');

    <!-- header 1 -->
    <div class="header1 blog-post" style="background: url(../../images/blog-posts/blog-page.jpg) !important; background-size:no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-container text-left">
                        <a href="index.html">Home / </a>
                        <a href="blog-post.html#"> Join</a>
                        <h2 style="color:#fff !important;">Login/Register</h2>
                    <p></p>
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
                               
                           </p>
                        </div>
                        
                        <!-- Service Items -->
                        
                        <!--- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
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