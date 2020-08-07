<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a href="{{url('admin/dashboard')}}" class="nav-link">Home</a>
      </li>
   </ul>
   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <li class="nav-item">
         <!--<a class="nav-link" href="{{url('admin/logout')}}" role="button">
         Logout
         </a>-->
         <a class="nav-link confirmLogout" href="javascript:void(0);" <?php // href="{{url('admin/logout')}}" ?> response="logout" role="button">
         Logout
         </a>
      </li>
   </ul>
</nav>
<!-- /.navbar -->
