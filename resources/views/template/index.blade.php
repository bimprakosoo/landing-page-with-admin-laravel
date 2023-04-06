<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Stexo - Responsive Admin & Dashboard Template | Themesdesign</title>
  <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
  <meta content="Themesdesign" name="author" />
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

  <!-- Top Bar Start -->
  <div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
      <a href="index.html" class="logo">
                    <span class="logo-light">
                            <i class="mdi mdi-camera-control"></i> Stexo
                        </span>
        <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
      </a>
    </div>

    <nav class="navbar-custom">
      <ul class="navbar-right list-inline float-right mb-0">

        <!-- full screen -->
        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
          <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
          </a>
        </li>

        <li class="dropdown notification-list list-inline-item">
          <div class="dropdown notification-list nav-pro-img">
            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
              <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
            </div>
          </div>
        </li>

      </ul>

      <ul class="list-inline menu-left mb-0">
        <li class="float-left">
          <button class="button-menu-mobile open-left waves-effect">
            <i class="mdi mdi-menu"></i>
          </button>
        </li>
      </ul>

    </nav>

  </div>
  <!-- Top Bar End -->

  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu" id="side-menu">
          <li class="menu-title">Menu</li>
          <li>
            <a href="index.html" class="waves-effect">
              <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right">9+</span> <span> Dashboard </span>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="submenu">
              <li><a href="email-inbox.html">Inbox</a></li>
              <li><a href="email-read.html">Email Read</a></li>
              <li><a href="email-compose.html">Email Compose</a></li>
            </ul>
          </li>

          <li>
            <a href="calendar.html" class="waves-effect"><i class="icon-calendar"></i><span> Calendar </span></a>
          </li>

          <li>
            <a href="javascript:void(0);" class="waves-effect"><i class="icon-paper-sheet"></i><span> Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="submenu">
              <li><a href="pages-pricing.html">Pricing</a></li>
              <li><a href="pages-invoice.html">Invoice</a></li>
              <li><a href="pages-timeline.html">Timeline</a></li>
              <li><a href="pages-faqs.html">FAQs</a></li>
              <li><a href="pages-maintenance.html">Maintenance</a></li>
              <li><a href="pages-comingsoon.html">Coming Soon</a></li>
              <li><a href="pages-starter.html">Starter Page</a></li>
              <li><a href="pages-login.html">Login</a></li>
              <li><a href="pages-register.html">Register</a></li>
              <li><a href="pages-recoverpw.html">Recover Password</a></li>
              <li><a href="pages-lock-screen.html">Lock Screen</a></li>
              <li><a href="pages-404.html">Error 404</a></li>
              <li><a href="pages-500.html">Error 500</a></li>
            </ul>
          </li>

        </ul>

      </div>
      <!-- Sidebar -->
      <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

  </div>
  <!-- Left Sidebar End -->

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="content-page">
    <!-- Start content -->
    <div class="content">
      <div class="container-fluid">
        <div class="page-title-box">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <h4 class="page-title"></h4>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end page-title -->
        @yield('content')
        <!-- end row -->
      </div>
      <!-- container-fluid -->

    </div>
    <!-- content -->

    <footer class="footer">
      © 2019 - 2020 Stexo <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
    </footer>

  </div>
  <!-- ============================================================== -->
  <!-- End Right content here -->
  <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/metismenu.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('assets/js/waves.min.js')}}"></script>

<script src="{{ asset('assets/pages/dashboard.init.js')}}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js')}}"></script>

</body>

</html>