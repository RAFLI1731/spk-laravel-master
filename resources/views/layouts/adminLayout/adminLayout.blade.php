<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('dashTemplate/template/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('dashTemplate/template/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  {{-- <link rel="shortcut icon" href="{{ asset('dashTemplate/template/images/favicon.png') }}" /> --}}

  @yield('cssContent')

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" ><img src="{{ asset('dashTemplate/template/images/smart.png') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" ><img src="{{ asset('dashTemplate/template/images/smart.png') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul></ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('dashTemplate/template/images/faces/user.png') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="ti-power-off text-primary"></i>
                {{ __('Logout') }}
              </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      @include('layouts.adminLayout.nav')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome, @if(Auth::user()->role == 0) @endif {{ Auth::user()->name }}</h3>
                  <h6 class="font-weight-normal mb-0">Sistem Rekomendasi Pemberian Bantuan Untuk Lansia</h6>
                </div>
                <hr>
              </div>
            </div>
            @yield('content')
          </div>



        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        {{-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Kelompok SPK SMART</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer> --}}
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <!-- plugins:js -->
  <script src="{{ asset('dashTemplate/template') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('dashTemplate/template') }}/vendors/chart.js/Chart.min.js"></script>
  {{-- <script src="{{ asset('dashTemplate/template') }}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> --}}
  <script src="{{ asset('dashTemplate/template') }}/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('dashTemplate/template') }}/js/off-canvas.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/template.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/settings.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('dashTemplate/template') }}/js/dashboard.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  @yield('jsContent')
</body>

</html>

