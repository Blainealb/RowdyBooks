<?php
/**
 * File: verify.php
 * Description: Provides the html and php for the Verify page
 * as well as the implementation for sending emails with
 * verification codes.
 * @author Kaleb Phillips
 */
require "dbconnect.php";
session_start();

// Check if user is logged in and if they are get the email from the session
if(isset($_SESSION['userid'])) {
	$id = $_SESSION['userid'];
	$query = "SELECT * FROM Users WHERE userid = '$id'";
	$result = mysqli_query($connection, $query);
	$row = $result->fetch_assoc();
	$email = $row['email'];
	$loggedin = true;
}
else {
	$loggedin = false;
}

require "verifyFunctions.php";

// If the resend code button was clicked
if(array_key_exists('resend', $_POST)) {
	// Check if user is logged in
	if ($loggedin) {
	// Check if the email has already been verified
		if(!checkVerified($email)) {
			// Send the new code
			sendCode($email);
			echo "You're code has been sent";
		}
		else {
			echo "You're already verified";
		}
	}
	else {
		echo "You are not logged in";
	}
}

// If the verify button was clicked
if(array_key_exists('verify', $_POST)) {
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		// Check if user is logged in
		if ($loggedin) {
			// Check if the email has already been verified
			if(!checkVerified($email)) {
				// Search database for the code that was entered
				$code = $_POST['code'];
				// NOTE: require dbconnect after using checkVerified to avoid error
				require "dbconnect.php";
				$query = "SELECT * FROM Verify WHERE code = '$code' AND email = '$email'";
				$result = mysqli_query($connection, $query);
				$row = $result->fetch_assoc();
				// If the code exists in the database
				if($row > 0) {
					// Get current time
					$time = time();

					// Check if code has expired
					if($row['expires'] > $time) {
						// Set the email as verified
						$query = "UPDATE Users SET email_verified = '$email' WHERE userid = '$id' LIMIT 1";
						$result = mysqli_query($connection, $query);
						echo "Thank you for verifying you're email";
						header("Location: profile.php");
						die();
					}
					else {
						echo "Code expired";
					}
				}
				else {
					echo "Wrong code";
				}
			}
			else {
				echo "You're already verified";
			}
		}
		else
		{
			echo "You are not logged in";
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Verify</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="../assets/css/login_style.css">

</head>

<body>
<div class="form">
	<h1>RowdyBooks</h1>
	<h1>Verify Your Email</h1>

	<div>
	<form method="post">
		<h2 style="color: white;"> An email with a verification code was sent to your email address.</h2>
		<h2 style="color: white;">You may need to check your spam folder to find it.</h2>
		<h2 style="color: white;">Enter your code below.</h2>
		<div class="field-wrap">
		<label>
			Enter your code<span class="req"></span>
		</label>
		<input type="text" name="code" style="width: 300px; height: 50px;" required autocomplete="off"/>
		<br>
		<div style="width:1000px;">
			<button type="submit" name="verify" class="button button-block" style="float: left; vertical-align: middle; margin-top: 10px; margin-right: 20px; width: 150px; height: 100px; display:inline-block;">Verify</button>
	</form>
	<form method="post">
		<button type="submit" name="resend" class="button button-block" style="vertical-align: middle; margin-left: 30px; margin-right: 10px; margin-top: 10px; padding: 10px; width: 325px; height: 100px; display:inline-block;">Send another code</button>
	</form>
			</div>
		</div>
	</div>
</div> <!-- /form -->
<!-- partial -->
<<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<<script src="../js/login_script.js"></script>

</body>
</html>
