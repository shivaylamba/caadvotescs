
@include('site.includes.header');

<!-- header 1 -->
<div class="header1 blog-post" style="background: url(../../images/blog-posts/blog-page.jpg) !important; background-size:no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="text-container text-left">
                    <a href="index.html">Home / </a>
                    <a href="blog-post.html#"> Services</a>
                    <h2 style="color:#fff !important;">All Services</h2>
                    <p style="color:#fff !important;">In a professional context it often happens that private or corporate clients.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header 1 end -->

 <!-- service 6 -->
 <div class="services6">
    <div class="container">
        <div class="row">
            <div class="title padding">
            <h2>Under <span class="red-color">{{$category[0]->categoryname}}</span> we have</h2>
                <p>Ex nisi amet commodo exercitation ea laborum tempor. Aute veniam sit nostrud voluptate culpa aute x nisi amet commodo exercitation ea laborum tempor. Aute veniam sit nostrud voluptate culpa aute.</p>
                <br>
                <div class="line-thin"></div>
                <div class="line-thicken"></div>
            </div>
             <!-- text with 3 column -->
            <section class="two-col-text text-columns">
                <div class="container">
                    <div class="row">
                        @foreach($subcategory as $sub)
                        <div class="col-sm-3 col-xs-12">
                            <h4>This is one col example with text</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam repellendus nisi quia molestias tempora obcaecati inventore vitae, nesciunt unde, quis consequuntur provident.</p>
                        </div><br>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- service 6 -->
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