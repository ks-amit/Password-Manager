<?php

	require_once("controllers/db_controller.php");

?>

<?php

	session_start(); 
	if(!isset($_SESSION['email'])){
		header("Location: login.php");
	}

	clearallpass($_SESSION['email']);
	header("Location: dashboard.php");

?>