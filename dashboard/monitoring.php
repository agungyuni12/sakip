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
  <?php include '../menu/navbar.php'; $page='monitoring'; ?>
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
            <h1>Monitoring</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Monitoring</li>
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
          <h3 class="card-title">Monitoring</h3>

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
                          <th>Komponen</th>
                          <th>Subkomponen</th>
                          <th>Status</th>

                      </tr>
                  </thead>
                  <tbody>
                            <?php
                            $id = 1;
                            if (empty($_GET['lokasi'])) {
                              $sql = mysqli_query($conn,"SELECT DISTINCT (subkomponen.subfolder),subkomponen.lokasi,form.nama_file FROM form RIGHT OUTER JOIN subkomponen ON form.subfolder = subkomponen.subfolder GROUP BY subkomponen.subfolder ORDER BY subkomponen.subfolder");
                            } else {
                              $lokasi2 = $_GET['lokasi'];
                              $sql = mysqli_query($conn,"SELECT DISTINCT (subkomponen.subfolder),subkomponen.lokasi,form.nama_file FROM form RIGHT OUTER JOIN subkomponen ON form.subfolder = subkomponen.subfolder WHERE subkomponen.lokasi = '$lokasi2' GROUP BY subkomponen.subfolder ORDER BY subkomponen.subfolder");
                            }
                              
                              if ($sql!= false && $sql->num_rows > 0) {
                              while($row = $sql->fetch_assoc()) {
                                $lokasi = $row['lokasi'];
                                $subfolder = $row['subfolder'];
                                $nama_file = $row['nama_file'];                                                        
                           ?>
                            <tr>
                                <td><?= $id++;?></td>
                                <td><a href="monitoring.php?lokasi=<?= $lokasi;?>"><?= $lokasi;?></a></td>
                                <td><?= $subfolder;?></td>
                                <?php
                                  if ($nama_file != "") {
                                    ?>
                                    <td><span class="badge badge-success">Lengkap</span></td>
                                    <?php
                                  } else {
                                    ?>
                                    <td><span class="badge badge-danger">Tidak Lengkap</span></td>
                                    <?php
                                  }
                                ?>
                                
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
