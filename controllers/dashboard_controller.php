<?php

	require_once("controllers/db_controller.php");

?>

<?php

	session_start(); 
	if(!isset($_SESSION['email'])){
		header("Location: login.php");
	}

	if(isset($_POST['add'])){
		$success = addpass($_SESSION['email'], $_POST['website'], $_POST['loginid'], $_POST['password']);
		if($success == "1"){
			$user_err = "";
		}
		elseif($success == "-1"){
			$user_err = "Data already exists";
		}
	}

?>