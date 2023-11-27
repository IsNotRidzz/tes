
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Siswa</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- Google Font: Source Sans Pro -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

           <!-- ============kalender js======= -->


              <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">

    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Animasi Masuk -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/beranda" class="nav-link">Beranda</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/jurusan" class="nav-link">Jurusan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/jumlahsiswa" class="nav-link">Jumlah Siswa</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
  
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E - Siswa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        @auth
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-block">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
    @endauth

    @guest
    <a href="{{ route('login') }}" class="d-block">E-Siswa</a>
    @endguest

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
           </form>
        </div>
      </div>

      <!-- SidebarSearch Form -->


       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Beranda di bawah -->
          <li class="nav-item">
            <a href="/beranda" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kelas" class="nav-link">
            <i class="nav-icon fas fa-swatchbook"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jurusan" class="nav-link">
            <i class="nav-icon fas fa-swatchbook"></i>
              <p>
                Jurusan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Daftar Jurusan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/RPL" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RPL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/DKV" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DKV</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/TKJ" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TKJ</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="/AKL" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>AKL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/BDP" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BDP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/TBS" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TBS</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/guru" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Profil Guru
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/rombel" class="nav-link">
              <i class="nav-icon fas fa-network-wired"></i>
              <p>
                Rombongan Belajar
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/kalender" class="nav-link">
              <i class="nav-icon fas fa-network-wired"></i>
              <p>
                Kalender
              </p>
            </a>
          </li>

          <li class="nav-header">==========================</li>

          <li class="nav-item">
            <a href="/login" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Login
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/register" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Register
              </p>
            </a>
          </li>

          <li class="nav-item">
             <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
           </form>
              <p>
                Logout
              </p>
            </a>
          </li>

          </aside>
          @yield('content')
          