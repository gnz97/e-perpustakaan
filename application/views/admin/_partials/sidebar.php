<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?= base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AlumniITDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url()?>assets/images/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
                <!-- Menu Dashboard -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Dashboard')?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Menu Data Pertanyaan -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Pertanyaan')?>" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>Data Pertanyaan</p>
                    </a>
                </li>
                  <!-- Menu Data Pertanyaan -->
                  <li class="nav-item">
                    <a href="<?= base_url('admin/Pertanyaan')?>" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>Data Kriteria</p>
                    </a>
                </li>

                  <!-- Menu Data Pertanyaan -->
                  <li class="nav-item">
                    <a href="<?= base_url('admin/Pertanyaan')?>" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>Data Alternatif</p>
                    </a>
                </li>

                <!-- Menu Data Pertanyaan -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Pertanyaan')?>" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>Data Alternatif Kriteria</p>
                    </a>
                </li>

                
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>