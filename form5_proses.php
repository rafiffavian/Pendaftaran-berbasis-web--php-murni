<?php 

	include "config.php";
	$folder = $_POST['folder'];
	$nama_gambar = $_FILES['gambar']['name'];//untuk mengambil nama gambar
	$nama_gambar_rand = rand(0,100).'-'.$nama_gambar;//agar kalo kita punya nama file yang sma tidak ke replace , file yang sebelumnya
	$file_temp = $_FILES['gambar']['tmp_name']; //untuk mengambil path/lokasi dari file nya
	$ukuran_gambar = $_FILES['gambar']['size'];
	$tipe = $_FILES['gambar']['type'];
	$yang_boleh = array('png','jpg','gif');
	$ext = explode('.', $nama_gambar);
	$extensi = strtolower(end($ext));
	$pencet = $_POST['proses'];
	//$foto = $_POST['gambar'];
	$id = $_GET['id'];
	// $target_dir = "folderupload/";
	// 	$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
	// 	$uploadOk = 1;
	// 	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// 	// Check if image file is a actual image or fake image
	// 	if(isset($_POST["proses"])) {
	// 	    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
	// 	    if($check !== false) {
	// 	        echo "File is an image - " . $check["mime"] . ".";
	// 	        $uploadOk = 1;
	// 	    } else {
	// 	        echo "File is not an image.";
	// 	        $uploadOk = 0;
	// 	    }
	// 	}
	// 	if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
 //        echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
 //    } else {
 //        echo "Sorry, there was an error uploading your file.";
 //    }


	

	if($pencet == "tambah"){	
		 if(in_array($extensi, $yang_boleh) === true && $ukuran_gambar <= 1000000000){
			move_uploaded_file($file_temp, 'img/'.$nama_gambar_rand);
			}
		else{
			echo "Tipe file atau ukuran file anda tidak memenuhi syarat";
			die();
		}	
		$sql = "UPDATE `siswa` SET `foto_siswa` = '$nama_gambar_rand'
				 WHERE `siswa`.`id_siswa` = $id;";
	$dbh->query($sql);

	
	}
	header('location:form6.php?id='.$id);

 ?>