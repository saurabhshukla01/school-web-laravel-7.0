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
            @if(!empty(Auth::guard('admin')->user()->image))
            <img src="{{asset('adminView/img/adminPhotos/'.Auth::guard('admin')->user()->image)}}" class="img-circle elevation-2" alt="User Pic">
            @else
            <img src="{{asset('adminView/img/adminPhotos/avatar.png')}}" class="img-circle elevation-2" alt="User Pic">
            @endif
         </div>
         <div class="info text-capitalize">
            <a href="#" class="d-block">
               {{ Auth::guard('admin')->user()->name }}
            </a>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <!-- Dashboard Link Here -->
            @if(Session::get('page')=="dashboard")
               <?php $active = "active"; ?>
            @else
               <?php $active = ""; ?>
            @endif
            <li class="nav-item">
               <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ $active }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>

            <!-- Settings Links Here -->
            @if(Session::get('page')=="settings" || Session::get('page')=="update-admin-details")
               <?php $active = "active"; ?>
            @else
               <?php $active = ""; ?>
            @endif
            <li class="nav-item has-treeview menu-open">
               <a href="#" class="nav-link {{ $active }}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                     Settings
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  @if(Session::get('page')=="settings")
                     <?php $active = "active"; ?>
                  @else
                     <?php $active = ""; ?>
                  @endif
                  <li class="nav-item">
                     <a href="{{ url('/admin/settings') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Update Admin Password</p>
                     </a>
                  </li>
                  @if(Session::get('page')=="update-admin-details")
                     <?php $active = "active"; ?>
                  @else
                     <?php $active = ""; ?>
                  @endif
                  <li class="nav-item">
                     <a href="{{ url('/admin/update-admin-details') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Update Admin Details</p>
                     </a>
                  </li>
               </ul>
            </li>

            <!-- school Management Routes -->
            <li class="nav-item has-treeview menu-open">
               <a href="#" class="nav-link {{ $active }}">
                  <i class="nav-icon fas fa-users-cog"></i>
                  <p>
                     Administration
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ url('/admin/school-categories') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>School Categories</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/gallary') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>School Gallary</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/event-categories') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>School Event Categories</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/events') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>School Events</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/news-categories') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>News Categories</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/news') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Newses</p>
                     </a>
                  </li>
               </ul>
            </li>

            <!-- school Facality Routes -->
            <li class="nav-item has-treeview menu-open">
               <a href="#" class="nav-link {{ $active }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                     Facalities
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ url('/admin/subject-categories') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Subjects</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('/admin/staff') }}" class="nav-link {{ $active }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>School Teaching Staff</p>
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
