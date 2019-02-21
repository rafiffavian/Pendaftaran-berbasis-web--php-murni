<?php 

  include ("config.php");
	$ipa1= $_POST['ipa1'];
	$ipa2= $_POST['ipa2'];
	$ipa3= $_POST['ipa3'];
	$ipa4= $_POST['ipa4'];
	
	$mtk1= $_POST['mtk1'];
	$mtk2= $_POST['mtk2'];
	$mtk3= $_POST['mtk3'];
	$mtk4= $_POST['mtk4'];
	
	$bindo1= $_POST['bindo1'];
	$bindo2= $_POST['bindo2'];
	$bindo3= $_POST['bindo3'];
	$bindo4= $_POST['bindo4'];
	
	$bing1= $_POST['bing1'];
	$bing2= $_POST['bing2'];
	$bing3= $_POST['bing3'];
	$bing4= $_POST['bing4'];
	$id = $_GET['id'];

	$rataTotal = $_POST['ratatotal'];
	

	//proses

	$rataIpa = ($ipa1 + $ipa2 + $ipa3 + $ipa4)/4;
	$rataMtk = ($mtk1 + $mtk2 + $mtk3 + $mtk4)/4;
	$rataBindo = ($bindo1 + $bindo2 + $bindo3 + $bindo4)/4;
	$rataBing = ($bing1 + $bing2 + $bing3 + $bing4)/4;
	$rataTotal = ($rataIpa + $rataMtk + $rataBindo + $rataBing)/4;

	$sqlipa = "INSERT INTO `nilai_ipa` (`id_nilai`, `id_siswa`, `nilai_satu`, `nilai_dua`, `nilai_tiga`, `nilai_empat`, `rata_ipa`, `mata_pelajaran`) VALUES (NULL, '$id', '$ipa1', '$ipa2', '$ipa3', '$ipa4', '$rataIpa', 'IPA');";
	$sqlmtk = "INSERT INTO `nilai_ipa` (`id_nilai`, `id_siswa`, `nilai_satu`, `nilai_dua`, `nilai_tiga`, `nilai_empat`, `rata_ipa`, `mata_pelajaran`) VALUES (NULL, '$id', '$mtk1', '$mtk2', '$mtk3', '$mtk4', '$rataMtk', 'MATEMATIKA');";
	$sqlbindo = "INSERT INTO `nilai_ipa` (`id_nilai`, `id_siswa`, `nilai_satu`, `nilai_dua`, `nilai_tiga`, `nilai_empat`, `rata_ipa`, `mata_pelajaran`) VALUES (NULL, '$id', '$bindo1', '$bindo2', '$bindo3', '$bindo4', '$rataBindo', 'BAHASA INDONESIA');";
	$sqlbing = "INSERT INTO `nilai_ipa` (`id_nilai`, `id_siswa`, `nilai_satu`, `nilai_dua`, `nilai_tiga`, `nilai_empat`, `rata_ipa`, `mata_pelajaran`) VALUES (NULL, '$id', '$bing1', '$bing2', '$bing3', '$bing4', '$rataBing', 'BAHASA INGGRIS');";

	$dbh->query($sqlipa);
	$dbh->query($sqlmtk);
	$dbh->query($sqlbindo);
	$dbh->query($sqlbing);

	header('location:form5.php?id='.$id);

?>