<?php
/**
 * File: verification.php
 * Description: Provides the html and php for the Verification page
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

// If the send code button was clicked
if(array_key_exists('sendCode', $_POST)) {/*
	// Check if user is logged in
	if ($loggedin) {
		// Check if the email has already been verified
		if(!checkVerified($email)) {
			// Send the new code
			$result = sendCode($email);
			if ($result == 0) {
				header("Location: verify.php");
			}
			else {
				echo "Error generating code";
			}
		}
		else {
			echo "You're already verified";
		}
	}
	else {
		echo "You are not logged in";
	}*/
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
<div class="form" style="width: 600px; height: 622px; padding: 40px">
	<h1>RowdyBooks</h1>
	<br><br><br><br><br>
	<h1 style="font-weight: bold; font-size: 38px;">Let's Verify Your Email</h1>

	<!-- Sending code message  -->
	<div id="sending" style="text-align: center; display: none;">
		<h1> Emailing you a code...</h1>
	</div>

	<!--<form method="post">
		<button onclick="sendingCode()" type="submit" name="sendCode" class="button button-block" style="padding: 10px; position: absolute; top: 50%; left: 50%; ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); width: 325px; height: 100px; display:inline-block;">Send Me a Code</button>
	</form>-->
	<input type="button" id="sending" onclick="sendingCode()" value="Send Me a Code" class="button button-block" style="padding: 10px; position: absolute; top: 50%; left: 50%; ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); width: 340px; height: 100px; display:inline-block;"></button>

</div> <!-- /form -->
<!-- partial -->
<<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<<script src="../js/login_script.js"></script>

<script>
function sendingCode() {
	document.getElementById("sending").style = "display: block";
	var loggedin = <?php echo json_encode($loggedin); ?>;
	var address = <?php echo json_encode($email); ?>;

	$.ajax({
			url:"verifyFunctions.php",
			type: "post",
			dataType: 'json',
			data: {functionname: 'validRequest', login: loggedin, email: address},
			success:function(result){
				console.log(result.request);
				alert(result.request);
				if (result.request == "You're code has been sent") {
					window.location.href = "verify.php";
				}
			}
	});
}
</script>

</body>
</html>
