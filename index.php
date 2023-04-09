<?php
include 'config/config.php';

session_start();

if (isset($_SESSION['username'])) {
	header('location: dashboard/index.php');
}

?>


<!doctype html>
<html lang="en">
<head>
  	<title>Dokumen Penilaian SAKIP BPS Kabupten Dompu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
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
						<div class="img" style="background-image: url(images/IMG_0162.jpg); background-repeat: no-repeat;background-size: cover; background-position: center;">
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
							<form method="POST" action="" class="signin-form">
			      				<div class="form-group mt-3">
			      					<input type="text" class="form-control" name="usermail" id="usermail"required>
			      					<label class="form-control-placeholder" for="usermail">email</label>
			      				</div>
		           				<div class="form-group">
		              				<input id="password-field" type="password" class="form-control" name="password" id="password" required>
		              				<label class="form-control-placeholder" for="password">password</label>
		              				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		           		 		</div>
		            			<div class="form-group">
		            				<button type="submit" name="login" id="login" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
		            			</div>
		          			</form>
		          <p class="text-center">Belum Punya Akun? <a href="akses/register.php">Daftar</a></p>
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
<script src="assets/js/popper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.js"></script>

<!-- Cari username dan pass di database -->
<?php

if (isset($_POST['login'])) {
	$usermail = $_POST['usermail'];;
	$password = md5($_POST['password']);

	$sql = mysqli_query($conn,"SELECT * FROM user WHERE username = '$usermail' OR email = '$usermail' AND password = '$password'");
	if ($sql!= false && $sql->num_rows > 0) {
		$row = $sql->fetch_assoc();
		$_SESSION ['nama'] = $row['nama'];
		$_SESSION ['nip'] = $row['nip'];
		$_SESSION ['jabatan'] = $row['jabatan'];
		$_SESSION ['username'] = $row['username'];
		$_SESSION ['email'] = $row['email'];
		?>
			<script>
			Swal.fire({
				icon:"success",
				title:"Berhasil",
				text:"Selamat anda berhasil login"
			}).then(function() {
				window.location = "dashboard/index.php";

			})
			</script>
		<?php

	}
}

?>


	</body>
</html>

