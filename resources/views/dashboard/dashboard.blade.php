<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Admin E-Voting | @yield('judul_halaman')</title>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- LARAVEL CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/mycss.css') }}">
<!--   <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}"> -->
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/vendor/linearicons/style.css')}}">
  <link rel="stylesheet" href="{{ asset('/vendor/chartist/css/chartist-custom.css')}}">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <!-- DATATABLES -->
  <link href="{{ asset('/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="" style="font-size:30px;font-weight:bold;"><!-- <img src="{{ asset('/img/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo"> -->
          E-Voting
        </a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('/img/user.png')}}" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="lnr lnr-exit"></i>{{ __('Logout') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </ul>
            </li>
            <!-- <li>
              <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <!-- Variabel judul halaman -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
           
            <li><a href="{{ route('home') }}" class="<?php if($judul == 'Dashboard') :?>active<?php endif;?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('admin.kandidat') }}" class="<?php if($judul == 'Kandidat') :?>active<?php endif;?>"><i class="lnr lnr-user"></i> <span>Kandidat</span></a></li>
            <li><a href="{{ route('admin.voters') }}" class="<?php if($judul == 'Voters') :?>active<?php endif;?>"><i class="lnr lnr-users"></i> <span>Voters</span></a></li>
            <li><a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="lnr lnr-exit"></i>{{ __('Logout') }}</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          @yield('konten')
        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2019 RPL SMKN 1 Kawali.</p>
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script src="{{ asset('/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{ asset('/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
  <script src="{{ asset('/vendor/chartist/js/chartist.min.js')}}"></script>
  <script src="{{ asset('/js/klorofil-common.js')}}"></script>
  @yield('js')
</body>

</html>
