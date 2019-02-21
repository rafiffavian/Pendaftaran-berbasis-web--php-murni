<?php 

	include("config.php");
	//SIGN UP
	// echo "proses";
	//DATA SISWA
	$NIK = $_POST['nik'];
	$NISN = $_POST['nisn'];
	$NIS = $_POST['nis'];
	$namaLengkap = $_POST['namalengkap'];
	$jenisKelamin = isset($_POST['rbone'])?$_POST['rbone']:0;
	$tempatKelahiran = $_POST['tempatlahir'];
	$tanggalLahir = $_POST['tanggal'];
	$bulanLahir = $_POST['bulan'];
	$tahunLahir = $_POST['tahun'];
	$Agama = $_POST['agama'];
	$Alamat = $_POST['alamat'];

	$noHp = $_POST['nik'];
	$gambar = 'gambar';
	$tekan = $_POST['proses'];
	$id = $_SESSION['id_siswa'];

	$_SESSION['form1'] = $_POST;
	// print_r($_POST);die();
	if($tekan == "OK"){
		$sql = "UPDATE `siswa` SET `nik` = '$NIK', `nisn` = '$NISN', `nis` = '$NIS', `nama_lengkap` = '$namaLengkap', `jenis_kelamin` = '$jenisKelamin', `tempat_lahir` = '$tempatKelahiran', `tanggallahir_siswa` = '$tanggalLahir', `bulanlahir_siswa` = '$bulanLahir', `tahunlahir_siswa` = '$tahunLahir',`agama` = '$Agama',`no_hp` = '$noHp' WHERE `siswa`.`id_siswa` = $id;";
		// echo $sql;die();
		$dbh->query($sql);			
	}


	header('location:form2.php');

 ?>