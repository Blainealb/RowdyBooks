<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../assets/css/login_style.css">
<!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
-->

<!-------------------------------------- Modifications by Blaine Byrd: Admin Log in Page --------------------------------------------
                * Modified template fit site needs 
                * Created two forms "Registration.php and home.php" to send information to 
                * Modified the method to "post" to ensure that private information is not leaked in the url
        --------------------------------------------------------------------------------------------------------------------------------->

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
  <h1>RowdyBooks</h1>

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">SIGN UP</a></li>
        <li class="tab"><a href="#login">LOG IN</a></li> 
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Create Vendor Account</h1>
 	  <form action="vendor-registration.php" method="post">
	     <div class="field-wrap">
      <label>
        Vendor Name<span class="req">*</span>
      </label>
      <input type="text" id="vendor_name" name="vendor_name" required autocomplete="off" />
    </div>

    <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input type="email" id="vendor_email" name="vendor_email" required autocomplete="off" />
    </div>

    <div class="field-wrap">
      <label>
        Set A Password<span class="req">*</span>
      </label>
      <input type="password" id="vendor_pwd" name="vendor_pwd" required autocomplete="off" />
    </div>

    <button type="submit" class="button button-block">Get Started</button>	
	  </form>
	  
        </div>

        <div id="login">
          <h1>Welcome Back, Vendor!</h1>
		
	  <form action="vendor-home.php" method="post">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id ="vendor_email" name="vendor_email" required autocomplete="off"/>
            </div>
            <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id ="vendor_pwd" name="vendor_pwd" required autocomplete="off"/>
            </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block">Log In</button>

          </form>
        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../js/login_script.js"></script>
<!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
-->
</body>
</html>

