<?php 

	include("controllers/db_controller.php");
	include("controllers/mail_controller.php");

?>

<?php 

	if(isset($_POST["submit"])){
		if(preg_match("/@/", $_POST["email"]) == false){
			$form_err = "Invalid E-Mail";
		}
		else{
			$temp1 = fetch($_POST["email"]);
			if($temp1 != "-1"){
				$form_err = "";
				$user_err = "1";
				$token = openssl_random_pseudo_bytes(10);
				$token = bin2hex($token);
				$temp2 = forgotpass($_POST["email"], $token);
				$act_link = "http://localhost:8000/reset.php?id=".urlencode($_POST["email"])."&key=".urlencode($token)."";
				forgotmail($_POST["email"], $act_link);
			}
			else{
				$form_err = "Please register/activate your account";
			}
		}
	}

?>