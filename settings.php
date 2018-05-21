<?php  

  $user_err = $del_err = $showalert = "";
  include("controllers/settings_controller.php");

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Password Manager - Account Settings</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/inner_css.css" />
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
        <label style="font-size: 40px; margin-left: 300px; color: purple;">Account Settings</label>
        <h1>Change Password</h1>
        <form style="margin-top: 30px;" method="post">
          <div class="form_settings">
            <p><span>Current Password: </span><input type="password" name="cpass" placeholder="Enter Current Password" required /></p>
            <p><span>New Password: </span><input type="password" name="npass" placeholder="Enter New Password" required /></p>
            <p><span>Confirm New Password: </span><input type="password" name="cnpass" placeholder="Enter New Password" required /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="change_pass" value="Change" /></p>
          </div>
        </form>
        <div style="margin-top: 15px;">
          <label style="color: red; font-size: 14px; margin-left: 180px;"><?php if($user_err != ""){ echo "{$user_err}"; } ?></label>
        </div>
        <h2 style="margin-top: 25px;">Delete Account</h2>
        <form style="margin-top: 30px;" method="post">
          <div class="form_settings">
            <p><span>Password: </span><input type="password" name="cpass" placeholder="Enter Password" required /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="del_acc" value="Delete" /></p>
          </div>
        </form>
        <div style="margin-top: 15px;">
          <label style="color: red; font-size: 14px; margin-left: 190px;"><?php if($del_err != ""){ echo "{$del_err}"; } ?></label>
        </div>
        <h2 style="margin-top: 25px;">Comments</h2>
        <p style="font-size: 15px;">
          The project is open at <a href="http://www.github.com/dumbape">Github</a>. <br> If you like this project or want to suggest any improvements, you may drop a mail to <b>1998amit@gmail.com</b>. <br> For more about the project, visit <a href="http://www.github.com/dumbape">Github</a>.
        </p>
      </div>
    </div>
    <div id="content_footer"></div>

    <?php  

      include("partials/footer.php");

    ?>
    
  </div>
  <?php

    if($showalert == "1") {
      echo "<script type='text/javascript'>alert('Account Deleted. You will be redirected to the Login Page.'); window.location = '/login.php';</script>";
    }   

  ?>  
</body>
</html>
