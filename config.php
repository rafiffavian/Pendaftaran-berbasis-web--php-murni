<?php  

try{
	$dbh = new PDO('mysql:host=localhost;dbname=pendaftaran',"root", "");

	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// echo "berhasil";
	// die();


}
catch (PDOException $e) {

	echo "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
	die();
}
include 'helper.php';
?>