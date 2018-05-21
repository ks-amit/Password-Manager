<?php  
  global $nopass;
  $user_err = $nopass = "";
  require_once("controllers/dashboard_controller.php");

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Password Manager - Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/inner_css.css" />
  <script type="text/javascript" src="js/dashboard.js"></script>
</head>

<body>
  <div id="main">

    <?php 

    	include("partials/header.php");

    ?>

    <div id="content_header"></div>
    <div id="site_content">
      <div id="">
        <!-- insert the page content here -->
        <label style="font-size: 35px;">Your passwords</label>
        
        <table class="table table-bordered table-striped" style="width:100%; border-spacing:0; margin-top: 30px;">
          <tr><th>Name</th><th>Login ID</th><th>Password</th><th></th></tr>
          <?php

            retrievepass($_SESSION['email']);

          ?>
        </table>
        <div style="text-align: center;">
          <label><?php if($nopass != ""){ echo "{$nopass}"; } ?></label>
        </div>
        <div style="margin-top: 15px;">
          <button style="margin-left: 566px; width: 150px;" name="showpass" id='showpass' >Show Passwords</button>
          <button style="margin-left: 10px; width: 150px;" onclick="location.href = 'clearall.php';" name="clearall" id='clearall' >Clear All</button>
        </div>
        <h2 style="margin-top: 20px;">Add New Password</h2>
        <form style="margin-top: 30px;" method="post">
        <div class="form_settings">
          <p><span style="font-size: 16px;">Website: </span><input type="text" name="website" placeholder="Enter Website Name" required /></p>
          <p><span style="font-size: 16px;">Login ID: </span><input type="text" name="loginid" placeholder="Enter Login ID" required /></p>
          <p><span style="font-size: 16px;">Password: </span><input type="password" name="password" placeholder="Enter Password" required /></p>
          <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Add" /></p>
        </div>
        </form>

        <div style="margin-top: 10px; margin-left: 175px;">
        <label style="color: red; font-size: 14px;"><?php if($user_err != ""){ echo "{$user_err}"; } ?></label> 
        </div>

        <h1 style="font-size: 35px; margin-top: 20px; color: purple;">About</h1>
        <p style="font-size: 16px;">
          This tool simplifies the overhead of remembering the passwords for different accounts in various websites. <br> To add a new password, fill up the details in the form displayed above and click add.<br> To remove any password, click on the corresponding remove button in the table. <br> To change your password or to delete your account, go to the settings tab.<br> Make sure to logout your account before you leave.<br> The project is open at <a href="http://www.github.com/dumbape">Github</a>. You are free to propose any modifications in the project.
        </p>

      </div>
    </div>
    <div id="content_footer"></div>

    <?php  

    	include("partials/footer.php");

    ?>
    
  </div>
</body>
</html>
