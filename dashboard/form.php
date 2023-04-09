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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.css">
</head>
<body class="hold-transition sidebar-mini dark-mode">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include '../menu/navbar.php'; $page='form'; ?>
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
            <h1>Input SAKIP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Input SAKIP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Input SAKIP</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body text-justify">
          <form action="kirim.php" id="form" method="POST" enctype="multipart/form-data">
              <div class="card-body text-justify">
                        <div class="form-group d-none">
                            <input type="hidden" name="nama" id="nama" value="<?=$_SESSION['nama'];?>">
                        </div>
                        <div class="form-group">
                          <label for="lokasi">Komponen</label>
                          <select class="custom-select rounded-0" id="lokasi" name="lokasi">
                            <option value="">Komponen</option>
                            <option value="A Perencanaan Kinerja">A Perencanaan Kinerja</option>
                            <option value="B Pengukuran Kinerja">B Pengukuran Kinerja</option>
                            <option value="C Pelaporan Kinerja">C Pelaporan Kinerja</option>
                            <option value="D Evaluasi Kinerja">D Evaluasi Kinerja</option>
                            <option value="E Capaian Kinerja">E Capaian Kinerja</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="subfolder">Subkomponen</label>
                          <select class="custom-select rounded-0" id="subfolder" name="subfolder">
                            <option value="">Subkomponen</option>
                                <option class='a d-none' value="A. 1 Target kinerja Renstra ditetapkan dengan baik">A. 1 Target kinerja Renstra ditetapkan dengan baik</option>
                                <option class='a d-none' value="A. 2 Jangka menengah dalam Renstra telah dimonitor pencapaiannya sampai dengan tahun berjalan">A. 2 Jangka menengah dalam Renstra telah dimonitor pencapaiannya sampai dengan tahun berjalan</option>
                                <option class='a d-none' value="A. 3 Dokumen Renstra telah direviu secara berkala">A. 3 Dokumen Renstra telah direviu secara berkala</option>
                                <option class='a d-none' value="A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik"> A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik</option>
                                <option class='a d-none' value="A. 5 Target kinerja yang diperjanjikan telah digunakan untuk mengukur keberhasilan">A. 5 Target kinerja yang diperjanjikan telah digunakan untuk mengukur keberhasilan</option>
                                <option class='a d-none' value="A. 6 Rencana aksi atas kinerja telah dimonitor pencapaiannya secara berkala">A. 6 Rencana aksi atas kinerja telah dimonitor pencapaiannya secara berkala</option>
                                <option class='a d-none' value="A. 7 Rencana aksi atas kinerja telah dimanfaatkan dalam pengarahaan dan pengorganisasian kegiatan">A. 7 Rencana aksi atas kinerja telah dimanfaatkan dalam pengarahaan dan pengorganisasian kegiatan </option>
                                <option class='b d-none' value="B. 1 Terdapat mekanisme pengumpulan data kinerja">B. 1 Terdapat mekanisme pengumpulan data kinerja</option>
                                <option class='b d-none' value="B. 2 Sudah terdapat ukuran (indikator) kinerja individu yang mengacu pada IKU unit kerja organisasi /atasannya">B. 2 Sudah terdapat ukuran (indikator) kinerja individu yang mengacu pada IKU unit kerja organisasi /atasannya</option>
                                <option class='b d-none' value="B. 3 Pengukuran kinerja sudah dilakukan secara berjenjang">B. 3 Pengukuran kinerja sudah dilakukan secara berjenjang</option>
                                <option class='b d-none' value="B. 4 Pengumpulan data kinerja dapat diandalkan">B. 4 Pengumpulan data kinerja dapat diandalkan</option>
                                <option class='b d-none' value="B. 5 Pengukuran kinerja sudah dikembangkan menggunakan teknologi informasi">B. 5 Pengukuran kinerja sudah dikembangkan menggunakan teknologi informasi</option>
                                <option class='b d-none' value="B. 6  IKU telah dimanfaatkan untuk penilaian kinerja">B. 6  IKU telah dimanfaatkan untuk penilaian kinerja</option>
                                <option class='b d-none' value="B. 7 Target kinerja eselon  III dan IV telah dimonitor pencapaiannya">B. 7 Target kinerja eselon  III dan IV telah dimonitor pencapaiannya</option>
                                <option class='b d-none' value="B. 8 Hasil pengukuran (capaian) kinerja mulai dari setingkat eselon IV keatas telah dikaitkan dengan (dimanfaatkan sebagai dasar pemberian) reward & punishment">B. 8 Hasil pengukuran (capaian) kinerja mulai dari setingkat eselon IV keatas telah dikaitkan dengan (dimanfaatkan sebagai dasar pemberian) reward & punishment</option>
                                <option class='c d-none' value="C. 1 Laporan Kinerja telah di-upload ke dalam website">C. 1 Laporan Kinerja telah di-upload ke dalam website</option>
                                <option class='c d-none' value="C. 2 Laporan kinerja menyajikan informasi mengenai pencapaian IKU">C. 2 Laporan kinerja menyajikan informasi mengenai pencapaian IKU</option>
                                <option class='c d-none' value="C. 3 Laporan kinerja menyajikan informasi mengenai kinerja yang telah diperjanjikan">C. 3 Laporan kinerja menyajikan informasi mengenai kinerja yang telah diperjanjikan</option>
                                <option class='c d-none' value="C. 4 Laporan kinerja menyajikan evaluasi dan analisis mengenai capaian kinerja">C. 4 Laporan kinerja menyajikan evaluasi dan analisis mengenai capaian kinerja</option>
                                <option class='c d-none' value="C. 5 Laporan kinerja menyajikan pembandingan data kinerja yang memadai antara realisasi tahun ini dengan realisasi tahun ini dengan realisasi tahun sebelumnya dan pembanding lain yang diperlukan">C. 5 Laporan kinerja menyajikan pembandingan data kinerja yang memadai antara realisasi tahun ini dengan realisasi tahun ini dengan realisasi tahun sebelumnya dan pembanding lain yang diperlukan</option>
                                <option class='c d-none' value="C. 6 Laporan kinerja menyajikan informasi tentang analisis efiensi penggunaan sumber daya">C.6 Laporan kinerja menyajikan informasi tentang analisis efiensi penggunaan sumber daya/option>
                                <option class='c d-none' value="C. 7 Laporan kinerja menyajikan informasi keuangan yang terkait dengan pencapian sasaran kinerja instansi">C.7 Laporan kinerja menyajikan informasi keuangan yang terkait dengan pencapian sasaran kinerja instansi</option>
                                <option class='c d-none' value="C. 8 Informasi kinerja dalam laporan kinerja">C.8 Informasi kinerja dalam laporan kinerja </option>
                                <option class='c d-none' value="C. 9 Informasi yang disajikan telah digunakan untuk peningkatan kinerja">C.9 Informasi yang disajikan telah digunakan untuk peningkatan kinerja</option>
                                <option class='c d-none' value="C. 10 Informasi yang disajikan telah digunakan untuk penilaian kinerja">C.10 Informasi yang disajikan telah digunakan untuk penilaian kinerja</option>
                                <option class='d d-none' value="D. 1 Terdapat pemantauan kemajuan pencapaian kinerja beserta hambatannya">D. 1 Terdapat pemantauan kemajuan pencapaian kinerja beserta hambatannya</option>
                                <option class='d d-none' value="D. 2 Evaluasi atas pelaksanaan Rencana Aksi telah dilakukan">D. 2 Evaluasi atas pelaksanaan Rencana Aksi telah dilakukan</option>
                                <option class='d d-none' value="D. 3 Hasil evaluasi telah disampaikan dan dikomunikasikan kepada pihak-pihak yang berkepentingan ">D. 3 Hasil evaluasi telah disampaikan dan dikomunikasikan kepada pihak-pihak yang berkepentingan </option>
                                <option class='d d-none' value="D. 4 Evaluasi kinerja telah dilaksanakan oleh SDM yang berkompeten ">D. 4 Evaluasi kinerja telah dilaksanakan oleh SDM yang berkompeten </option>
                                <option class='d d-none' value="D. 5 Pelakasnaan evaluasi kinerja telah disupervisi dengan baik melalui pembahasan-pembahasan yang reguler dan bertahap">D. 5 Pelakasnaan evaluasi kinerja telah disupervisi dengan baik melalui pembahasan-pembahasan yang reguler dan bertahap</option>
                                <option class='d d-none' value="D. 6 Evaluasi kinerja telah memberikan rekomendasi-rekomendasi perbaikan manajemen kinerja yang dapat dilaksanakan">D. 6 Evaluasi kinerja telah memberikan rekomendasi-rekomendasi perbaikan manajemen kinerja yang dapat dilaksanakan</option>
                                <option class='d d-none' value="D. 7 Pemantauan Rencana Aksi dilaksanakan dalam rangka mengendalikan kinerja">D. 7 Pemantauan Rencana Aksi dilaksanakan dalam rangka mengendalikan kinerja</option>
                                <option class='d d-none' value="D. 8 Pemantauan Rencana Aksi telah memberikan alternatif perbaikan yang dapat dilaksanakan">D. 8 Pemantauan Rencana Aksi telah memberikan alternatif perbaikan yang dapat dilaksanakan</option>
                                <option class='d d-none' value="D. 9 Hasil evaluasi Rencana Aksi telah menunjukkan perbaikan setiap periode">D. 9 Hasil evaluasi Rencana Aksi telah menunjukkan perbaikan setiap periode</option>
                                <option class='d d-none' value="D. 10 Hasil evaluasi kinerja telah ditindaklanjuti untuk perbaikan penerapan manajemen kinerja">D. 10 Hasil evaluasi kinerja telah ditindaklanjuti untuk perbaikan penerapan manajemen kinerja</option>
                                <option class='d d-none' value="D. 11 Hasil evaluasi kinerja telah ditindaklanjuti untuk mengukur keberhasilan unit kerja">D. 11 Hasil evaluasi kinerja telah ditindaklanjuti untuk mengukur keberhasilan unit kerja</option>
                                <option class='e d-none' value="E. 1 Target capaian kinerja dapat dicapai">E. 1 Target capaian kinerja dapat dicapai</option>
                                <option class='e d-none' value="E. 2 Capaian Kinerja lebih baik dari sebelumnya">E. 2 Capaian Kinerja lebih baik dari sebelumnya</option>
                                <option class='e d-none' value="E. 3 Informasi mengenai kinerja dapat diandalkan">E. 3 Informasi mengenai kinerja dapat diandalkan</option>
                                <option class='e d-none' value="E. 4 Inisiatif dalam pemberantasan korupsi">E. 4 Inisiatif dalam pemberantasan korupsi</option>
                                <option class='e d-none' value="E. 5 Inovasi dalam manajemen kinerja">E. 5 Inovasi dalam manajemen kinerja</option>
                                <option class='e d-none' value="E. 6 Penghargaan-penghargaan lainnya">E. 6 Penghargaan-penghargaan lainnya</option>
                            

                          </select>
                        </div>
                        <div class="form-group">
                          <label for="kegiatan">Kegiatan / Nama</label>
                          <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Input Kegiatan / Nama">
                        </div>
                        <div class="form-group">
                          <label for="subfolder">Jenis</label>
                          <select class="custom-select rounded-0" id="jenis" name="jenis">
                            <option value="">Jenis</option>
                            <option value="Undangan">Undangan</option>
                            <option value="Notulensi">Notulensi</option>
                            <option value="Daftar Hadir">Daftar Hadir</option>
                            <option value="SK">SK</option>
                            <option value="Jadwal Kegiatan">Jadwal Kegiatan</option>
                            <option value="Laporan">Laporan</option>
                            <option value="CKP">CKP</option>
                            <option value="IKI">IKI</option>
                            <option value="IKU">IKU</option>
                            <option value="FRA">FRA</option>
                            <option value="Dokumentasi">Dokumentasi</option>
                            <option value="RA">RA</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="file">File input</label>
                            <div class="custom-file">
                              <input type="file" name=file class="custom-file-input" id="file">
                              <label class="custom-file-label" for="file">Choose file</label>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="kirim" id="kirim" class="btn btn-primary">Submit</button>
                </div>
          </form>
        </div>

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
<script src="../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.js"></script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
<script>
  $("#lokasi").on('change',function(){
    var lokasi = $("#lokasi").val();
    if (lokasi == "A Perencanaan Kinerja") {
      $(".a").removeClass("d-none");
      $(".b").addClass("d-none");
      $(".c").addClass("d-none");
      $(".d").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "B Pengukuran Kinerja") {
      $(".b").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".c").addClass("d-none");
      $(".d").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "C Pelaporan Kinerja") {
      $(".c").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".b").addClass("d-none");
      $(".d").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "D Evaluasi Kinerja") {
      $(".d").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".b").addClass("d-none");
      $(".c").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "E Capaian Kinerja") {
      $(".e").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".b").addClass("d-none");
      $(".c").addClass("d-none");
      $(".d").addClass("d-none");
    }
  })


</script>
    <script>
      $(document).ready(function(){
        $('#form').on('submit',function(e){
          e.preventDefault();
            var lokasi = $("#lokasi").val();
            var subfolder = $("#subfolder").val();
            var kegiatan = $("#kegiatan").val();
            var file = $("#file").val();
            if (lokasi == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"Komponen tidak boleh kosong",
                })
            } else if (subfolder == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"Subkomponen tidak boleh kosong",
                })
            } else if (kegiatan == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"Kegiatan tidak boleh kosong",
                })
            } else if (file == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"File tidak boleh kosong",
                })
            } else {
              $.ajax({
              url:"kirim.php",
              method:"POST",
              data:new FormData(this),
              contentType:false,
              processData:false,
            }).done(function(resp) {
              Swal.fire({
                  icon:"success",
                  title:"Berhasil ",
                  text:"Data berhasil disimpan",
              }).then(function() {
              window.location = "index.php";
              });
            })
          } 
        });
      });
    </script>

<!-- AdminLTE for demo purposes -->
</body>
</html>
