<script src="https://kit.fontawesome.com/fcda12aed1.js" crossorigin="anonymous"></script>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa-solid fa-user"></i>
          <span><?=$_SESSION['nama'];?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="../akses/logout.php" class="dropdown-item">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Logout
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>