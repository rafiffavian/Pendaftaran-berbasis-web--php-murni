<?php 

	include "config.php";
	//DATA ORTU
	$namaAyah = $_POST['namaayah'];
	$pendidikanAyah = $_POST['pendidikanayah'];
	$pekerjaanAyah = $_POST['pekerjaanayah'];
	$penghasilanAyah = $_POST['penghasilanayah'];
	$nohpAyah = $_POST['nohpayah'];
	$namaIbu = $_POST['namaibu'];
	$pendidikanIbu = $_POST['pendidikanibu'];
	$pekerjaanIbu = $_POST['pekerjaanibu'];
	$penghasilanIbu = $_POST['penghasilanibu'];
	$nohpIbu = $_POST['nohpibu'];
	$namaWali = $_POST['namawali'];
	$pendidikanWali = $_POST['pendidikanwali'];
	$pekerjaanWali = $_POST['pekerjaanwali'];
	$penghasilanWali = $_POST['penghasilanwali'];
	$nohpWali = $_POST['nohpwali'];
	$id = $_SESSION['id_siswa'];
	$tekan = $_POST['proses'];

	$_SESSION['form2'] = $_POST;

	if($tekan == "OK"){

		if(isset($_SESSION['id_ayah']) && $_SESSION['id_ayah'] != 0){
			$sqlayah = "UPDATE `data_ortu` SET `id_siswa` = '$id', `nama_lengkap` = '$namaAyah', `pendidikan` = '$pendidikanAyah', `pekerjaan` = '$pekerjaanAyah', `penghasilan` = '$penghasilanAyah', `no_handphone_ortu` = '$nohpAyah', `wali` = 'AYAH' WHERE `data_ortu`.`id_ortu` = $_SESSION[id_ayah];";
			$sqlibu = "UPDATE `data_ortu` SET `id_siswa` = '$id', `nama_lengkap` = '$namaIbu', `pendidikan` = '$pendidikanIbu', `pekerjaan` = '$pekerjaanIbu', `penghasilan` = '$penghasilanIbu', `no_handphone_ortu` = '$nohpIbu', `wali` = 'IBU' WHERE `data_ortu`.`id_ortu` = $_SESSION[id_ibu];";
			$sqlwali = "UPDATE `data_ortu` SET `id_siswa` = '$id', `nama_lengkap` = '$namaWali', `pendidikan` = '$pendidikanWali', `pekerjaan` = '$pekerjaanWali', `penghasilan` = '$penghasilanWali', `no_handphone_ortu` = '$nohpWali', `wali` = 'WALI' WHERE `data_ortu`.`id_ortu` = $_SESSION[id_wali];";
	

			$dbh->query($sqlayah);
			$dbh->query($sqlibu);
			$dbh->query($sqlwali);
		}
		else{

			$sqlayah = "INSERT INTO `data_ortu` (`id_siswa`, `nama_lengkap`, `pendidikan`, `pekerjaan`, `penghasilan`, `no_handphone_ortu`, `wali`) VALUES ('$id', '$namaAyah', '$pendidikanAyah', '$pekerjaanAyah', '$penghasilanAyah', '$nohpAyah', 'AYAH');";
			$sqlibu = "INSERT INTO `data_ortu` (`id_siswa`, `nama_lengkap`, `pendidikan`, `pekerjaan`, `penghasilan`, `no_handphone_ortu`, `wali`) VALUES ('$id', '$namaIbu', '$pendidikanIbu', '$pekerjaanIbu', '$penghasilanIbu', '$nohpIbu', 'IBU');";
			$sqlwali = "INSERT INTO `data_ortu` (`id_siswa`, `nama_lengkap`, `pendidikan`, `pekerjaan`, `penghasilan`, `no_handphone_ortu`, `wali`) VALUES ('$id', '$namaWali', '$pendidikanWali', '$pekerjaanWali', '$penghasilanWali', '$nohpWali', 'WALI');";
					echo $sqlayah;
				
			
			$dbh->query($sqlayah);
			$_SESSION['id_ayah']=$dbh->lastInsertId();
			$dbh->query($sqlibu);
			$_SESSION['id_ibu']=$dbh->lastInsertId();
			$dbh->query($sqlwali);
			$_SESSION['id_wali']=$dbh->lastInsertId();
		}
	}	

	// $_SESSION['id_ortu']=$dbh->lastInsertId();
	// header('location:form3.php');

 ?>	