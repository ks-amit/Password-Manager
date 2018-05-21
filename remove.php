<?php

	require_once("controllers/db_controller.php");

?>

<?php

	session_start(); 
	if(!isset($_SESSION['email'])){
		header("Location: login.php");
	}

	if(!isset($_GET['id'])){
		echo "Invalid URL";
	}
	else{
		removepass($_GET['id']);
		header("Location: dashboard.php");
	}

?>