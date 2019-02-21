<?php 

	include("config.php");
	//SIGN UP
	// echo "proses";
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$Email = $_POST['email'];
	$alternativEmail = $_POST['aemail'];
	$Password = $_POST['password'];
	$confirmPassword = $_POST['cpassword'];
	$Address = $_POST['address'];
	$Negara = $_POST['negara'];
	$tekan = $_POST['proses'];

	
	$_SESSION['form_signup'] = $_POST;


	// print_r($_SESSION);die();

	if($tekan == "OK"){
		if(isset($_SESSION['id_siswa'])){
			// echo "UPDATE";
			// echo $_SESSION['id_siswa'];
			// die();
			// die();
			$sql = "UPDATE `siswa` SET `first_name` = '$firstName', `last_name` = '$lastName', `email` = '$Email', `alternative_email` = '$alternativEmail', `password` = '$Password', `confirm_password` = '$confirmPassword', `alamat` = '$Address',`negara` = '$Negara'
			WHERE `siswa`.`id_siswa` = $_SESSION[id_siswa];";
			$_SESSION['id_siswa']=$_SESSION['id_siswa'];
			$dbh->query($sql);
		}
		else{
			$sql = "INSERT INTO `siswa` (`first_name`, `last_name`, `email`, `alternative_email`, `password`, `confirm_password`, `alamat`, `negara`) 
					VALUES ('$firstName', '$lastName', '$Email', '$alternativEmail', '$Password', '$confirmPassword', '$Address', '$Negara');";
			$dbh->query($sql);			
			$_SESSION['id_siswa']=$dbh->lastInsertId();
		}
		
	}




	
	
	header('location:form1.php');

 ?>