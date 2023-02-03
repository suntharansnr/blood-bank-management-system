<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Save a Life | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{('Backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/summernote/summernote-bs4.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('Backend/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('Backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('Backend/plugins/toastr/toastr.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/nav.css')}}">
</head>
<body>
@include('front-pages.inc.navbar')
@yield('content')
@include('front-pages.inc.footer')
<!-- jQuery -->
<script src="{{asset('Backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('Backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('Backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('Backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('Backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('Backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('Backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('Backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('Backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('Backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('Backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('Backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Backend/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('Backend/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('Backend/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('Backend/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('Backend/plugins/toastr/toastr.min.js')}}"></script>
@yield('js')
@include('inc.toaster')
<!-- Sparkline -->
<script src="{{asset('Backend/plugins/sparklines/sparkline.js')}}"></script>
</body>
</html>
