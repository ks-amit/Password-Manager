<?php 
    $form_err = $user_err = ""; 
    include("controllers/forgot_controller.php");
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Password Manager - Forgot Password</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="./css/style.css">

  
</head>

<body>

  <div class="login-card">
    <h1 style="color: blue;">PASSWORD MANAGER</h1>
    <h1>Forgot Password</h1><br>
  <form method="POST">
    <input type="text" name="email" placeholder="E-Mail">
    <input style="cursor: pointer;" type="submit" name="submit" class="login login-submit" value="Reset">
  </form>
    
  <div class="login-help">
    <a href="login.php">Know your password? Login now</a> 
  </div>

  <div style="margin-top: 10px; text-align: center;">
  <label style="color: red; font-size: 14px;"><?php if($form_err != ""){ echo "{$form_err}"; } ?></label> 
  </div>

  <?php

    if($user_err == "1") {
      echo "<script type='text/javascript'>alert('Reset request Successful. Please check your E-Mail to reset your password.'); window.location = '/login.php';</script>";
    }   

  ?>

</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

</body>

</html>
