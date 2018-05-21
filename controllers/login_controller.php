<?php

	include("controllers/db_controller.php");

?>

<?php 
	if(isset($_POST["submit"])){
		if(preg_match("/@/", $_POST["email"]) == false){
			$form_err = "Invalid E-Mail";
		}
		else{
			$success = fetch($_POST["email"]);
			if($success == "-1"){
				$user_err = "2";
			}
			elseif(password_verify($_POST["pass"], $success)){
				session_start();
				$_SESSION['email'] = $_POST["email"]; 
				session_commit();     
				header("Location: dashboard.php");			
			}
			else{
				$user_err = "1"; 
			}
		}
	}
?>