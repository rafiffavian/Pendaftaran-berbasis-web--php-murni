
<?php 

	$id = $_GET['id'];

	    include 'config.php';
	    $sqlsiswa = "SELECT * FROM `siswa`
	                WHERE `siswa`.`id_siswa` = $id;";
		$sqlayah = "SELECT * FROM `data_ortu`
	                WHERE `data_ortu`.`id_siswa` = $id and `wali` = 'AYAH'";
	    $sqlibu = "SELECT * FROM `data_ortu`
	                WHERE `data_ortu`.`id_siswa` = $id and `wali` = 'IBU'";
	    $sqlwali = "SELECT * FROM `data_ortu`
	                WHERE `data_ortu`.`id_siswa` = $id and `wali` = 'WALI'";            
		$sqlsekolah = "SELECT * FROM `data_sekolah`
					WHERE `data_sekolah`.`id_siswa` = $id;";
		$sqlipa = "SELECT * FROM `nilai_ipa`
	                WHERE `nilai_ipa`.`id_siswa` = $id and `mata_pelajaran` = 'IPA'";
	    $sqlmtk = "SELECT * FROM `nilai_ipa`
	                WHERE `nilai_ipa`.`id_siswa` = $id and `mata_pelajaran` = 'MATEMATIKA'";
		$sqlbindo = "SELECT * FROM `nilai_ipa`
	                WHERE `nilai_ipa`.`id_siswa` = $id and `mata_pelajaran` = 'BAHASA INDONESIA'";
		$sqlbing = "SELECT * FROM `nilai_ipa`
	                WHERE `nilai_ipa`.`id_siswa` = $id and `mata_pelajaran` = 'BAHASA INGGRIS'";
            

	 $rowsiswa =  $dbh->query($sqlsiswa)->fetch(PDO::FETCH_OBJ);         
	 $rowayah = $dbh->query($sqlayah)->fetch(PDO::FETCH_OBJ);         
	 $rowibu = $dbh->query($sqlibu)->fetch(PDO::FETCH_OBJ);         
	 $rowwali = $dbh->query($sqlwali)->fetch(PDO::FETCH_OBJ);         
	 $rowsekolah = $dbh->query($sqlsekolah)->fetch(PDO::FETCH_OBJ);         
	 $rowipa = $dbh->query($sqlipa)->fetch(PDO::FETCH_OBJ);         
	 $rowmtk = $dbh->query($sqlmtk)->fetch(PDO::FETCH_OBJ);         
	 $rowbindo = $dbh->query($sqlbindo)->fetch(PDO::FETCH_OBJ);         
	 $rowbing = $dbh->query($sqlbing)->fetch(PDO::FETCH_OBJ);
	 $rowratatotal = ($rowipa->rata_ipa+$rowmtk->rata_ipa+$rowbindo->rata_ipa+$rowbing->rata_ipa)/4;           
	 
 ?>