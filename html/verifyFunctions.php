<?php
/**
 * File: verifyFunctions.php
 * Description: Provides the functions needed to send
 * verificatiopn codes and to check account
 * verification status.
 * @author Kaleb Phillips
 */
if (isset($_POST['functionname']) && isset($_POST['login']) && isset($_POST['email'])) {
	// Get the function name
	$name = $_POST['functionname'];
	// Get the login status and email
	$loggedin = $_POST['login'];
	$email = $_POST['email'];
	//echo json_encode(["request" => "test"]);

	// If the function to call is sendCode
	if ($name = 'validRequest') {
		$result = validRequest($loggedin, $email);
		if ($result == 0) {
			echo json_encode(["request" => "You're code has been sent"]);
		}
		else if ($result == 1) {
			echo json_encode(["request" => "You're already verified"]);
		}
		else if ($result == 2) {
			echo json_encode(["request" => "You are not logged in"]);
		}
		else {
			echo json_encode(["request" => "Error"]);
		}
	}

}
/**
 * Function: checkVerified
 * Description: Searches for an email in the database and
 * checks if it has been verified by comparing the email
 * and email_verified columns match.
 * @param email - the email address to send the code to.
 * @return - a boolean with true if the email has been verified.
 */

session_start();
function checkVerified ($email) {
	require "dbconnect.php";
	// Search the database for the email
	$query = "SELECT * FROM Users WHERE email = '$email'";
	$result = mysqli_query($connection, $query);
	$row = $result->fetch_assoc();

	// If the email was found
	if($row > 0) {
		// Compare email to email_verified to determine if email has been verified
		if ($row['email'] == $row['email_verified']) {
			return true;
		}
	}
	return false;
}

/**
 * Function: sendCode
 * Description: Generates a verification code and sends
 * it as an email to the provided email address.
 * @param email - the email address to send the code to.
 */
function sendCode ($email) {
	require "dbconnect.php";
	// Generate code to insert into database
	$code = rand(10000000,99999999);
	// Code will expire after 10 minutes
	$expires = time() + (60 * 10);

	// Save code to database
	$query = "INSERT INTO Verify (code, expires, email) VALUES ('$code','$expires','$email')";
	$result = mysqli_query($connection, $query);
	if($result) {
		// Send email with code
		$command = escapeshellcmd("/var/www/python/sendEmail.py $email $code");
		$output = exec($command, $output, $return_var);
		return $return_var;
	}
	else {
		return 1;
	}
}

/**
 * Function: sendCode
 * Description: Generates a verification code and sends
 * it as an email to the provided email address.
 * @param email - the email address to send the code to.
 */
function validRequest ($loggedin, $email) {
	// Check if user is logged in
	if ($loggedin) {
		// Check if the email has already been verified
		if(!checkVerified($email)) {
			// Send the new code
			$return_value = sendCode($email);
			return $return_value;
		}
		else {
			return 1;
		}
	}
	else {
		return 2;
	}
}

?>
