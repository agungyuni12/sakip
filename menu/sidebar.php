<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-white" style="opacity: .8">
      <span class="brand-text font-weight-light">SPD SAKIP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="../dashboard/index.php" class="nav-link <?php if ($page == 'beranda') {
              echo 'active';
            } ?>">
                  <i class="far fa-solid fa-house-chimney"></i>
                  <p>BERANDA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/form.php"  class="nav-link <?php if ($page == 'form') {
              echo 'active';
            } ?>">
                  <i class="far fa-solid fa-table-list"></i>
                  <p>FORM INPUT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/dashboard.php" class="nav-link <?php if ($page == 'dashboard') {
              echo 'active';
            } ?>">
                  <i class="far fa-solid fa-gauge"></i>
                  <p>DASHBOARD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/monitoring.php" class="nav-link <?php if ($page == 'monitoring') {
              echo 'active';
            } ?>">
                  <i class="far fa-solid fa-tv"></i>
                  <p>MONITORING</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>