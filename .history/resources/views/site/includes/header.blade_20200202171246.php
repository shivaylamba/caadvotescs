<!DOCTYPE HTML>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Ca</title>

    <!-- CSS Style -->

    <link   href="../../assets/css/custom.css" rel="stylesheet">
    <link href="../../style/other/bootstrap.min.css" rel="stylesheet">
    <link href="../../style/other/animate.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../../style/other/magnific-popup.css" rel="stylesheet">
    <link href="../../style/other/preload.css" rel="stylesheet">
    <link href="../../style/other/aos.css" rel="stylesheet">
    <!-- main css files -->
    <link href="../../style/navbar.css" rel="stylesheet">
    <link href="../../style/style.css" rel="stylesheet">
    <link href="../../style/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../../css/style2.css" />
    

    <link href="../../css/layerslider.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader -->

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav no-shadow">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                @if (Auth::guest())
                <a class="navbar-brand" href="/">
                    <img src="../../images/logos/logo-white.png"  class="logo logo-display" alt="">
                    <img src="../../images/logos/logo-black.png"  class="logo logo-scrolled" alt="">
                </a>
                @else 
                <a class="navbar-brand" href="/user/home">
                    <img src="../../images/logos/logo-white.png"  class="logo logo-display" alt="">
                    <img src="../../images/logos/logo-black.png"  class="logo logo-scrolled" alt=""-->
                </a>
                @endif
            </div>
            <!-- End Header Navigation -->
            <?php
            
            ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="slideOutUp">
                    @if(count($category) > 0)
                    @foreach ($category as $menu)
                    <li class="dropdown megamenu-fw">
                        <a  href="/category/{{$menu->categoryname}}" onclick='show_more_menu(event)' class="dropdown-toggle" data-toggle="dropdown">{{$menu->categoryname}}</a>
                        <ul class="dropdown-menu megamenu-content move-left" role="menu">
                            <li>
                                <div class="row">
                                    @if (count($subcategory) > 0)
                                    @foreach ($subcategory as $submenu)
                                    @if ($submenu->ParentCategory == $menu->categoryname)
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">{{$submenu->subcategoryname}}</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li>
                                                    @foreach ($services as $page)
                                                        @if ($page->subcategory == $submenu->subcategoryname)
                                                        <a href="/public/services/{{$page->slug}}">{{$page->servicename}}</a>
                                                        @endif
                                                    @endforeach
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                    @endforeach
                    @endif
                    @if (Auth::guest())
                    <li class="dropdown">
                        <a href="index.html#" class="submenu dropdown-toggle" data-toggle="dropdown">Join Us</a>
                        <ul class="dropdown-menu">
                            <li>
                            <a href="{{route('user.login')}}">Login</a>
                            </li>
                            <li>
                                <a href="{{route('user.register')}}">Register</a>
                            </li>
                            <li class="dropdown">
                                <a href="index.html#" class="submenu dropdown-toggle" data-toggle="dropdown">Associates</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/associate/login">Login</a>
                                    </li>
                                    <li>
                                        <a href="/associate/register">Register</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                    <a href="index.html#" class="submenu dropdown-toggle" data-toggle="dropdown">{{substr(Auth::user()->name,0,10)}}</a>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->usertype=='admin')
                                <li>
                                <a href="/admin">Admin Panel</a>
                                </li>
                            @endif
                            <li>
                                <a onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </ul>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-custom navbar-default navbar-fixed-top scrolled" role="navigation">
        <div class="container-fluid service_page_navbar">
            <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand page-scroll white-navbar" href="https://vakilsearch.com" style="display: block;"><img alt="Official logo of VakilSearch" width="151" height="28" src="https://a.vakilsearch.com/live-images/website_revamp/brandlogo.svg"></a> <a class="navbar-brand page-scroll blue-navbar" href="https://vakilsearch.com" style="display: none;"><img alt="Official logo of VakilSearch" width="151" height="28" src="https://a.vakilsearch.com/live-images/website_revamp/brandlogo.svg"></a> </div>
            <div class="webViewMenuShow">
                <ul class="nav navbar-nav navbar-right rightmenu">
                    <li>
                        <ul class="cd-dropdown-content">
                            <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/start-a-business','_self');">Start Your Business</a> <a class="mobileViewClick" href="#">Start a Business</a>
                                <ul class="cd-dropdown-icons is-hidden fade-out">
                                    <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                                    <div class="col-md-4 col-12" style="padding-bottom: 50px">
                                        <li>
                                            <h5>Business Registration</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-company-registration">Private Limited Company</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/llp-registration-india">Limited Liability Partnership</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/one-person-company-opc-in-india">One Person Company</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/nidhi-company">Nidhi Company</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/producer-company">Producer Company</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/partnership-firm">Partnership Firm</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/proprietorship-registration-india-sole-proprietorship">Sole Proprietorship</a></li>
                                        <li>
                                            <h5>Licenses</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-food-license-fssai-registration" style="line-height: 19px;">FSSAI [Food License]</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/import-export-code">IEC [Import/Export Code]</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/apeda-registration">APEDA-RCMC Registration </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-udyog-aadhaar-registration">MSME/SSI Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/iso-certification">ISO Certification </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/digital-signature">Digital Signature Certificate </a></li>
                                        <li><a class="cd-dropdown-item item-1 more" id="more2" onclick="clickMore('panel2')">[More]</a>
                                            <ul id="panel2">
                                                <li><a class="cd-dropdown-item item-1" href="/psara-license">PSARA Licence</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/osp-license">OSP Licence</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/trade-license">Trade Licence</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Company Name Search</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/company-name-search">Company Name Search</a></li>
                                        <li>
                                            <h5>International Business Setup</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/usa-incorporation">US Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-singapore">Singapore Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1 more" id="more1" onclick="clickMore('panel1')">[More]</a>
                                            <ul id="panel1">
                                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-united-kingdom">UK Incorporation</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-netherlands">Netherlands Incorporation</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-hong-kong">Hong Kong Incorporation</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-malaysia">Malaysia Incorporation</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-china">China Incorporation</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-dubai">Dubai Incorporation</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-australia">Australia Incorporation</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="shapes-bg pull-right"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png" alt="google review" class="google" src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png" alt="" class="smile" src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png"> </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/tax-registrations-and-filings','_self');">Tax &amp; Compliance</a> <a href="#" class="mobileViewClick">Tax &amp; Compliance</a>
                                <ul class="cd-dropdown-icons mc-mobileView1024">
                                    <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Corporate Compliance</h5>
                                        </li>
                                        <li>
                                            <p class="menu-sub-heading"><strong>Mandatory Annual Filings</strong></p>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/company-maintenance-package">Private Limited Company / OPC</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/llp-annual-filings">Limited Liability Partnership</a></li>
                                        <li>
                                            <h5>Changes in Pvt Ltd Company</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/appointment-of-a-director">Add a Director</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/removal-of-a-director">Remove a Director </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/increase-in-authorized-capital">Increase Authorized Capital </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/close-your-private-limited-company">Close the Pvt Ltd Company </a></li>
                                        <li><a class="cd-dropdown-item item-1 more" id="more3" onclick="clickMore('panel3')">[More]</a>
                                            <ul id="panel3">
                                                <li><a class="cd-dropdown-item item-1" href="/change-the-objectives-of-your-business">Change Objective/Activity </a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/change-the-official-address-of-your-business-within-the-city">Change Address</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/change-your-company-name">Change Company Name</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h5>Labour Compliance</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-pf-registration">Provident Fund (PF) Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-esi-registration">ESI Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/professional-tax-registration">Professional Tax Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/shop-and-establishment-license">Shops and Establishments License</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/esop">Employee Stock Option Plan [ESOP]</a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Accounting &amp; Tax</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/accounting-bookkeeping-services">Accounting and Book-keeping</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/payroll-service-india">Payroll Maintenance</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-tds-return">TDS Return Filing</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/income-tax-return-filing-online">Individual Income Tax Filing</a></li>
                                        <li>
                                            <h5>GST</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/gst-india/gst-registration">GST Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/gst-india/gst-return-filing">GST Filing</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/gst-india">GST Advisory</a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Changes in Limited Liability Partnership</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/adding-a-designated-partner">Add Designated Partner </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/change-llp-agreement">Changes to LLP Agreement </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/close-your-limited-liability-partnership">Close the LLP </a></li>
                                        <li>
                                            <h5>Convert Your Business</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/convert-your-sole-proprietorship-into-a-private-limited-company">Proprietorship to Pvt Ltd Company </a></li>
                                        <li><a class="cd-dropdown-item item-1 more" id="more11" onclick="clickMore('panel11')">[More]</a>
                                            <ul id="panel11">
                                                <li><a class="cd-dropdown-item item-1" href="/convert-your-partnership-into-an-llp">Partnership to LLP</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/convert-your-private-limited-company-into-a-public-limited-company">Private to Public Limited Company</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/convert-plc-to-opc">Private to One Person Company</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="secretarial-audit-package-for-companies">Compliance Check - Secretarial Audit</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/due-diligence-of-company">Due Digilence</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/proposal-for-rbi-compounding-application">RBI Compliance</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/trademark-and-copyright','_self');">Trademark &amp; IP</a> <a href="#" class="mobileViewClick">Trademark &amp; IP</a>
                                <ul class="cd-dropdown-icons">
                                    <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Trademark</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-trademark-registration">Trademark Registration </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/trademark-search">Search for Trademark </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/trademark-objection">Respond to TM Objection </a></li>
                                        <li><a class="cd-dropdown-item item-1 more" id="more4" onclick="clickMore('panel4')">[More]</a>
                                            <ul id="panel4">
                                                <li><a class="cd-dropdown-item item-1" href="/trademark-watch">Trademark Watch</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/trademark-renewal">Trademark Renewal</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/trademark-assign">Trademark Assignment</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/usa-trademark">USA Trademark </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/logo-design">Logo Design </a></li>
                                        <li>
                                            <h5>Copyright</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/copyright-registration">Copyright Registration</a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Patent</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/patent-search">Patent Search </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/provisional-patent">Provisional Application </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/permanent-patent">Permanent Patent </a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="shapes-bg pull-right"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png" alt="google review" class="google" src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png" alt="" class="smile" src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png"> </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/fund-raising-investments','_self');">Fundraising</a> <a href="#" class="mobileViewClick">Fundraising </a>
                                <ul class="cd-dropdown-icons tm-mobileView">
                                    <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Fundraising </h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/fundraising">Fundraising </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/business-plan-pitch">Pitch Deck</a></li>
                                        <li>
                                            <h5>Legal </h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/share-purchase-agreement">Share Purchase Agreement </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/shareholders-agreement">Shareholders' Agreement</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/term-sheet">Term Sheet Review</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/founders-agreement">Founders Agreement</a></li>
                                    </div>
                                    <div class="col-md-4 col-12"> </div>
                                    <div class="col-md-4 col-12">
                                        <div class="shapes-bg pull-right"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png" alt="google review" class="google" src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png" alt="" class="smile" src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png"> </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/legal-documentation','_self');">Contracts</a> <a href="#" class="mobileViewClick">Contracts</a>
                                <ul class="cd-dropdown-icons ld-mobileView">
                                    <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Hiring Documents</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/employment-agreement">Employment Contract</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/consultancy-agreement">Consultancy Agreement</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/freelancer-agreement">Freelancer Agreement</a></li>
                                        <li>
                                            <h5>Website Policies</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/terms-of-service-privacy-policy">Terms of Service &amp; Privacy Policy</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/disclaimer">Disclaimer</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/joint-venture-agreement">Joint Venture Agreement</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/general-data-protection-regulation">General Data Protection Regulation [GDPR]</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/non-disclosure-agreement-nda">Non Disclosure Agreement</a></li>
                                        <li>
                                            <h5>Business Contracts</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/memorandum-of-understanding">Memorandum of Understanding</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/franchise-agreement">Franchise Agreement</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/joint-venture-agreement">Joint Venture Agreement</a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Service/ Vendor</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/service-level-agreement">Service Level Agreement</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/master-service-agreement">Master Service Agreement</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/vendor-agreement">Vendor Agreement </a></li>
                                        <li>
                                            <h5>Legal Notice</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/legal-notice">Legal Notice</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/cheque-bounce">Cheque Bounce Notice</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/money-recovery-india">Money Recovery </a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="shapes-bg pull-right"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png" alt="google review" class="google" src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png" alt="" class="smile" src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png"> </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/ngo','_self');">NGO</a> <a href="#" class="mobileViewClick">NGO</a>
                                <ul class="cd-dropdown-icons tm-mobileView fade-out">
                                    <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                                    <div class="col-md-4 col-12" style="padding-bottom: 220px">
                                        <li>
                                            <h5>Registration</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-ngo-registration">NGO</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-section-8-company-registration">Section 8</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-trust-registration">Trust Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-society-registration">Society Registration</a></li>
                                        <li>
                                            <h5>Maintenance</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/annual-compliances-of-section-8-company">Section 8 Compliance </a></li>
                                    </div>
                                    <div class="col-md-4 col-12"> </div>
                                    <div class="col-md-4 col-12">
                                        <div class="shapes-bg pull-right"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png" alt="google review" class="google" src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png" alt="" class="smile" src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png"> </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/property-and-personal','_self');">Property &amp; Personal</a> <a href="#" class="mobileViewClick">Property</a>
                                <ul class="cd-dropdown-icons pandp-mobileView pandp-mobileView1024 fade-out">
                                    <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Property</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/property-verification"> Property Title Verification</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/property-registration"> Property Registration </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/succession-certificate">Succession Certificate</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/legal-heir-certificate"> Legal Heir Certificate</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/make-a-will"> Will Drafting &amp; Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/sale-deed"> Sale Deed</a></li>
                                        <li><a class="cd-dropdown-item item-1 more" id="more5" onclick="clickMore('panel5')">[More]</a>
                                            <ul id="panel5">
                                                <li><a class="cd-dropdown-item item-1" href="/gift-deed">Gift Deed</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/rent-and-lease-agreement">Residential Rental Agreement</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/relinquishment-deed">Relinquishment Deed</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/probate-of-will">Will Probate</a></li>
                                                <li><a class="cd-dropdown-item item-1" href="/rera-complaint">RERA Complaint</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h5>Name Change &amp; Other Corrections</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/online-name-change">Name Change</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/religion-change">Religion Change</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/gender-change">Gender Change</a></li>
                                        <li>
                                            <h5>Divorce</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/mutual-divorce">Mutual Consent Divorce</a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <li>
                                            <h5>Legal Disputes</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/consumer-complaints">Consumer Complaints</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/legal-notice">Legal Notice</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/public-interest-litigation">Public Interest Litigation [PIL]</a></li>
                                        <li>
                                            <h5>Marriage</h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/marriage-registration">Marriage Registration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/court-marriage">Court Marriage</a></li>
                                        <li>
                                            <h5>Immigration </h5>
                                        </li>
                                        <li><a class="cd-dropdown-item item-1" href="/corporate-immigration">Corporate immigration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/family-immigration">Family immigration</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/college-immigration">College immigration </a></li>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="shapes-bg pull-right"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png" alt="google review" class="google" src="https://a.vakilsearch.com/live-images/website_revamp/google-and-smile.png"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png" alt="" class="smile" src="https://a.vakilsearch.com/live-images/website_revamp/shapes-bg.png"> </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="whatsapp-menu" style="width: auto; float: left;"> <a href="#" class="webClick" onclick="window.open('https://web.whatsapp.com/send?phone=917200365365&amp;text=Hello Vakilsearch!','_blank');"> <img data-src="https://a.vakilsearch.com/live-images/website_revamp/whatsapp.png" alt="whatsapp icon" class="img-responsive" style="display: inline;" src="https://a.vakilsearch.com/live-images/website_revamp/whatsapp.png"> &nbsp;+91 7200 365 365</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobileViewMenuShow">
            <div id="navbar" class="navbar-collapse collapse nopadding">
                <ul class="cd-dropdown-content" style="height: 360px; background: #fff; padding: 0 12px; position: relative; top: 0px;">
                    <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/start-a-business','_self');">Start Your Business</a> <a class="mobileViewClick" href="#">Start Your Business</a>
                        <ul class="cd-dropdown-icons is-hidden">
                            <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Business Registration</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/online-company-registration">Private Limited Company</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/llp-registration-india">Limited Liability Partnership</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/one-person-company-opc-in-india">One Person Company</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/nidhi-company">Nidhi Company</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/producer-company">Producer Company</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/partnership-firm">Partnership Firm</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/convert-your-sole-proprietorship-into-a-private-limited-company">Sole Proprietorship</a></li>
                                <li>
                                    <h5>Licenses</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/online-food-license-fssai-registration" style="line-height: 19px;">FSSAI [Food License]</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/import-export-code">IEC [Import/Export Code]</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/apeda-registration">APEDA-RCMC Registration </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/online-udyog-aadhaar-registration">MSME/SSI Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/iso-certification">ISO Certification </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/digital-signature">Digital Signature Certificate </a></li>
                                <li><a class="cd-dropdown-item item-1 more" id="mobile-more2" onclick="clickMore('mobile-panel2')">[More]</a>
                                    <ul id="mobile-panel2">
                                        <li><a class="cd-dropdown-item item-1" href="/psara-license">PSARA Licence</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/osp-license">OSP Licence</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/trade-license">Trade Licence</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Company Name Search</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/company-name-search">Company Name Search</a></li>
                                <li>
                                    <h5>International Business Setup</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/usa-incorporation">US Incorporation</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-singapore">Singapore Incorporation</a></li>
                                <li><a class="cd-dropdown-item item-1 more" id="mobile-more1" onclick="clickMore('mobile-panel1')">[More]</a>
                                    <ul id="mobile-panel1">
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-united-kingdom">UK Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-netherlands">Netherlands Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-hong-kong">Hong Kong Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-malaysia">Malaysia Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-china">China Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-dubai">Dubai Incorporation</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/incorporating-a-company-in-australia">Australia Incorporation</a></li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/mandatory-compliances','_self');">Tax &amp; Compliance</a> <a href="#" class="mobileViewClick">Tax &amp; Compliance</a>
                        <ul class="cd-dropdown-icons is-hidden">
                            <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Corporate Compliance</h5>
                                </li>
                                <li>
                                    <p class="menu-sub-heading"><strong>Mandatory Annual Filings</strong></p>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/company-maintenance-package">Private Limited Company / OPC</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/llp-annual-filings">Limited Liability Partnership</a></li>
                                <li>
                                    <h5>Changes in Pvt Ltd Company</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/appointment-of-a-director">Add a Director</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/removal-of-a-director">Remove a Director </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/increase-in-authorized-capital">Increase Authorized Capital </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/close-your-private-limited-company">Close the Pvt Ltd Company </a></li>
                                <li><a class="cd-dropdown-item item-1 more" id="mobile-more3" onclick="clickMore('mobile-panel3')">[More]</a>
                                    <ul id="mobile-panel3">
                                        <li><a class="cd-dropdown-item item-1" href="/change-the-objectives-of-your-business">Change Objective/Activity </a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/change-the-official-address-of-your-business-within-the-city">Change Address</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/change-your-company-name">Change Company Name</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Changes in Limited Liability Partnership</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/adding-a-designated-partner">Add Designated Partner </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/change-llp-agreement">Changes to LLP Agreement </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/close-your-limited-liability-partnership">Close the LLP </a></li>
                                <li>
                                    <h5>Convert Your Business</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/convert-your-sole-proprietorship-into-a-private-limited-company">Proprietorship to Pvt Ltd Company </a></li>
                                <li><a class="cd-dropdown-item item-1 more" id="mobile-more11" onclick="clickMore('mobile-panel11')">[More]</a>
                                    <ul id="mobile-panel11">
                                        <li><a class="cd-dropdown-item item-1" href="/convert-your-partnership-into-an-llp">Partnership to LLP</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/convert-your-private-limited-company-into-a-public-limited-company">Private to Public Limited Company</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/convert-plc-to-opc">Private to One Person Company</a></li>
                                    </ul>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="secretarial-audit-package-for-companies">Compliance Check - Secretarial Audit</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/due-diligence-of-company">Due Digilence</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/proposal-for-rbi-compounding-application">RBI Compliance</a></li>
                            </div>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Accounting &amp; Tax</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/accounting-bookkeeping-services">Accounting and Book-keeping</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/payroll-service-india">Payroll Maintenance</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/online-tds-return">TDS Return Filing</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/income-tax-return-filing-online">Individual Income Tax Filing</a></li>
                                <li>
                                    <h5>GST</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/gst-india/gst-registration">GST Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/gst-india/gst-return-filing">GST Filing</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/gst-india">GST Advisory</a></li>
                            </div>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Labour Compliance</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/online-pf-registration">Provident Fund (PF) Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/online-esi-registration">ESI Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/professional-tax-registration">Professional Tax Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/shop-and-establishment-license">Shops and Establishments License</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/esop">Employee Stock Option Plan [ESOP]</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/tax-registrations-and-filings','_self');">Trademark &amp; IP</a> <a href="#" class="mobileViewClick">Trademark &amp; IP</a>
                        <ul class="cd-dropdown-icons is-hidden">
                            <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                            <div class="col-md-12 col-12">
                                <li>
                                    <h5>Trademark</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/online-trademark-registration">Trademark Registration </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/trademark-search">Search for Trademark </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/trademark-objection">Respond to TM Objection </a></li>
                                <li><a class="cd-dropdown-item item-1 more" id="mobile-more4" onclick="clickMore('mobile-panel4')">[More]</a>
                                    <ul id="mobile-panel4">
                                        <li><a class="cd-dropdown-item item-1" href="/trademark-watch">Trademark Watch</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/trademark-renewal">Trademark Renewal</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/trademark-assign">Trademark Assignment</a></li>
                                    </ul>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/usa-trademark">USA Trademark </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/logo-design">Logo Design </a></li>
                                <li>
                                    <h5>Copyright</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/copyright-registration">Copyright Registration</a></li>
                            </div>
                            <div class="col-md-12 col-12">
                                <li>
                                    <h5>Patent</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/patent-search">Patent Search </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/provisional-patent">Provisional Application </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/permanent-patent">Permanent Patent </a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/trademark-and-copyright','_self');">Fundraising</a> <a href="#" class="mobileViewClick">Fundraising</a>
                        <ul class="cd-dropdown-icons is-hidden">
                            <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Fundraising </h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/fundraising">Fundraising </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/business-plan-pitch">Pitch Deck</a></li>
                                <li>
                                    <h5>Legal </h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/share-purchase-agreement">Share Purchase Agreement </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/shareholders-agreement">Shareholders' Agreement</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/term-sheet">Term Sheet Review</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/founders-agreement">Founders Agreement</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/legal-documentation','_self');">Contracts</a> <a href="#" class="mobileViewClick">Contracts</a>
                        <ul class="cd-dropdown-icons is-hidden">
                            <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                            <div class="col-md-12 col-12">
                                <li>
                                    <h5>Hiring Documents</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/employment-agreement">Employment Contract</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/consultancy-agreement">Consultancy Agreement</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/freelancer-agreement">Freelancer Agreement</a></li>
                                <li>
                                    <h5>Website Policies</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/terms-of-service-privacy-policy">Terms of Service &amp; Privacy Policy</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/disclaimer">Disclaimer</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/joint-venture-agreement">Joint Venture Agreement</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/general-data-protection-regulation">General Data Protection Regulation [GDPR]</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/non-disclosure-agreement-nda">Non Disclosure Agreement</a></li>
                                <li>
                                    <h5>Business Contracts</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/memorandum-of-understanding">Memorandum of Understanding</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/franchise-agreement">Franchise Agreement</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/joint-venture-agreement">Joint Venture Agreement</a></li>
                            </div>
                            <div class="col-md-12 col-12">
                                <li>
                                    <h5>Service/ Vendor</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/service-level-agreement">Service Level Agreement</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/master-service-agreement">Master Service Agreement</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/vendor-agreement">Vendor Agreement </a></li>
                                <li>
                                    <h5>Legal Notice</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/legal-notice">Legal Notice</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/cheque-bounce">Cheque Bounce Notice</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/money-recovery-india">Money Recovery </a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/tax-registrations-and-filings','_self');">NGO</a> <a href="#" class="mobileViewClick">NGO</a>
                        <ul class="cd-dropdown-icons is-hidden">
                            <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Registration</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/online-ngo-registration">NGO</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/online-section-8-company-registration">Section 8</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/online-trust-registration">Trust Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/online-society-registration">Society Registration</a></li>
                                <li>
                                    <h5>Maintenance</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/annual-compliances-of-section-8-company">Section 8 Compliance </a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="has-children"> <a href="#" class="webClick" onclick="window.open('/tax-registrations-and-filings','_self');">Property &amp; Personal</a> <a href="#" class="mobileViewClick">Property &amp; Personal</a>
                        <ul class="cd-dropdown-icons is-hidden">
                            <li class="go-back"><a href="#0"><strong>Menu</strong></a></li>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Property</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/property-verification"> Property Title Verification</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/property-registration"> Property Registration </a></li>
                                <li><a class="cd-dropdown-item item-1" href="/succession-certificate">Succession Certificate</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/legal-heir-certificate"> Legal Heir Certificate</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/make-a-will"> Will Drafting &amp; Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/sale-deed"> Sale Deed</a></li>
                                <li><a class="cd-dropdown-item item-1 more" id="mobile-more5" onclick="clickMore('mobile-panel5')">[More]</a>
                                    <ul id="mobile-panel5">
                                        <li><a class="cd-dropdown-item item-1" href="/gift-deed">Gift Deed</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/rent-and-lease-agreement">Residential Rental Agreement</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/relinquishment-deed">Relinquishment Deed</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/probate-of-will">Will Probate</a></li>
                                        <li><a class="cd-dropdown-item item-1" href="/rera-complaint">RERA Complaint</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Name Change &amp; Other Corrections</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/online-name-change">Name Change</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/religion-change">Religion Change</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/gender-change">Gender Change</a></li>
                                <li>
                                    <h5>Divorce</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/mutual-divorce">Mutual Consent Divorce</a></li>
                            </div>
                            <div class="col-md-6 col-12">
                                <li>
                                    <h5>Legal Disputes</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/consumer-complaints">Consumer Complaints</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/legal-notice">Legal Notice</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/public-interest-litigation">Public Interest Litigation [PIL]</a></li>
                                <li>
                                    <h5>Marriage</h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/marriage-registration">Marriage Registration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/court-marriage">Court Marriage</a></li>
                                <li>
                                    <h5>Immigration </h5>
                                </li>
                                <li><a class="cd-dropdown-item item-1" href="/corporate-immigration">Corporate immigration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/family-immigration">Family immigration</a></li>
                                <li><a class="cd-dropdown-item item-1" href="/college-immigration">College immigration </a></li>
                            </div>
                        </ul>
                    </li>
                    <li> </li>
                    <li><a href="whatsapp://send?text=Hello Vakilsearch!&amp;phone=+917200365365" class="green-color" style="color: #1bb74e !important;"><i class="fa fa-whatsapp"></i> +91 7200 365 365</a></li>
                </ul>
            </div>
        </div>
    </nav>