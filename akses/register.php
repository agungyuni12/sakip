<?php
include '../config/config.php';

?>


<!doctype html>
<html lang="en">
<head>
  	<title>Dokumen Penilaian SAKIP BPS Kabupten Dompu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.css">

</head>
<body class="demo-content">
<div class="demo-wrap">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section" style="font-size: 30pt ;"><b>Dokumen Penilaian SAKIP BPS Kabupaten Dompu</b></h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(../images/IMG_0162.jpg); background-repeat: no-repeat;background-size: cover; background-position: center;">
						</div>
					<div class="login-wrap p-4 p-md-5">
				<div>
			    <div>
			    	<h3 class="mb-4">SPD SAKIP</h3>
			    	<h6 class="mb-4">(Sistem Pengumpulan Dokumen SAKIP)</h6>
			    </div>
				<div class="w-100">
					<p class="social-media d-flex justify-content-end">
					</p>
				</div>
			</div>
							<form action="" method="POST" class="signin-form">
			      				<div class="form-group mt-3">
			      					<input type="text" class="form-control" name="nama" id="nama" required>
			      					<label class="form-control-placeholder" for="nama_lengkap">Nama Lengkap</label>
			      				</div>
			      				<div class="form-group mt-3">
			      					<input type="number" class="form-control" name="nip" id="nip" required>
			      					<label class="form-control-placeholder" for="nip">NIP</label>
			      				</div>
			      				<div class="form-group mt-3">
                                  <select class="form-control" name="jabatan" id="jabatan" required>
                                                <option value="" disabled selected>Jabatan</option>
                                                <option value="Kepala BPS Kabupaten Dompu">Kepala BPS Kabupaten Dompu</option>
                                                <option value="Kepala Sub Bagian Umum">Kepala Sub Bagian Umum</option>
                                                <option value="Koordinator Fungsi Statistik Sosial">Koordinator Fungsi Statistik Sosial</option>
                                                <option value="Koordinator Fungsi Statistik Distribusi">Koordinator Fungsi Statistik Distribusi</option>
                                                <option value="Koordinator Fungsi NWAS">Koordinator Fungsi NWAS</option>
                                                <option value="Koordinator Fungsi IPDS">Koordinator Fungsi IPDS</option>
                                                <option value="Staff Sub Bagian Umum">Staff Sub Bagian Umum</option>
                                                <option value="Staff Fungsi Statistik Sosial">Staff Fungsi Statistik Sosial</option>
                                                <option value="Staff Fungsi Statistik Distribusi">Staff Fungsi Statistik Distribusi</option>
                                                <option value="Staff Fungsi Statistik Produksi">Staff Fungsi Statistik Produksi</option>
                                                <option value="Staff Fungsi NWAS">Staff Fungsi NWAS</option>
                                                <option value="Staff Fungsi IPDS">Staff Fungsi IPDS</option>
                                                <option value="Fungsional Umum">Fungsional Umum</option>
                                    </select>
			      				</div>
			      				<div class="form-group mt-3">
			      					<input type="text" class="form-control" name="username" id="username" required>
			      					<label class="form-control-placeholder" for="username">Username</label>
			      				</div>
			      				<div class="form-group mt-3">
			      					<input type="text" name="email" id="email" class="form-control" required>
			      					<label class="form-control-placeholder" for="email">Email</label>
			      				</div>
		           				<div class="form-group">
		              				<input id="password-field" name="password" type="password" class="form-control" required>
		              				<label class="form-control-placeholder" for="password">Password</label>
		              				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		           		 		</div>
		            			<div class="form-group">
		            				<button type="submit" name="daftar" id="daftar" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
		            			</div>
		          			</form>
				  <table>
					  <tr><td><a href="https://facebook.com/profile.php?id=100010762241662" class="social-icon d-flex"><span class="fa fa-facebook"></span></a></td><td></td><td><a href="https://facebook.com/profile.php?id=100010762241662">BPS Dompu</a></td></tr>
					  <tr><td><a href="https://instagram.com/bps_dompu?igshid=YmMyMTA2M2Y=" class="social-icon d-flex"><span class="fa fa-instagram"></span></a></td><td></td><td><a href="https://instagram.com/bps_dompu?igshid=YmMyMTA2M2Y=">bps_dompu</a></td></tr>
					  <tr><td><a href="https://youtube.com/channel/UC-4KfVfLt76fM2lHbSaNzUw" class="social-icon d-flex"><span class="fa fa-youtube"></span></a></td><td></td><td><a href="https://youtube.com/channel/UC-4KfVfLt76fM2lHbSaNzUw">BPS Kabupaten Dompu</a></td></tr>
					  <tr><td><a href="https://dompukab.bps.go.id/" class="social-icon d-flex"><span class="fa fa-chrome"></span></a></td><td></td><td><a href="https://dompukab.bps.go.id/">Website BPS Kabupaten Dompu</a></td></tr>
				  </table>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../assets/js/popper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.js"></script>
	
	<!--Fungsi simpan  -->
	<?php
	if (isset($_POST['daftar'])) {
		$nama = $_POST['nama'];
		$nip = $_POST['nip'];
		$jabatan = $_POST['jabatan'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$sql = mysqli_query($conn,"INSERT INTO user (nama,nip,jabatan,username,email,password) VALUES ('$nama','$nip','$jabatan','$username','$email','$password') ");
		?>
		<script>
		      Swal.fire({
                  icon:"success",
                  title:"Berhasil ",
                  text:"Data berhasil disimpan",
              }).then(function() {
              window.location = "../index.php";
              });
		</script>
		<?php
	}
	?>

	</body>
</html>

