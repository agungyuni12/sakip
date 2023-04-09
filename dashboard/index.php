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
</head>
<body class="hold-transition sidebar-mini dark-mode">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include '../menu/navbar.php'; $page='beranda'; ?>
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
            <h1>Beranda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Beranda</li>
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
          <h3 class="card-title">Apa itu SAKIP ?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body text-justify">
        <p>
          SAKIP merupakan Sistem Akuntabilitas Kinerja Instansi
          Pemerintahan, dimana sistem ini merupakan integrasi dari sistem
          perencanaan, sistem penganggaran dan sistem pelaporan kinerja, yang
          selaras dengan pelaksanaan sistem akuntabilitas keuangan. Dokumentasi
          yang bagus dan terkoordinir sangat diperlukan untuk bukti dukung penilaian
          SAKIP. Dokumentasi kegiatan, surat undangan, notulensi rapat dan
          sebagainya yang dilakukan di BPS Kabupaten Dompu kurang terkoordinir
          sehingga ketika membuthkan dokumen yang berkaitan dalam pemberkasan
          bukti dukung penilain SAKIP akan membutuhkan waktu yang lama karena
          kesulitan mencari dokumen tersebut atau dokumen tersebut tidak ditemukan
          dikarenakan hilang. 
        </p>
        <br>
        <p>
          Oleh karena itu dibutuhkan suatu sistem yang dapat menyimpan semua dokumentasi terkait penilaian SAKIP BPS Kabupaten Dompu dengan baik dan terkoordinir dengan rapi sehingga dapat mempermudah BPS Kabupaten Dompu dalam mempersiapkan dokumen-dokumen yang diperlukan dalam penilaian SAKIP
        </p>
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
<!-- AdminLTE for demo purposes -->
</body>
</html>
