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
          <img src="../../images/logos/logo-black.png" style="width:250px; height:150px;" class="navbar-brand-img" alt="...">
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
            <a class="nav-link {{'admin' == request()->path() ? 'active' : ''}}" href="/employee/dashboard"  role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Home</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{'/operation/leads' == request()->path() ? 'active' : ''}}{{'/operation/success-leads' == request()->path() ? 'active' : ''}}{{'/operation/bill' == request()->path() ? 'active' : ''}}" href="#navbar-invitations" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-app text-purple"></i>
                <span class="nav-link-text">Leads</span>
              </a>
              <div class="collapse" id="navbar-invitations">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/operation/leads" class="nav-link {{'/operation/leads' == request()->path() ? 'active' : ''}}">All Leads</a>
                  </li>
                  <li class="nav-item">
                    <a href="/operation/success-leads" class="nav-link {{'/operation/success-leads' == request()->path() ? 'active' : ''}}">Success Leads</a>
                  </li>
                  <li class="nav-item">
                    <a href="/operation/bill" class="nav-link {{'/operation/bill' == request()->path() ? 'active' : ''}}">Generate Bill</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'/operation/work-status' == request()->path() ? 'active' : ''}}{{'/operation/success-leads' == request()->path() ? 'active' : ''}}{{'/operation/bill' == request()->path() ? 'active' : ''}}" href="#navbar-invitations" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-app text-purple"></i>
                <span class="nav-link-text">Work Ststua</span>
              </a>
              <div class="collapse" id="navbar-invitations">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/operation/work-status" class="nav-link {{'/operation/work-status' == request()->path() ? 'active' : ''}}">Check Associate Feedback</a>
                  </li>
                </ul>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>

