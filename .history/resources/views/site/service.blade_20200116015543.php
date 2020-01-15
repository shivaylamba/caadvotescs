@include('site.includes.header');

    <!-- header 1 -->
    <div class="header1 blog-post">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-container text-left">
                        <a href="index.html">Home / </a>
                        <a href="blog-post.html#"> Blog Post</a>
                        <h2>{{serviceContent[0]->servicename}}</h2>
                        <p>In a professional context it often happens that private or corporate clients.</p>
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
                        <div class="blog-img">
                        </div>
                        <div class="post-title">
                            <h2>Just a dummy text</h2>
                            <div class="blog-date">
                                <p>Monday / Aug 2019</p>
                            </div>
                        </div>
                        <div class="post-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.Lorem ipsum dolor sit amet
                                consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore
                                magna aliqua uta enim ad minim ven iam quis nostru exercitation ullamco labor nisi ut
                                aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore
                                reprehenderit.</p>
                            <h4 class="blog-quote">"The wise man therefore always holds in these matters"</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.Lorem ipsum dolor sit amet
                                consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et
                                dolore magna aliqua uta enim ad minim ven iam quis nostru exercitation ullamco
                                labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
                                labore dolore reprehenderit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
                                incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostru
                                exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
                                dolor in elit sed uta labore dolore reprehenderit.Lorem ipsum dolor sit amet
                                consectetur adipisicing elit sedc dnmo eiusmod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ends here -->
   
   @include('site.includes.footer');