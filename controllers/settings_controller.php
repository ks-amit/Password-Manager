<?php 
	
	require_once("controllers/db_controller.php");

?>

<?php

	session_start(); 
	if(!isset($_SESSION['email'])){
		header("Location: login.php");
	}

	if(isset($_POST['change_pass'])){
		$userpass = fetch($_SESSION['email']);
		if(password_verify($_POST['cpass'], $userpass)){
			if($_POST['npass'] == $_POST['cnpass']){
				$user_err = "";
				$hashed_password = password_hash($_POST["npass"], PASSWORD_BCRYPT);
				resetpass($_SESSION['email'], $hashed_password);
				$user_err = "Password Changed";
			}
			else{
				$user_err = "Passwords do not match";
			}
		}
		else{
			$user_err = "Incorrect Password";
		}
	}

	if(isset($_POST['del_acc'])){
		$userpass = fetch($_SESSION['email']);
		if(password_verify($_POST['cpass'], $userpass)){
			$del_err = "";
			clearallpass($_SESSION['email']);
			deletefromusers($_SESSION['email']);
			$showalert = "1";
		}
		else{
			$del_err = "Incorrect Password";
			$showalert = "";
		}
	}

?>