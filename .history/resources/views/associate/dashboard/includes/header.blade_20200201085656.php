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
            <a class="nav-link {{'admin' == request()->path() ? 'active' : ''}}" href="/associate/dashboard"  role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'associate/service/host' == request()->path() ? 'active' : ''}}{{'associate/service/list' == request()->path() ? 'active' : ''}}" href="#navbar-services" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Services</span>
              </a>
              <div class="collapse" id="navbar-services">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('associate.host.service') }}" class="nav-link {{'associate/service/host' == request()->path() ? 'active' : ''}}">Host</a>
                  </li>
                  <li class="nav-item">
                    <a href="/associate/service/list" class="nav-link {{'associate/service/list' == request()->path() ? 'active' : ''}}">Currently Hosted Categories</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}" href="#navbar-govfees" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-money-coins text-red"></i>
                <span class="nav-link-text">Goverment Fees</span>
              </a>
              <div class="collapse" id="navbar-govfees">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/associate/govfees" class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}">List</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}" href="#navbar-orders" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-box-2 text-red"></i>
                <span class="nav-link-text">Orders</span>
              </a>
              <div class="collapse" id="navbar-orders">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/associate/govfees" class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}">Manage</a>
                  </li>
                  <li class="nav-item">
                    <a href="/associate/govfees" class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}">History</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}" href="#navbar-payment" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-money-coins text-green"></i>
                <span class="nav-link-text">Payment</span>
              </a>
              <div class="collapse" id="navbar-payment">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/associate/govfees" class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}">Dues</a>
                  </li>
                  <li class="nav-item">
                    <a href="/associate/govfees" class="nav-link {{'/associate/govfees' == request()->path() ? 'active' : ''}}">Paid</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{'/associate/invitations' == request()->path() ? 'active' : ''}}" href="#navbar-invitations" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-app text-purple"></i>
                <span class="nav-link-text">Invitations</span>
              </a>
              <div class="collapse" id="navbar-invitations">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/associate/invitations" class="nav-link {{'/associate/invitations' == request()->path() ? 'active' : ''}}">New Invitations Check</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{'/associate/profile' == request()->path() ? 'active' : ''}}" href="/associate/profile" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-circle-08 text-blue"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>

