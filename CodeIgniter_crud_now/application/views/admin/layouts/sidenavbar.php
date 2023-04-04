<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo base_url()?>public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Cloths brand</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ujjwal Rai</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/home/index')?>"" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                    DASHBOARD
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/home/category')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                    CATEGORY
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo site_url('admin/home/sub_category')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                    SUB-CATEGORY
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