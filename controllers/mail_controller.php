<?php 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'vendor/autoload.php';
	global $server_mail;
	global $server_pass;
	$server_mail = "";
	$server_pass = "";

?>

<?php 
	
	function registermail($send_to, $act_link){
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
	    	//Server settings
	    	$mail->SMTPDebug = false;                                 // Enable verbose debug output
	    	$mail->isSMTP();                                      // Set mailer to use SMTP
	    	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	    	$mail->Username = $GLOBALS['server_mail'];                 // SMTP username
	    	$mail->Password = $GLOBALS['server_pass'];                           // SMTP password
	    	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    	$mail->Port = 587;                                    // TCP port to connect to

	    	//Recipients
	    	$mail->setFrom($GLOBALS['server_mail'], 'Password Manager');
	    	$mail->addAddress($send_to, '');     // Add a recipient

	    	//Content
	    	$mail->isHTML(true);                                  // Set email format to HTML
	    	$mail->Subject = 'Account Activation';
	    	$mail->Body    = "Dear User, <br> <br>
	    						Thankyou for registering to Password Manager. You may start using our services after you verify your account. <br> Goto the link provided below to activate your new account. <br> <br>
	    							<a href=".$act_link.">Click Here to Activate</a> <br> <br> Regards <br> Password Manager <br>";
	    	$mail->AltBody = 'Welcome to Password Manager. Your system is incompatible with our website. Sorry for the inconvenience.';

	    	$mail->send();
		} catch (Exception $e) {
	    	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}

	function forgotmail($send_to, $act_link){
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
	    	//Server settings
	    	$mail->SMTPDebug = false;                                 // Enable verbose debug output
	    	$mail->isSMTP();                                      // Set mailer to use SMTP
	    	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	    	$mail->Username = $GLOBALS['server_mail'];                 // SMTP username
	    	$mail->Password = $GLOBALS['server_pass'];                           // SMTP password
	    	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    	$mail->Port = 587;                                    // TCP port to connect to

	    	//Recipients
	    	$mail->setFrom($GLOBALS['server_mail'], 'Password Manager');
	    	$mail->addAddress($send_to, '');     // Add a recipient

	    	//Content
	    	$mail->isHTML(true);                                  // Set email format to HTML
	    	$mail->Subject = 'Password Reset';
	    	$mail->Body    = "Dear User, <br> <br>
	    						You have requested to reset your password. <br> Goto the link provided below to reset your account password. <br> <br>
	    							<a href=".$act_link.">Click Here to Reset</a> <br> <br> Regards <br> Password Manager <br>";
	    	$mail->AltBody = 'Welcome to Password Manager. Your system is incompatible to our website. Sorry for the inconvenience.';

	    	$mail->send();
		} catch (Exception $e) {
	    	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}
		
?>