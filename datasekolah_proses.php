<?php 

	include "config.php";
	//DATA Sekolah
	$npsnSekolah = $_POST['npsnsekolah'];
	$namaSekolah = $_POST['namasekolah'];
	$statusSekolah = $_POST['statussekolah'];
	$modelujianNasional = $_POST['modelujian'];
	$alamatSekolah = $_POST['alamatsekolah'];
	$tahunLulus = $_POST['tahunlulus'];
	$id = $_SESSION['id_siswa'];


	$sql = "INSERT INTO `data_sekolah` (`id_sekolah`, `id_siswa`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `model_ujian`, `alamat_sekolah`, `tahun_lulus`) VALUES (NULL, '$id', '$npsnSekolah', '$namaSekolah', '$statusSekolah', '$modelujianNasional', '$alamatSekolah', '$tahunLulus');";
	$dbh->query($sql);

	header('location:form4.php);
 ?>