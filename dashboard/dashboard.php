<?php
include '../config/config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPD SAKIP BPS Kabupaten Dompu</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
 
</head>
<body class="hold-transition sidebar-mini dark-mode">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include '../menu/navbar.php'; $page='dashboard'; ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include '../menu/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Dashboard</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body text-justify">
                <table id="example" class="display table table-striped" style="width:100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Pengirim</th>
                          <th>Lokasi</th>
                          <th>Kegiatan</th>
                          <th>Tanggal</th>
                          <th>Download</th>

                      </tr>
                  </thead>
                  <tbody>
                            <?php
                            $id = 1;
                            
                            if (empty($_GET['lokasi']) && empty($_GET['subfolder'])) {
                              $sql = mysqli_query($conn,"SELECT * FROM form");

                            } else if (!empty($_GET['lokasi']) && empty($_GET['subfolder'])) {
                              $lokasi2 = $_GET['lokasi'];
                              $sql = mysqli_query($conn,"SELECT * FROM form WHERE lokasi = '$lokasi2' ");
                            } else {
                              $lokasi2 = $_GET['lokasi'];
                              $subfolder2 = $_GET['subfolder'];
                              $sql = mysqli_query($conn,"SELECT * FROM form WHERE lokasi = '$lokasi2' AND subfolder = '$subfolder2' ");
                            }
                              if ($sql!= false && $sql->num_rows > 0) {
                              while($row = $sql->fetch_assoc()) {
                                $lokasi = $row['lokasi'];
                                $subfolder = $row['subfolder'];
                                $kegiatan = $row['kegiatan'];
                                $nama_file = $row['nama_file'];                            
                                $tanggal = $row['tanggal'];                            
                                $nama_upload = $row['nama_upload'];                            
                           ?>
                            <tr>
                                <td><?= $id++;?></td>
                                <td><?= $nama_upload?></td>
                                <td><a href="dashboard.php?lokasi=<?= $lokasi;?>"><?= $lokasi;?></a> / <a href="dashboard.php?lokasi=<?= $lokasi;?>&subfolder=<?= $subfolder;?>"><?= $subfolder;?></a></td>
                                <td><?= $kegiatan;?></td>
                                <td><?= $tanggal;?></td>
                                <td><a href="download.php?file=<?=$nama_file ;?>" class="btn btn-block btn-light"><i class="fas fa-download"></i>Download</a></td>
                            </tr>
                            <?php
                              }
                            }
                            ?>
                  </tbody>
                </table>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include '../menu/footer.php' ;?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="../assets/js/datatable.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
