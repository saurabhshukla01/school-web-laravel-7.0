<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{ url('/admin/dashboard') }}" class="brand-link">
   <img src="{{asset('adminView/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
   <span class="brand-text font-weight-light">Admin Panel</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{asset('adminView/img/avatar.png')}}" class="img-circle elevation-2" alt="User Pic">
         </div>
         <div class="info text-capitalize">
            <a href="#" class="d-block">SK Shukla</a>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item active">
               <a href="{{ url('/admin/dashboard') }}" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>

            <li class="nav-item has-treeview menu-open">
               <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>
                     Catalogues
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ url('/admin/brands') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Brands</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/sections') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sections</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/categories') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Categories</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/products') }}" class="nav-link ">
                        <!--<i class="far fa-circle nav-icon"></i>-->
                        <i class="nav-icon fas fa-biohazard"></i>
                        <p>Products</p>
                     </a>
                  </li>
               </ul>
            </li>

            <li class="nav-item has-treeview menu-open">
               <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                     Settings
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ url('/admin/settings') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Update Admin Password</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/update-admin-details') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Update Admin Details</p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
