<?php
include '../config/config.php';

$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$subfolder = $_POST['subfolder'];
$kegiatan = $_POST['kegiatan'];
$jenis = $_POST['jenis'];

$tmp_file = $_FILES['file']['tmp_name'];
$ext_file =  pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$nama_file = $jenis.'_'.$kegiatan.'.'.$ext_file;
$lokasi_file = "../assets/file/".$nama_file;

move_uploaded_file($tmp_file,$lokasi_file);
$sql = mysqli_query($conn,"INSERT INTO form (lokasi,subfolder,kegiatan,jenis,nama_file,tanggal,nama_upload) VALUES ('$lokasi','$subfolder','$kegiatan','$jenis','$nama_file',now(),'$nama')");
?>