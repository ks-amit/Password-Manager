<?php 

	include("controllers/db_controller.php");

?>

<?php 

	if(isset($_GET["id"]) && isset($_GET["key"])){
		$success = fetchtoken($_GET["id"]);
		if($success == $_GET["key"]){
			$showdiv = "1";
		}
		else{
			echo "Invalid URL";
		}
	}
	else{
		echo "Invalid URL";
	}

	if(isset($_POST["submit"])){
		if($_POST["pass"] != $_POST["cpass"]){
			$form_err = "Passwords do not match";
		}
		else{
			$hashed_password = password_hash($_POST["pass"], PASSWORD_BCRYPT);
			$success = resetpass($_GET["id"], $hashed_password);
			if($success == "1"){
				$user_err = "1";
			}
			else if($success == "2"){
				$user_err = "2";
			}
		}
	}

?>