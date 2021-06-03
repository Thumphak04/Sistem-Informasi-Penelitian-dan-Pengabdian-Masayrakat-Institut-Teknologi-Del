<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('../main/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('../main/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('../main/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('../main/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('../main/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('../main/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('../main/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('../main/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('../main/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('../main/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="@yield('halaman1')" class="nav-link">@yield("nama_halaman1")</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="@yield('halaman2')" class="nav-link">@yield("nama_halaman2")</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="@yield('halaman3')" class="nav-link">@yield("nama_halaman3")</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="@yield('halaman4')" class="nav-link">@yield("nama_halaman4")</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="@yield('halaman5')" class="nav-link">@yield("nama_halaman5")</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    
      <!-- Menu Notifikasi -->
     
       
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../main/dist/img/Del_Logo.png" alt="LPPM IT Del" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LPPM<br>
      Institut Teknologi Del
      </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{url('/Dashboard')}}"  class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
            </i>
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="{{url('/Proposal Penelitian NEW')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Penelitian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/Pengabdian')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pengabdian
              </p>
            </a>
           </li>
          </li>
          <li class="nav-item">
            <a href="{{url('/Tim Monev')}}" class="nav-link">
            <i class="fas fa-user-shield"></i>
              <p>
                Tim Monev
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="{{url('/Pengumuman')}}" class="nav-link">
            <i class="fas fa-scroll"></i>
              <p>
               Pengumuman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/Laporan')}}" class="nav-link">
            <i class="fas fa-file"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/Artikel')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content Breadcum -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('nama_halaman')</h1>
          </div><!-- /.col -->
       
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @yield('content')










  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 09-PA_2 D4 TRPL <a href="www.del.ac.id">LPPM |Institut teknologi Del</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('../main/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('../main/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('../main/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('../main/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('../main/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('../main/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('../main/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('../main/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('../main/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('../main/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('../main/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('../main/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('../main/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('../main/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('../main/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('../main/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('../main/dist/js/pages/dashboard.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('../main/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-buttons/js/buttons.bootstrap4.min.jsv')}}"></script>
<script src="{{asset('../main/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('../main/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('../main/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('../main/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('../main/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('../main/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
