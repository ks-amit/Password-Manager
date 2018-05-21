<?php 

	include("controllers/db_controller.php");

?>

<?php 

	if(isset($_GET["id"]) && isset($_GET["key"])){
		$success = fetchtoken($_GET["id"]);
		if($success == $_GET["key"]){
			$temp = activate($_GET["id"]);
			if($temp == "1"){
				$showdiv = "1";
			}
			else{
				$showdiv = "3";
			}
		}
		else{
			$showdiv = "2";
		}
	}
	else{
		echo "Invalid URL";
	}

?>