<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="/assets/css/login_style.css">
<!-------------------------------------- Modifications by Blaine Byrd: Log in Page --------------------------------------------
                * Modified template fit site needs 
                * Created two forms "Registration.php and home.php" to send information to 
                * Modified the method to "post" to ensure that private information is not leaked in the url
        --------------------------------------------------------------------------------------------------------------------------------->

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
	<h1>RowdyBooks</h1>

	<h1>What kind of user are you?</h1>

	<button class="button button-block" onclick="window.location.href='login.php'">Customer</button>
 <?php echo "<br>"; ?>	
	<button class="button button-block" onclick="window.location.href='vendor-login.php'">Vendor</button>
 <?php echo "<br>"; ?>
  	<button class="button button-block" onclick="window.location.href='admin-login.php'">Admin</button>
      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../js/login_script.js"></script>

</body>
</html>

