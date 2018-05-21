<?php 
  	$showdiv = ""; 
  	include("controllers/activate_controller.php");
 ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Password Manager - Account Activation</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="./css/style.css">

  
</head>

<body>
  
  <?php if($showdiv == "1"){ ?>

  <div class="login-card">
    <h1 style="color: blue;">PASSWORD MANAGER</h1>
    <h1>Activate Account</h1><br>
    <label>Your Account has been activated. You may now login with your credentials.</label>
    
  <div style="margin-top: 20px;" class="login-help">
    <a href="login.php">Back to Login Page</a> 
  </div>

</div>

  <?php } elseif($showdiv == "2"){ ?>

  <label>Invalid URL</label>

  <?php } elseif($showdiv == "3"){ ?>

  <label>Account not activated. There is an error.</label>

  <?php } ?>




<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

</body>

</html>
