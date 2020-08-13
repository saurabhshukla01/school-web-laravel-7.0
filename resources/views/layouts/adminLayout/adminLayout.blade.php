<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Dashboard Laravel</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{url('adminView/plugins
/fontawesome-free/css/all.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ url('adminView/plugins
/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{url ('adminView/plugins
/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="{{url('adminView/plugins
/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
      <!-- Select2 -->
      <link rel="stylesheet" href="{{ url('adminView/plugins
/select2/css/select2.min.css') }}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{url('adminView/plugins
/icheck-bootstrap/icheck-bootstrap.min.css')}}">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{url('adminView/plugins
/jqvmap/jqvmap.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{url('adminView/css/adminlte.min.css')}}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{url('adminView/plugins
/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{url('adminView/plugins
/daterangepicker/daterangepicker.css')}}">
      <!-- summernote -->
      <link rel="stylesheet" href="{{url('adminView/plugins
/summernote/summernote-bs4.css')}}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         @include('layouts.adminLayout.adminHeader')
         @include('layouts.adminLayout.adminSidebar')
         @yield('content')
         @include('layouts.adminLayout.adminFooter')
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="{{url('adminView/plugins
/jquery/jquery.min.js')}}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{url('adminView/plugins
/jquery-ui/jquery-ui.min.js')}}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{url('adminView/plugins
/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Select2 -->
      <script src="{{url ('adminView/plugins
/select2/js/select2.full.min.js') }}"></script>
      <script>
         $('.select2').select2();
      </script>
      <!-- DataTables -->
      <script src="{{url ('adminView/plugins
/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{url ('adminView/plugins
/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!--<script src="{{url ('adminView/plugins
/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
      <script src="{{url ('adminView/plugins
/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>-->
      <!--<script>
      /*
      $(function () {
         $("#sections").DataTable({
           //"responsive": true,
           //"autoWidth": false,
         });
      });
      */
      </script>-->
      <!-- page script -->
      <script>
         $(function () {
            $("#events").DataTable();
            $("#eventcategory").DataTable();
         });
      </script>
      <!-- ChartJS -->
      <script src="{{url('adminView/plugins
/chart.js/Chart.min.js')}}"></script>
      <!-- Sparkline -->
      <script src="{{url('adminView/plugins
/sparklines/sparkline.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{url('adminView/plugins
/jqvmap/jquery.vmap.min.js')}}"></script>
      <script src="{{url('adminView/plugins
/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{url('adminView/plugins
/jquery-knob/jquery.knob.min.js')}}"></script>
      <!-- daterangepicker -->
      <script src="{{url('adminView/plugins
/moment/moment.min.js')}}"></script>
      <script src="{{url('adminView/plugins
/daterangepicker/daterangepicker.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{url('adminView/plugins
/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
      <!-- Summernote -->
      <script src="{{url('adminView/plugins
/summernote/summernote-bs4.min.js')}}"></script>
      <!-- overlayScrollbars -->
      <script src="{{url('adminView/plugins
/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{url('adminView/js/adminlte.js')}}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{url('adminView/js/pages/dashboard.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{url('adminView/js/demo.js')}}"></script>
      <!-- Custom Admin script file -->
      <script src="{{url('adminView/js/admin_script.js')}}"></script>
      <!-- Sweat Alert script file -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
   </body>
</html>
