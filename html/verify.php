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
		<form id="verifyForm" onsubmit="verifyCode()">
			<h2 style="color: white;"> An email with a verification code was sent to your email address.</h2>
			<h2 style="color: white;">You may need to check your spam folder to find it.</h2>
			<h2 style="color: white;">Enter your code below.</h2>
			<div class="field-wrap">
				<label>
					Enter your code<span class="req"></span>
				</label>
			<input type="text" id="codeInput" name="code" style="width: 300px; height: 50px;" required autocomplete="off"/>
			<br>

			<!-- Sending code message -->
			<div id="sending" style="text-align: center; display: none;">
				<h1> Emailing you a code, please wait...</h1>
			</div>

			<!-- Row of buttons -->
			<div style="width:1000px;">
			<button type="button" name="verify" onclick="verifyCode()" class="button button-block" style="float: left; vertical-align: middle; margin-top: 10px; margin-right: 20px; width: 150px; height: 100px; display:inline-block;">Verify</button>
		</form>
		<form>
			<button type="button" name="resend" onclick="sendingCode()" class="button button-block" style="vertical-align: middle; margin-left: 30px; margin-right: 10px; margin-top: 10px; padding: 10px; width: 325px; height: 100px; display:inline-block;">Send another code</button>
			</div>
		</div>
	</div>
</div> <!-- /form -->
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/login_script.js"></script>

<script>

	// Prevent the form from clearing on submit
	$("#verifyForm").submit(function(event){
		event.preventDefault()
	})

	/**
	 * Function: verifyCode
	 * Description: Uses ajax to call the verifyCode
	 * function to determine if the code entered
	 * matches the one in the database and sets
	 * the email to verified accordingly.
	 */
	function verifyCode() {
		// Get the code entered by the user
		var code = document.getElementById('codeInput').value
		// Get the login status, ID, and email of the user
		var loggedin = <?php echo json_encode($loggedin); ?>;
		var userid = <?php echo json_encode($id); ?>;
		var address = <?php echo json_encode($email); ?>;

		// Call verifyCode from verifyFunctions.php
		$.ajax({
			url:"verifyFunctions.php",
			type: "post",
			dataType: 'json',
			data: {functionname: 'verifyCode', login: loggedin, id: userid, email: address, code: code},
			success:function(result){
				console.log(result.code);
				alert(result.code);
				if (result.code == "Thank you for verifying you're email") {
					// Redirect to profile page
					window.location.href = "profile.php";
				}
				else if (result.code == "You're already verified") {
					// Redirect to profile page
					window.location.href = "profile.php";
				}
				else if (result.code == "You are not logged in") {
					// Redirect to login page
					window.location.href ="login.php";
				}
			}
		});
	}

	/**
	 * Function: sendingCode
	 * Description: Uses ajax to call the validRequest
	 * function to determine if a code can be sent
	 * and sends a code accordingly.
	 */
	function sendingCode() {
		// Display sending code message
		document.getElementById("sending").style = "display: block";
		// Get the login status and email of the user
		var loggedin = <?php echo json_encode($loggedin); ?>;
		var address = <?php echo json_encode($email); ?>;

		// Call validRequest from verifyFunctions.php
		$.ajax({
			url:"verifyFunctions.php",
			type: "post",
			dataType: 'json',
			data: {functionname: 'validRequest', login: loggedin, email: address},
			success:function(result){
				console.log(result.request);
				alert(result.request);
				// Hide sending code message
				document.getElementById("sending").style = "display: none";
				if (result.request == "You're already verified") {
					// Redirect to profile page
					window.location.href = "profile.php";
				}
				else if (result.request == "You are not logged in") {
					// Redirect to login page
					window.location.href ="login.php";
				}
			}
		});
	}
</script>

</body>
</html>
