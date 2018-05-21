<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Password Manager - Register</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="./css/style.css">

  
</head>

<body>

  <?php 
  	$form_err = $success = ""; 
  	include("controllers/register_controller.php");
  ?>	

  <div class="login-card">
  	<h1 style="color: blue;">PASSWORD MANAGER</h1>
    <h1>Register</h1><br>
  <form method="post">
    <input type="text" name="email" placeholder="E-Mail" required>
    <input type="password" name="pass" placeholder="Password" required>
    <input type="password" name="cpass" placeholder="Confirm Password" required>
    <input style="cursor: pointer;" type="submit" name="submit" class="login login-submit" value="Register">
  </form>
    
  <div class="login-help">
    <a href="login.php">Already Registered? Login</a> 
  </div>

  <div style="margin-top: 10px; text-align: center;">
	<label style="color: red; font-size: 14px;"><?php if($form_err != ""){ echo "{$form_err}"; } ?></label>	
  </div>

  <?php

    if($success == "1") {
    	echo "<script type='text/javascript'>alert('Registration Successful. Please check your E-Mail to activate your account.'); window.location = '/login.php';</script>";
    }   
    elseif($success == "2"){
        echo "<script type='text/javascript'>alert('User already exists. Please Activate/Login')</script>";
    }

  ?>

</div>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

</body>

</html>
