<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="" />
  <!--  Social tags      -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:image" content="">
  <!-- Favicon -->
  <link rel="icon" href="" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Page plugins -->
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.min.css" type="text/css">
  <link rel="stylesheet" href="../../assets/css/custom.css" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="dashboard.html">
          <img src="../../assets/img/brand/logo-black.jpg" style="width:250px; height:150px;" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{'admin' == request()->path() ? 'active' : ''}}" href="/admin"  role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'users' == request()->path() ? 'active' : ''}}" href="/users" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Registered Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'create-category' == request()->path() ? 'active' : ''}}{{'create-subcategory' == request()->path() ? 'active' : ''}}{{'category-list' == request()->path() ? 'active' : ''}}{{'subcategory-list' == request()->path() ? 'active' : ''}}" href="#navbar-category" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Categories</span>
              </a>
              <div class="collapse" id="navbar-category">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/create-category" class="nav-link {{'create-category' == request()->path() ? 'active' : ''}}">Create Category</a>
                  </li>
                  <li class="nav-item">
                    <a href="/create-subcategory" class="nav-link {{'create-subcategory' == request()->path() ? 'active' : ''}}">Create SubCategory</a>
                  </li>
                  <li class="nav-item">
                    <a href="/category-list" class="nav-link {{'category-list' == request()->path() ? 'active' : ''}}">Category List</a>
                  </li>
                  <li class="nav-item">
                    <a href="/subcategory-list" class="nav-link {{'subcategory-list' == request()->path() ? 'active' : ''}}">SubCategory List</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'create-services' == request()->path() ? 'active' : ''}}{{'services-list' == request()->path() ? 'active' : ''}}" href="#navbar-services" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Services</span>
              </a>
              <div class="collapse" id="navbar-services">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/create-services" class="nav-link {{'create-services' == request()->path() ? 'active' : ''}}">Create Service Page</a>
                  </li>
                  <li class="nav-item">
                    <a href="/services-list" class="nav-link {{'services-list' == request()->path() ? 'active' : ''}}">Services List</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'/admin/services/approvals' == request()->path() ? 'active' : ''}}{{'/admin/services/total-approved' == request()->path() ? 'active' : ''}}{{'/admin/associates/invite' == request()->path() ? 'active' : ''}}" href="#navbar-servicesboard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-books text-yellow"></i>
                <span class="nav-link-text">Listed Services</span>
              </a>
              <div class="collapse" id="navbar-servicesboard">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/admin/services/approvals" class="nav-link {{'/admin/services/approvals' == request()->path() ? 'active' : ''}}">Approvals</a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/services/total-approved" class="nav-link {{'/admin/services/total-approved' == request()->path() ? 'active' : ''}}">Total Listed</a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/associates/invite" class="nav-link {{'/admin/associates/invite' == request()->path() ? 'active' : ''}}">Invite Professionals</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'admin/associates/requests' == request()->path() ? 'active' : ''}}{{'admin/associates/list' == request()->path() ? 'active' : ''}}" href="#navbar-associates" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-badge text-blue"></i>
                <span class="nav-link-text">Associates</span>
              </a>
              <div class="collapse" id="navbar-associates">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('admin.associates.request')}}" class="nav-link {{'admin/associates/requests' == request()->path() ? 'active' : ''}}">Associates Requests</a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/associates/list" class="nav-link {{'admin/associates/list' == request()->path() ? 'active' : ''}}">Total Registered Associates</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{'/admin/gove-fees/add' == request()->path() ? 'active' : ''}}{{'/admin/gove-fees/list' == request()->path() ? 'active' : ''}}" href="#navbar-govfees" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-money-coins text-red"></i>
                <span class="nav-link-text">Goverment Fees</span>
              </a>
              <div class="collapse" id="navbar-govfees">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/admin/gove-fees/add" class="nav-link {{'/admin/gove-fees/add' == request()->path() ? 'active' : ''}}">Add</a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/gove-fees/list" class="nav-link {{'admin/associates/list' == request()->path() ? 'active' : ''}}">List</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{'/admin/faq/create' == request()->path() ? 'active' : ''}}{{'/admin/faq/list' == request()->path() ? 'active' : ''}}" href="#navbar-faq" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-bulb-61 text-purple"></i>
                <span class="nav-link-text">FAQ'S</span>
              </a>
              <div class="collapse" id="navbar-faq">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/admin/faq/create" class="nav-link {{'/admin/faq/create' == request()->path() ? 'active' : ''}}">Add</a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/faq/list" class="nav-link {{'/admin/faq/list' == request()->path() ? 'active' : ''}}">List</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{'/admin/select/associate' == request()->path() ? 'active' : ''}}" href="/admin/select/associate" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-favourite-28 text-red"></i>
                <span class="nav-link-text">Give rating</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'/admin/feedbacks/list' == request()->path() ? 'active' : ''}}" href="/admin/feedbacks/list" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-favourite-28 text-red"></i>
                <span class="nav-link-text">Check Feedbacks</span>
              </a>
            </li>
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
        </div>
      </div>
    </div>
  </nav>

